<?php
require_once("../lib/phpchartdir.php");

# The data for the bar chart
$data = array(85, 156, 179, 211, 123, 189, 166);

# The labels for the bar chart
$labels = array("Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun");

# Create a XYChart object of size 600 x 400 pixels
$c = new XYChart(600, 400);

# Add a title box using grey (0x555555) 24pt Arial Bold font
$c->addTitle("    Bar Chart Demonstration", "Arial Bold", 24, 0x555555);

# Set the plotarea at (70, 60) and of size 500 x 300 pixels, with transparent background and border
# and light grey (0xcccccc) horizontal grid lines
$c->setPlotArea(70, 60, 500, 300, Transparent, -1, Transparent, 0xcccccc);

# Set the x and y axis stems to transparent and the label font to 12pt Arial
$c->xAxis->setColors(Transparent);
$c->yAxis->setColors(Transparent);
$c->xAxis->setLabelStyle("Arial", 12);
$c->yAxis->setLabelStyle("Arial", 12);

# Add a blue (0x6699bb) bar chart layer with transparent border using the given data
$c->addBarLayer($data, 0x6699bb)->setBorderColor(Transparent);

# Set the labels on the x axis.
$c->xAxis->setLabels($labels);

# For the automatic y-axis labels, set the minimum spacing to 40 pixels.
$c->yAxis->setTickDensity(40);

# Add a title to the y axis using dark grey (0x555555) 14pt Arial Bold font
$c->yAxis->setTitle("Y-Axis Title Placeholder", "Arial Bold", 14, 0x555555);

# Output the chart
$viewer = new WebChartViewer("chart1");
$viewer->setChart($c, SVG);

# Include tool tip for the chart
$viewer->setImageMap($c->getHTMLImageMap("", "", "title='{xLabel}: {value} kg'"));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Bar Chart (2)</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        Simple Bar Chart (2)
    </div>
    <hr style="border:solid 1px #000080; background:#000080" />
    <div style="font:10pt verdana; margin-bottom:1.5em">
        <a href="viewsource.php?file=<?=basename(__FILE__)?>">View Chart Source Code</a>
    </div>
    <!-- ****** Here is the chart image ****** -->
    <?php echo $viewer->renderHTML(); ?>
</body>
</html>
