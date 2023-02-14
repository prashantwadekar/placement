<?php
require_once("../lib/phpchartdir.php");

# The data for the area chart
$data0 = array(42, 49, 33, 38, 51, 46, 29, 41, 44, 57, 59, 52, 37, 34, 51, 56, 56, 60, 70, 76, 63,
    67, 75, 64, 51);
$data1 = array(50, 55, 47, 34, 42, 49, 63, 62, 73, 59, 56, 50, 64, 60, 67, 67, 58, 59, 73, 77, 84,
    82, 80, 84, 89);
$data2 = array(87, 89, 85, 66, 53, 39, 24, 21, 37, 56, 37, 22, 21, 33, 13, 17, 4, 23, 16, 25, 9, 10,
    5, 7, 6);
$labels = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14",
    "15", "16", "17", "18", "19", "20", "21", "22", "23", "24");

# Create a XYChart object of size 350 x 230 pixels
$c = new XYChart(350, 230);

# Set the plotarea at (50, 30) and of size 250 x 150 pixels.
$c->setPlotArea(50, 30, 250, 150);

# Add a legend box at (55, 0) (top of the chart) using 8pt Arial Font. Set background and border to
# Transparent.
$c->addLegend(55, 0, false, "", 8)->setBackground(Transparent);

# Add a title to the x axis
$c->xAxis->setTitle("Network Load for Jun 12");

# Add a title to the y axis
$c->yAxis->setTitle("MBytes");

# Set the labels on the x axis.
$c->xAxis->setLabels($labels);

# Display 1 out of 2 labels on the x-axis. Show minor ticks for remaining labels.
$c->xAxis->setLabelStep(2, 1);

# Add three area layers, each representing one data set. The areas are drawn in semi-transparent
# colors.
$c->addAreaLayer($data2, 0x808080ff, "Server #1", 3);
$c->addAreaLayer($data0, 0x80ff0000, "Server #2", 3);
$c->addAreaLayer($data1, 0x8000ff00, "Server #3", 3);

# Output the chart
$viewer = new WebChartViewer("chart1");
$viewer->setChart($c, SVG);

# Include tool tip for the chart
$viewer->setImageMap($c->getHTMLImageMap("", "",
    "title='{dataSetName} load at hour {xLabel}: {value} MBytes'"));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Depth Area Chart</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        Depth Area Chart
    </div>
    <hr style="border:solid 1px #000080; background:#000080" />
    <div style="font:10pt verdana; margin-bottom:1.5em">
        <a href="viewsource.php?file=<?=basename(__FILE__)?>">View Chart Source Code</a>
    </div>
    <!-- ****** Here is the chart image ****** -->
    <?php echo $viewer->renderHTML(); ?>
</body>
</html>
