<?php
require_once("../lib/phpchartdir.php");

function createChart($viewer, $chartIndex)
{
    # The value to display on the meter
    $value = 66.77;

    # The background, border and bar colors of the meters
    $bgColor = array(0xcce4ff, 0xccffcc, 0xffdddd, 0xffffaa, 0xffccff, 0xeeeeee);
    $borderColor = array(0x000088, 0x006600, 0x880000, 0xee6600, 0x6600aa, 0x666666);
    $barColor = array(0x2299ff, 0x00ee00, 0xee4455, 0xff8800, 0x8833dd, 0x888888);

    # Create a LinearMeter object of size 70 x 260 pixels with a 3-pixel thick rounded frame
    $m = new LinearMeter(70, 260, $bgColor[$chartIndex], $borderColor[$chartIndex]);
    $m->setRoundedFrame(Transparent);
    $m->setThickFrame(3);

    # Set the scale region top-left corner at (28, 33), with size of 20 x 194 pixels. The scale
    # labels are located on the left (default - implies vertical meter).
    $m->setMeter(28, 33, 20, 194);

    # Set meter scale from 0 - 100, with a tick every 10 units
    $m->setScale(0, 100, 10);

    # Demostrate different types of color scales
    $smoothColorScale = array(0, 0x0000ff, 25, 0x0088ff, 50, 0x00ff00, 75, 0xdddd00, 100, 0xff0000);
    $stepColorScale = array(0, 0x33ff33, 50, 0xffff00, 80, 0xff3333, 100);
    $highLowColorScale = array(0, 0x0000ff, 40, Transparent, 60, Transparent, 100, 0xff0000);
    $highColorScale = array(70, Transparent, 100, 0xff0000);
    $lowColorScale = array(0, 0x0000ff, 30, Transparent);

    if ($chartIndex == 0) {
        # Add a 6-pixel thick smooth color scale at x = 53 (right of meter scale)
        $m->addColorScale($smoothColorScale, 53, 6);
    } else if ($chartIndex == 1) {
        # Add a high only color scale at x = 52 (right of meter scale) with thickness varying from 0
        # to 8
        $m->addColorScale($highColorScale, 52, 0, 52, 8);
        # Add a low only color scale at x = 52 (right of meter scale) with thickness varying from 8
        # to 0
        $m->addColorScale($lowColorScale, 52, 8, 52, 0);
    } else if ($chartIndex == 2) {
        # Add a high only color scale at x = 52 (right of meter scale) with thickness varying from 0
        # to 8
        $m->addColorScale($highColorScale, 52, 0, 52, 8);
    } else if ($chartIndex == 3) {
        # Add a smooth color scale at x = 52 (right of meter scale) with thickness varying from 0 to
        # 8
        $m->addColorScale($smoothColorScale, 52, 0, 52, 8);
    } else if ($chartIndex == 4) {
        # Add a 6-pixel thick high/low color scale at x = 53 (right of meter scale)
        $m->addColorScale($highLowColorScale, 53, 6);
    } else {
        # Add a 6-pixel thick step color scale at x = 53 (right of meter scale)
        $m->addColorScale($stepColorScale, 53, 6);
    }

    # Add a bar from 0 to value with glass effect and 4 pixel rounded corners
    $m->addBar(0, $value, $barColor[$chartIndex], glassEffect(NormalGlare, Left), 4);

    # Add a title using white (0xffffff) 8pt Arial Bold font with a border color background
    $m->addTitle("Temp C", "Arial Bold", 8, 0xffffff)->setBackground($borderColor[$chartIndex]);

    # Add a bottom title using white (0xffffff) 8pt Arial Bold font with a border color background
    # to display the value
    $m->addTitle2(Bottom, $m->formatValue($value, "2"), "Arial Bold", 8, 0xffffff)->setBackground(
        $borderColor[$chartIndex]);

    # Output the chart
    $viewer->setChart($m, SVG);
}

# This example includes 6 charts
$viewers = array();
for ($i = 0; $i < 6; ++$i) {
    $viewers[$i] = new WebChartViewer("chart$i");
    createChart($viewers[$i], $i);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Color Vertical Bar Meters</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        Color Vertical Bar Meters
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
