<?php
require_once("../lib/phpchartdir.php");

# The data for the bar chart
$data = array(85, 156, 179.5, 211, 123, 176, 195);

# The labels for the bar chart
$labels = array("Square", "Star(8)", "Polygon(6)", "Cross", "Cross2", "Diamond", "Custom");

# Create a XYChart object of size 500 x 280 pixels.
$c = new XYChart(500, 280);

# Set the plotarea at (50, 40) with alternating light grey (f8f8f8) / white (ffffff) background
$c->setPlotArea(50, 40, 400, 200, 0xf8f8f8, 0xffffff);

# Add a title to the chart using 14pt Arial Bold Italic font
$c->addTitle("    Bar Shape Demonstration", "Arial Bold Italic", 14);

# Add a multi-color bar chart layer
$layer = $c->addBarLayer3($data);

# Set layer to 3D with 10 pixels 3D depth
$layer->set3D(10);

# Set bar shape to circular (cylinder)
$layer->setBarShape(CircleShape);

# Set the first bar (index = 0) to square shape
$layer->setBarShape(SquareShape, 0, 0);

# Set the second bar to 8-pointed star
$layer->setBarShape(StarShape(8), 0, 1);

# Set the third bar to 6-sided polygon
$layer->setBarShape(PolygonShape(6), 0, 2);

# Set the next 3 bars to cross shape, X shape and diamond shape
$layer->setBarShape(CrossShape(), 0, 3);
$layer->setBarShape(Cross2Shape(), 0, 4);
$layer->setBarShape(DiamondShape, 0, 5);

# Set the last bar to a custom shape, specified as an array of (x, y) points in normalized
# coordinates
$customShape = array(-500, 0, 0, 500, 500, 0, 500, 1000, 0, 500, -500, 1000);
$layer->setBarShape2($customShape, 0, 6);

# Set the labels on the x axis.
$c->xAxis->setLabels($labels);

# Add a title to the y axis
$c->yAxis->setTitle("Frequency");

# Add a title to the x axis
$c->xAxis->setTitle("Shapes");

# Output the chart
$viewer = new WebChartViewer("chart1");
$viewer->setChart($c, SVG);

# Include tool tip for the chart
$viewer->setImageMap($c->getHTMLImageMap("", "", "title='{xLabel}: {value}'"));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Polygon Bar Shapes</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        Polygon Bar Shapes
    </div>
    <hr style="border:solid 1px #000080; background:#000080" />
    <div style="font:10pt verdana; margin-bottom:1.5em">
        <a href="viewsource.php?file=<?=basename(__FILE__)?>">View Chart Source Code</a>
    </div>
    <!-- ****** Here is the chart image ****** -->
    <?php echo $viewer->renderHTML(); ?>
</body>
</html>
