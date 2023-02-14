<?php
require_once("../lib/phpchartdir.php");

# The value to display on the meter
$value = 75.35;

# Create an LinearMeter object of size 260 x 66 pixels with a very light grey (0xeeeeee) background,
# and a rounded 3-pixel thick light grey (0xaaaaaa) border
$m = new LinearMeter(260, 66, 0xeeeeee, 0xaaaaaa);
$m->setRoundedFrame(Transparent);
$m->setThickFrame(3);

# Set the scale region top-left corner at (18, 24), with size of 222 x 20 pixels. The scale labels
# are located on the top (implies horizontal meter)
$m->setMeter(18, 24, 222, 20, Top);

# Set meter scale from 0 - 100, with a tick every 10 units
$m->setScale(0, 100, 10);

# Add a 5-pixel thick smooth color scale to the meter at y = 48 (below the meter scale)
$smoothColorScale = array(0, 0x0000ff, 25, 0x0088ff, 50, 0x00ff00, 75, 0xffff00, 100, 0xff0000);
$m->addColorScale($smoothColorScale, 48, 5);

# Add a light blue (0x0088ff) bar from 0 to the data value with glass effect and 4 pixel rounded
# corners
$m->addBar(0, $value, 0x0088ff, glassEffect(NormalGlare, Top), 4);

# Output the chart
$viewer = new WebChartViewer("chart1");
$viewer->setChart($m, SVG);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Horizontal Bar Meter</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        Horizontal Bar Meter
    </div>
    <hr style="border:solid 1px #000080; background:#000080" />
    <div style="font:10pt verdana; margin-bottom:1.5em">
        <a href="viewsource.php?file=<?=basename(__FILE__)?>">View Chart Source Code</a>
    </div>
    <!-- ****** Here is the chart image ****** -->
    <?php echo $viewer->renderHTML(); ?>
</body>
</html>
