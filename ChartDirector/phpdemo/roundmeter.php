<?php
require_once("../lib/phpchartdir.php");

# The value to display on the meter
$value = 72.3;

# Create an AngularMeter object of size 250 x 250 pixels with transparent background
$m = new AngularMeter(250, 250, Transparent);

# Center at (125, 125), scale radius = 111 pixels, scale angle -145 to +145 degrees
$m->setMeter(125, 125, 111, -145, 145);

# Add a very light grey (0xeeeeee) circle with radius 123 pixels as background
$m->addRing(0, 123, 0xeeeeee);
# Add a grey (0xcccccc) ring between radii 116 and 123 pixels as border
$m->addRing(116, 123, 0xcccccc);

# Meter scale is 0 - 100, with major/minor/micro ticks every 10/5/1 units
$m->setScale(0, 100, 10, 5, 1);

# Set the scale label style to 15pt Arial Italic. Set the major/minor/micro tick lengths to 12/9/6
# pixels pointing inwards, and their widths to 2/1/1 pixels.
$m->setLabelStyle("Arial Italic", 15);
$m->setTickLength(-12, -9, -6);
$m->setLineWidth(0, 2, 1, 1);

# Add a smooth color scale to the meter
$smoothColorScale = array(0, 0x3333ff, 25, 0x0088ff, 50, 0x00ff00, 75, 0xdddd00, 100, 0xff0000);
$m->addColorScale($smoothColorScale);

# Add a text label centered at (125, 175) with 15pt Arial Italic font
$m->addText(125, 175, "CPU", "Arial Italic", 15, TextColor, Center);

# Add a red (0xff0000) pointer at the specified value
$m->addPointer2($value, 0xff0000);

# Output the chart
$viewer = new WebChartViewer("chart1");
$viewer->setChart($m, SVG);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Round Meter</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        Round Meter
    </div>
    <hr style="border:solid 1px #000080; background:#000080" />
    <div style="font:10pt verdana; margin-bottom:1.5em">
        <a href="viewsource.php?file=<?=basename(__FILE__)?>">View Chart Source Code</a>
    </div>
    <!-- ****** Here is the chart image ****** -->
    <?php echo $viewer->renderHTML(); ?>
</body>
</html>
