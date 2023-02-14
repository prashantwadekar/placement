<?php
require_once("../lib/phpchartdir.php");

# The XYZ data for the 3D scatter chart as 3 random data series
$r = new RanSeries(0);
$xData = $r->getSeries2(100, 100, -10, 10);
$yData = $r->getSeries2(100, 0, 0, 20);
$zData = $r->getSeries2(100, 100, -10, 10);

# Create a ThreeDScatterChart object of size 720 x 600 pixels
$c = new ThreeDScatterChart(720, 600);

# Add a title to the chart using 20 points Times New Roman Italic font
$c->addTitle("3D Scatter Chart (1)  ", "Times New Roman Italic", 20);

# Set the center of the plot region at (350, 280), and set width x depth x height to 360 x 360 x 270
# pixels
$c->setPlotRegion(350, 280, 360, 360, 270);

# Add a scatter group to the chart using 11 pixels glass sphere symbols, in which the color depends
# on the z value of the symbol
$c->addScatterGroup($xData, $yData, $zData, "", GlassSphere2Shape, 11, SameAsMainColor);

# Add a color axis (the legend) in which the left center is anchored at (645, 270). Set the length
# to 200 pixels and the labels on the right side.
$c->setColorAxis(645, 270, Left, 200, Right);

# Set the x, y and z axis titles using 10 points Arial Bold font
$c->xAxis->setTitle("X-Axis Place Holder", "Arial Bold", 10);
$c->yAxis->setTitle("Y-Axis Place Holder", "Arial Bold", 10);
$c->zAxis->setTitle("Z-Axis Place Holder", "Arial Bold", 10);

# Output the chart
$viewer = new WebChartViewer("chart1");
$viewer->setChart($c, SVG);

# Include tool tip for the chart
$viewer->setImageMap($c->getHTMLImageMap("", "", "title='<*cdml*>x={x|p}, y={y|p}, z={z|p}'"));
?>

<!DOCTYPE html>
<html>
<head>
    <title>3D Scatter Chart (1)</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        3D Scatter Chart (1)
    </div>
    <hr style="border:solid 1px #000080; background:#000080" />
    <div style="font:10pt verdana; margin-bottom:1.5em">
        <a href="viewsource.php?file=<?=basename(__FILE__)?>">View Chart Source Code</a>
    </div>
    <!-- ****** Here is the chart image ****** -->
    <?php echo $viewer->renderHTML(); ?>
</body>
</html>
