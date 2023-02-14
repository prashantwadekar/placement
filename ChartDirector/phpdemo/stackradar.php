<?php
require_once("../lib/phpchartdir.php");

# The data for the chart
$data0 = array(100, 100, 100, 100, 100);
$data1 = array(90, 85, 85, 80, 70);
$data2 = array(80, 65, 65, 75, 45);

# The labels for the chart
$labels = array("Population<*br*><*font=Arial*>6 millions", "GDP<*br*><*font=Arial*>120 billions",
    "Export<*br*><*font=Arial*>25 billions", "Import<*br*><*font=Arial*>24 billions",
    "Investments<*br*><*font=Arial*>20 billions");

# Create a PolarChart object of size 480 x 460 pixels. Set background color to silver, with 1 pixel
# 3D border effect
$c = new PolarChart(480, 460, silverColor(), 0x000000, 1);

# Add a title to the chart using 15pt Times Bold Italic font. The title text is white (ffffff) on a
# deep green (008000) background
$c->addTitle("Economic Growth", "Times New Roman Bold Italic", 15, 0xffffff)->setBackground(0x008000
    );

# Set plot area center at (240, 270), with 150 pixels radius
$c->setPlotArea(240, 270, 150);

# Use 1 pixel width semi-transparent black (c0000000) lines as grid lines
$c->setGridColor(0xc0000000, 1, 0xc0000000, 1);

# Add a legend box at top-center of plot area (240, 35) using horizontal layout. Use 10pt Arial Bold
# font, with silver background and 1 pixel 3D border effect.
$b = $c->addLegend(240, 35, false, "Arial Bold", 10);
$b->setAlignment(TopCenter);
$b->setBackground(silverColor(), Transparent, 1);

# Add area layers of different colors to represent the data
$c->addAreaLayer($data0, 0xcc8880, "Year 2004");
$c->addAreaLayer($data1, 0xffd080, "Year 1994");
$c->addAreaLayer($data2, 0xa0bce0, "Year 1984");

# Set the labels to the angular axis as spokes.
$c->angularAxis->setLabels($labels);

# Set radial axis from 0 - 100 with a tick every 20 units
$c->radialAxis->setLinearScale(0, 100, 20);

# Just show the radial axis as a grid line. Hide the axis labels by setting the label color to
# Transparent
$c->radialAxis->setColors(0xc0000000, Transparent);

# Output the chart
$viewer = new WebChartViewer("chart1");
$viewer->setChart($c, SVG);

# Include tool tip for the chart
$viewer->setImageMap($c->getHTMLImageMap("", "",
    "title='Current {label}: {value}% in {dataSetName}'"));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Stacked Radar Chart</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        Stacked Radar Chart
    </div>
    <hr style="border:solid 1px #000080; background:#000080" />
    <div style="font:10pt verdana; margin-bottom:1.5em">
        <a href="viewsource.php?file=<?=basename(__FILE__)?>">View Chart Source Code</a>
    </div>
    <!-- ****** Here is the chart image ****** -->
    <?php echo $viewer->renderHTML(); ?>
</body>
</html>
