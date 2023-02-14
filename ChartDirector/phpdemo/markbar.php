<?php
require_once("../lib/phpchartdir.php");

# The data for the bars and the marks
$barData = array(100, 125, 245, 147, 67, 96, 160, 145, 97, 167, 220, 125);
$markData = array(85, 156, 220, 120, 80, 110, 140, 130, 111, 180, 175, 100);

# The labels for the bar chart
$labels = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec")
    ;

# Create a XYChart object of size 480 x 360 pixels. Use a vertical gradient color from pale blue
# (e8f0f8) to sky blue (aaccff) spanning half the chart height as background. Set border to blue
# (88aaee). Use rounded corners. Enable soft drop shadow.
$c = new XYChart(480, 360);
$c->setBackground($c->linearGradientColor(0, 0, 0, $c->getHeight() / 2, 0xe8f0f8, 0xaaccff),
    0x88aaee);
$c->setRoundedFrame();
$c->setDropShadow();

# Add a title to the chart using 15 points Arial Italic font. Set top/bottom margins to 12 pixels.
$title = $c->addTitle("Bars with Marks Demonstration", "Arial Italic", 15);
$title->setMargin2(0, 0, 12, 12);

# Tentatively set the plotarea to 50 pixels from the left edge to allow for the y-axis, and to just
# under the title. Set the width to 65 pixels less than the chart width, and the height to reserve
# 90 pixels at the bottom for the x-axis and the legend box. Use pale blue (e8f0f8) background,
# transparent border, and grey (888888) dotted horizontal grid lines.
$c->setPlotArea(50, $title->getHeight(), $c->getWidth() - 65, $c->getHeight() - $title->getHeight()
     - 90, 0xe8f0f8, -1, Transparent, $c->dashLineColor(0x888888, DotLine));

# Add a legend box where the bottom-center is anchored to the 15 pixels above the bottom-center of
# the chart. Use horizontal layout and 8 points Arial font.
$legendBox = $c->addLegend($c->getWidth() / 2, $c->getHeight() - 15, false, "Arial", 8);
$legendBox->setAlignment(BottomCenter);

# Set the legend box background and border to pale blue (e8f0f8) and bluish grey (445566)
$legendBox->setBackground(0xe8f0f8, 0x445566);

# Use rounded corners of 5 pixel radius for the legend box
$legendBox->setRoundedCorners(5);

# Use line style legend key
$legendBox->setLineStyleKey();

# Set axes to transparent
$c->xAxis->setColors(Transparent);
$c->yAxis->setColors(Transparent);

# Set the labels on the x axis
$c->xAxis->setLabels($labels);

# Add a box-whisker layer with just the middle mark visible for the marks. Use red (ff0000) color
# for the mark, with a line width of 2 pixels and 10% horizontal gap
$markLayer = $c->addBoxWhiskerLayer(null, null, null, null, $markData, -1, 0xff0000);
$markLayer->setLineWidth(2);
$markLayer->setDataGap(0.1);

# Add the legend key for the mark line
$legendBox->addKey("Target", 0xff0000, 2);

# Tool tip for the mark layer
$markLayer->setHTMLImageMap("", "", "title='Target at {xLabel}: {med}'");

# Add a blue (0066cc) bar layer using the given data.
$barLayer = $c->addBarLayer($barData, 0x0066cc, "Actual");

# Use soft lighting effect for the bars with light direction from left.
$barLayer->setBorderColor(Transparent, softLighting(Left));

# Tool tip for the bar layer
$barLayer->setHTMLImageMap("", "", "title='{dataSetName} at {xLabel}: {value}'");

# Adjust the plot area size, such that the bounding box (inclusive of axes) is 10 pixels from the
# left edge, just below the title, 15 pixels from the right edge, and 10 pixels above the legend
# box.
$c->packPlotArea(10, $title->getHeight(), $c->getWidth() - 15, $c->layoutLegend()->getTopY() - 10);

# Output the chart
$viewer = new WebChartViewer("chart1");
$viewer->setChart($c, SVG);

# Include tool tip for the chart
$viewer->setImageMap($c->getHTMLImageMap(""));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bars with Marks</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        Bars with Marks
    </div>
    <hr style="border:solid 1px #000080; background:#000080" />
    <div style="font:10pt verdana; margin-bottom:1.5em">
        <a href="viewsource.php?file=<?=basename(__FILE__)?>">View Chart Source Code</a>
    </div>
    <!-- ****** Here is the chart image ****** -->
    <?php echo $viewer->renderHTML(); ?>
</body>
</html>
