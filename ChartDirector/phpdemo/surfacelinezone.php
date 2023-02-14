<?php
require_once("../lib/phpchartdir.php");

# The x and y coordinates of the grid
$dataX = array(-4, -3, -2, -1, 0, 1, 2, 3, 4);
$dataY = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

# The values at the grid points. In this example, we will compute the values using the formula z =
# 20 / (1 + 1 / (1 + 3.5 ** (x + 0.5))) - 10.
$dataZ = array_fill(0, count($dataX) * count($dataY), 0);
for($yIndex = 0; $yIndex < count($dataY); ++$yIndex) {
    for($xIndex = 0; $xIndex < count($dataX); ++$xIndex) {
        $dataZ[$yIndex * count($dataX) + $xIndex] = 20 / (1 + 1 / (1 + pow(3.5, $dataX[$xIndex] +
            0.5))) - 10;
    }
}

# Create a SurfaceChart object of size 720 x 600 pixels
$c = new SurfaceChart(720, 600);

# Set the center of the plot region at (350, 280), and set width x depth x height to 360 x 360 x 270
# pixels
$c->setPlotRegion(350, 280, 360, 360, 270);

# Set the data to use to plot the chart
$c->setData($dataX, $dataY, $dataZ);

# Spline interpolate data to a 80 x 80 grid for a smooth surface
$c->setInterpolation(80, 80);

# Set the elevation and rotation angles to 30 and 315 degrees
$c->setViewAngle(45, 315);

# Add a color axis (the legend) 20 pixels from the right border. Set the length to 200 pixels and
# the labels on the right side.
$cAxis = $c->setColorAxis($c->getWidth() - 20, 275, Right, 200, Right);

# The color gradient used for the color axis
$colorGradient = array(0x00aa00, 0x66ff00, 0xffff00, 0xffcc00, 0xff0000);
$cAxis->setColorGradient(false, $colorGradient);

# Add a semi-transparent blue (0x7f0000ff) rectangular surface zone with opposite corners at (0, 1)
# and (1.6, 2)
$c->addSurfaceZone(0, 1, 1.6, 2, 0x7f0000ff, 0x7f0000ff, 2);

# Add a semi-transparent grey (0x7fdddddd) rectangular surface zone with opposite corners at (2, 7)
# and (3.5, 9.5)
$c->addSurfaceZone(2, 7, 3.5, 9.5, 0x7fdddddd, 0x7fdddddd, 2);

# Add a surface line from (-4, 3) to (0, 10). Use brown (0x444400) dash line with a line width of 2
# pixels.
$c->addSurfaceLine(-4, 3, 0, 10, $c->dashLineColor(0x444400), 2);

# Add a surface line from (-2, 10) to (0, 5) to (1, 8) to (4, 0.5). Use purple color with a line
# width of 2 pixels.
$lineX = array(-2, 0, 1, 4);
$lineY = array(10, 5, 8, 0.5);
$c->addSurfaceLine2($lineX, $lineY, 0x880088, 2);

# Add two surface lins to create a X symbol.
$c->addSurfaceLine(-1.4, 3.9, -1.6, 4.1, 0x000088, 2);
$c->addSurfaceLine(-1.6, 3.9, -1.4, 4.1, 0x000088, 2);

# Add a small surface zone with transparent fill color and a 2-pixel border to create a square
# symbol.
$c->addSurfaceZone(-1.4, 2.9, -1.6, 3.1, Transparent, 0x000088, 2);

# Add a legend box align to the right edge of the chart. Use 10pt Arial Bold font. Set the
# background and border to transparent.
$b = $c->addLegend($c->getWidth() - 1, 10, true, "Arial Bold", 10);
$b->setAlignment(TopRight);
$b->setBackground(Transparent, Transparent);

# Set the legend icon size to 24 x 15 pixels. Set a gap of 10 pixels between the icon and the text.
$b->setKeySize(24, 15, 10);

# Add legend entries for the zones, lines and symbols
$b->addKey("Sample Zone 1", 0x7f0000ff);
$b->addKey("Sample Zone 2", 0x7fdddddd);
$b->addKey("Sample Line 1", 0x880088, 2);
$b->addKey("Sample Line 2", $c->dashLineColor(0x444400), 2);
$b->addText(
    "<*block,width=24,halign=center*><*img=@Square,width=11,edgeColor=000000*><*/*><*advance=10*>".
    "Symbol 1");
$b->addText(
    "<*block,width=24,halign=center*><*img=@Cross2(0.1),width=11,color=000000*><*/*><*advance=10*>".
    "Symbol 2");

# Set the x, y and z axis titles using 12pt Arial Bold font
$c->xAxis->setTitle("X Title<*br*>Placeholder", "Arial Bold", 12);
$c->yAxis->setTitle("Y Title<*br*>Placeholder", "Arial Bold", 12);
$c->zAxis->setTitle("Z Title Placeholder", "Arial Bold", 12);

# Output the chart
$viewer = new WebChartViewer("chart1");
$viewer->setChart($c, SVG);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Surface Lines and Zones</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        Surface Lines and Zones
    </div>
    <hr style="border:solid 1px #000080; background:#000080" />
    <div style="font:10pt verdana; margin-bottom:1.5em">
        <a href="viewsource.php?file=<?=basename(__FILE__)?>">View Chart Source Code</a>
    </div>
    <!-- ****** Here is the chart image ****** -->
    <?php echo $viewer->renderHTML(); ?>
</body>
</html>
