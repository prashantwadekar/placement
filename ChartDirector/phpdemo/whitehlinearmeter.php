<?php
require_once("../lib/phpchartdir.php");

function createChart($viewer, $chartIndex)
{
    # The value to display on the meter
    $value = 74.25;

    # Create a LinearMeter object of size 250 x 75 pixels with very light grey (0xeeeeee) backgruond
    # and a light grey (0xccccccc) 3-pixel thick rounded frame
    $m = new LinearMeter(250, 75, 0xeeeeee, 0xcccccc);
    $m->setRoundedFrame(Transparent);
    $m->setThickFrame(3);

    # Set the scale region top-left corner at (14, 23), with size of 218 x 20 pixels. The scale
    # labels are located on the top (implies horizontal meter)
    $m->setMeter(14, 23, 218, 20, Top);

    # Set meter scale from 0 - 100, with a tick every 10 units
    $m->setScale(0, 100, 10);

    # Demostrate different types of color scales and putting them at different positions
    $smoothColorScale = array(0, 0x6666ff, 25, 0x00bbbb, 50, 0x00ff00, 75, 0xffff00, 100, 0xff0000);
    $stepColorScale = array(0, 0x33ff33, 50, 0xffff33, 80, 0xff3333, 100);
    $highLowColorScale = array(0, 0x6666ff, 70, Transparent, 100, 0xff0000);

    if ($chartIndex == 0) {
        # Add the smooth color scale at the default position
        $m->addColorScale($smoothColorScale);
    } else if ($chartIndex == 1) {
        # Add the high low scale at the default position
        $m->addColorScale($highLowColorScale);
    } else if ($chartIndex == 2) {
        # Add the smooth color scale starting at y = 43 (bottom of scale) with zero width and ending
        # at y = 23 with 20 pixels width
        $m->addColorScale($smoothColorScale, 43, 0, 23, 20);
    } else {
        # Add the step color scale at the default position
        $m->addColorScale($stepColorScale);
    }

    # Add a blue (0x0000cc) pointer at the specified value
    $m->addPointer($value, 0x0000cc);

    # Add a label left aligned to (10, 61) using 8pt Arial Bold font
    $m->addText(10, 61, "Temperature C", "Arial Bold", 8, TextColor, Left);

    # Add a text box right aligned to (235, 61). Display the value using white (0xffffff) 8pt Arial
    # Bold font on a black (0x000000) background with depressed rounded border.
    $t = $m->addText(235, 61, $m->formatValue($value, "2"), "Arial Bold", 8, 0xffffff, Right);
    $t->setBackground(0x000000, 0x000000, -1);
    $t->setRoundedCorners(3);

    # Output the chart
    $viewer->setChart($m, SVG);
}

# This example includes 4 charts
$viewers = array();
for ($i = 0; $i < 4; ++$i) {
    $viewers[$i] = new WebChartViewer("chart$i");
    createChart($viewers[$i], $i);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>White Horizontal Linear Meters</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        White Horizontal Linear Meters
    </div>
    <hr style="border:solid 1px #000080; background:#000080" />
    <div style="font:10pt verdana; margin-bottom:1.5em">
        <a href="viewsource.php?file=<?=basename(__FILE__)?>">View Chart Source Code</a>
    </div>
    <!-- ****** Here are the chart images ****** -->
    <?php
        for ($i = 0; $i < count($viewers); ++$i) {
            echo $viewers[$i]->renderHTML(), " ";
        }
    ?>
</body>
</html>
