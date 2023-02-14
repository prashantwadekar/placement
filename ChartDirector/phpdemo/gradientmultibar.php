<?php
require_once("../lib/phpchartdir.php");

# The data for the bar chart
$data0 = array(100, 125, 245, 147, 67);
$data1 = array(85, 156, 179, 211, 123);
$data2 = array(97, 87, 56, 267, 157);
$labels = array("Mon", "Tue", "Wed", "Thur", "Fri");

# Create a XYChart object of size 540 x 375 pixels
$c = new XYChart(540, 375);

# Add a title to the chart using 18pt Times Bold Italic font
$c->addTitle("Average Weekly Network Load", "Times New Roman Bold Italic", 18);

# Set the plotarea at (50, 55) and of 440 x 280 pixels in size. Use a vertical gradient color from
# grey (888888) to black (000000) as background. Set border and grid lines to white (ffffff).
$c->setPlotArea(50, 55, 440, 280, $c->linearGradientColor(0, 55, 0, 335, 0x888888, 0x000000), -1,
    0xffffff, 0xffffff);

# Add a legend box at (50, 25) using horizontal layout. Use 10pt Arial Bold as font, with
# transparent background.
$c->addLegend(50, 25, false, "Arial Bold", 10)->setBackground(Transparent);

# Set the x axis labels
$c->xAxis->setLabels($labels);

# Draw the ticks between label positions (instead of at label positions)
$c->xAxis->setTickOffset(0.5);

# Set axis label style to 8pt Arial Bold
$c->xAxis->setLabelStyle("Arial Bold", 8);
$c->yAxis->setLabelStyle("Arial Bold", 8);

# Set axis line width to 2 pixels
$c->xAxis->setWidth(2);
$c->yAxis->setWidth(2);

# Add axis title
$c->yAxis->setTitle("Throughput (MBytes Per Hour)");

# Add a multi-bar layer with 3 data sets and 4 pixels 3D depth
$layer = $c->addBarLayer2(Side, 4);
$layer->addDataSet($data0, 0x66aaee, "Server #1");
$layer->addDataSet($data1, 0xeebb22, "Server #2");
$layer->addDataSet($data2, 0xcc0000, "Server #3");

# Set bar border to transparent. Use bar gradient lighting with light intensity from 0.75 to 1.75.
$layer->setBorderColor(Transparent, barLighting(0.75, 1.75));

# Configure the bars within a group to touch each others (no gap)
$layer->setBarGap(0.2, TouchBar);

# Output the chart
$viewer = new WebChartViewer("chart1");
$viewer->setChart($c, SVG);

# Include tool tip for the chart
$viewer->setImageMap($c->getHTMLImageMap("", "",
    "title='{dataSetName} on {xLabel}: {value} MBytes/hour'"));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gradient Multi-Bar Chart</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        Gradient Multi-Bar Chart
    </div>
    <hr style="border:solid 1px #000080; background:#000080" />
    <div style="font:10pt verdana; margin-bottom:1.5em">
        <a href="viewsource.php?file=<?=basename(__FILE__)?>">View Chart Source Code</a>
    </div>
    <!-- ****** Here is the chart image ****** -->
    <?php echo $viewer->renderHTML(); ?>
</body>
</html>
