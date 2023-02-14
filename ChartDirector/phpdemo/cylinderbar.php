<?php
require_once("../lib/phpchartdir.php");

# The data for the bar chart
$data = array(85, 156, 179.5, 211, 123);

# The labels for the bar chart
$labels = array("Mon", "Tue", "Wed", "Thu", "Fri");

# Create a XYChart object of size 400 x 240 pixels.
$c = new XYChart(400, 240);

# Add a title to the chart using 14pt Times Bold Italic font
$c->addTitle("Weekly Server Load", "Times New Roman Bold Italic", 14);

# Set the plotarea at (45, 40) and of 300 x 160 pixels in size. Use alternating light grey (f8f8f8)
# / white (ffffff) background.
$c->setPlotArea(45, 40, 300, 160, 0xf8f8f8, 0xffffff);

# Add a multi-color bar chart layer
$layer = $c->addBarLayer3($data);

# Set layer to 3D with 10 pixels 3D depth
$layer->set3D(10);

# Set bar shape to circular (cylinder)
$layer->setBarShape(CircleShape);

# Set the labels on the x axis.
$c->xAxis->setLabels($labels);

# Add a title to the y axis
$c->yAxis->setTitle("MBytes");

# Add a title to the x axis
$c->xAxis->setTitle("Work Week 25");

# Output the chart
$viewer = new WebChartViewer("chart1");
$viewer->setChart($c, SVG);

# Include tool tip for the chart
$viewer->setImageMap($c->getHTMLImageMap("", "", "title='{xLabel}: {value} MBytes'"));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cylinder Bar Shape</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        Cylinder Bar Shape
    </div>
    <hr style="border:solid 1px #000080; background:#000080" />
    <div style="font:10pt verdana; margin-bottom:1.5em">
        <a href="viewsource.php?file=<?=basename(__FILE__)?>">View Chart Source Code</a>
    </div>
    <!-- ****** Here is the chart image ****** -->
    <?php echo $viewer->renderHTML(); ?>
</body>
</html>
