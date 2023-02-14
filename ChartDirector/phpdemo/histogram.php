<?php
require_once("../lib/phpchartdir.php");

#
# This example demonstrates creating a histogram with a bell curve from raw data. About half of the
# code is to sort the raw data into slots and to generate the points on the bell curve. The
# remaining half of the code is the actual charting code.
#

# Generate a random guassian distributed data series as the input data for this example.
$r = new RanSeries(66);
$samples = $r->getGaussianSeries(200, 100, 10);

#
# Classify the numbers into slots. In this example, the slot width is 5 units.
#
$slotSize = 5;

# Compute the min and max values, and extend them to the slot boundary.
$m = new ArrayMath($samples);
$minX = (int)($m->min() / $slotSize) * $slotSize;
$maxX = (int)($m->max() / $slotSize) * $slotSize + $slotSize;

# We can now determine the number of slots
$slotCount = (int)(($maxX - $minX) / $slotSize + 0.5);
$frequency = array_fill(0, $slotCount, 0);

# Count the data points contained in each slot
for($i = 0; $i < count($samples); ++$i) {
    $slotIndex = (int)(($samples[$i] - $minX) / $slotSize);
    $frequency[$slotIndex] = $frequency[$slotIndex] + 1;
}

#
# Compute Normal Distribution Curve
#

# The mean and standard deviation of the data
$mean = $m->avg();
$stdDev = $m->stdDev();

# The normal distribution curve (bell curve) is a standard statistics curve. We need to vertically
# scale it to make it proportion to the frequency count.
$scaleFactor = $slotSize * count($samples) / $stdDev / sqrt(2 * 3.1416);

# In this example, we plot the bell curve up to 3 standard deviations.
$stdDevWidth = 3.0;

# We generate 4 points per standard deviation to be joined with a spline curve.
$bellCurveResolution = (int)($stdDevWidth * 4 + 1);
$bellCurve = array_fill(0, $bellCurveResolution, 0);
for($i = 0; $i < $bellCurveResolution; ++$i) {
    $z = 2 * $i * $stdDevWidth / ($bellCurveResolution - 1) - $stdDevWidth;
    $bellCurve[$i] = exp(-$z * $z / 2) * $scaleFactor;
}

#
# At this stage, we have obtained all data and can plot the chart.
#

# Create a XYChart object of size 600 x 360 pixels
$c = new XYChart(600, 360);

# Set the plotarea at (50, 30) and of size 500 x 300 pixels, with transparent background and border
# and light grey (0xcccccc) horizontal grid lines
$c->setPlotArea(50, 30, 500, 300, Transparent, -1, Transparent, 0xcccccc);

# Display the mean and standard deviation on the chart

$c->addTitle("Mean = " . $c->formatValue($mean, "{value|1}") . ", Standard Deviation = " .
    $c->formatValue($stdDev, "{value|2}"), "Arial");


# Set the x and y axis label font to 12pt Arial
$c->xAxis->setLabelStyle("Arial", 12);
$c->yAxis->setLabelStyle("Arial", 12);

# Set the x and y axis stems to transparent, and the x-axis tick color to grey (0x888888)
$c->xAxis->setColors(Transparent, TextColor, TextColor, 0x888888);
$c->yAxis->setColors(Transparent);

# Draw the bell curve as a spline layer in red (0xdd0000) with 2-pixel line width
$bellLayer = $c->addSplineLayer($bellCurve, 0xdd0000);
$bellLayer->setXData2($mean - $stdDevWidth * $stdDev, $mean + $stdDevWidth * $stdDev);
$bellLayer->setLineWidth(2);
# No tooltip is needed for the spline layer
$bellLayer->setHTMLImageMap("{disable}");

# Draw the histogram as bars in blue (0x6699bb) with dark blue (0x336688) border
$histogramLayer = $c->addBarLayer($frequency, 0x6699bb);
$histogramLayer->setBorderColor(0x336688);
# The center of the bars span from minX + half_bar_width to maxX - half_bar_width
$histogramLayer->setXData2($minX + $slotSize / 2.0, $maxX - $slotSize / 2.0);
# Configure the bars to touch each other with no gap in between
$histogramLayer->setBarGap(TouchBar);
# Use rounded corners for decoration
$histogramLayer->setRoundedCorners();
# Tool tip for the histogram
$histogramLayer->setHTMLImageMap("", "", "title='{value}'");

# ChartDirector by default will extend the x-axis scale by 0.5 unit to cater for the bar width. It
# is because a bar plotted at x actually occupies (x +/- half_bar_width), and the bar width is
# normally 1 for label based x-axis. However, this chart is using a linear x-axis instead of label
# based. So we disable the automatic extension and add a dummy layer to extend the x-axis scale to
# cover minX to maxX.
$c->xAxis->setIndent(false);
$c->addLineLayer2()->setXData($minX, $maxX);

# For the automatic y-axis labels, set the minimum spacing to 40 pixels.
$c->yAxis->setTickDensity(40);

# Output the chart
$viewer = new WebChartViewer("chart1");
$viewer->setChart($c, SVG);

# Include tool tip for the chart
$viewer->setImageMap($c->getHTMLImageMap(""));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Histogram with Bell Curve</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        Histogram with Bell Curve
    </div>
    <hr style="border:solid 1px #000080; background:#000080" />
    <div style="font:10pt verdana; margin-bottom:1.5em">
        <a href="viewsource.php?file=<?=basename(__FILE__)?>">View Chart Source Code</a>
    </div>
    <!-- ****** Here is the chart image ****** -->
    <?php echo $viewer->renderHTML(); ?>
</body>
</html>
