<?php
require_once("../lib/phpchartdir.php");

# The data for the bar chart
$data0 = array(100, 125, 245, 147, 67);
$data1 = array(85, 156, 179, 211, 123);
$data2 = array(97, 87, 56, 267, 157);

# The labels for the bar chart
$labels = array("Mon", "Tue", "Wed", "Thu", "Fri");

# Create a XYChart object of size 500 x 320 pixels
$c = new XYChart(500, 320);

# Set the plotarea at (100, 40) and of size 280 x 240 pixels
$c->setPlotArea(100, 40, 280, 240);

# Add a legend box at (405, 100)
$c->addLegend(405, 100);

# Add a title to the chart
$c->addTitle("Weekday Network Load");

# Add a title to the y axis. Draw the title upright (font angle = 0)
$c->yAxis->setTitle("Average\nWorkload\n(MBytes\nPer Hour)")->setFontAngle(0);

# Set the labels on the x axis
$c->xAxis->setLabels($labels);

# Add three bar layers, each representing one data set. The bars are drawn in semi-transparent
# colors.
$c->addBarLayer($data0, 0x808080ff, "Server # 1", 5);
$c->addBarLayer($data1, 0x80ff0000, "Server # 2", 5);
$c->addBarLayer($data2, 0x8000ff00, "Server # 3", 5);

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
    <title>Depth Bar Chart</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        Depth Bar Chart
    </div>
    <hr style="border:solid 1px #000080; background:#000080" />
    <div style="font:10pt verdana; margin-bottom:1.5em">
        <a href="viewsource.php?file=<?=basename(__FILE__)?>">View Chart Source Code</a>
    </div>
    <!-- ****** Here is the chart image ****** -->
    <?php echo $viewer->renderHTML(); ?>
</body>
</html>
