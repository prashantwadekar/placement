<?php
require_once("../lib/phpchartdir.php");

function createChart($viewer, $chartIndex)
{
    # The x and y coordinates of the grid
    $dataX = array(-4, -3, -2, -1, 0, 1, 2, 3, 4);
    $dataY = array(-4, -3, -2, -1, 0, 1, 2, 3, 4);

    # Use random numbers for the z values on the XY grid
    $r = new RanSeries(99);
    $dataZ = $r->get2DSeries(count($dataX), count($dataY), -0.9, 0.9);

    # Create a SurfaceChart object of size 460 x 460 pixels with white (0xffffff) background and
    # grey (0x888888) border
    $c = new SurfaceChart(460, 460, 0xffffff, 0x888888);

    # Set the surface data
    $c->setData($dataX, $dataY, $dataZ);

    # Add a color axis (the legend) in at the top center of the chart, with labels at the bottom.
    # Set the axis to flat style.
    $cAxis = $c->setColorAxis((int)($c->getWidth() / 2), 15, Top, 250, Bottom);
    $cAxis->setTitle("Color Axis");
    $cAxis->setAxisBorder(Transparent, 0);

    # By default, the color axis is synchronized with the z-axis. The following code remove the
    # synchronization so that the color axis will auto-scale independently. Set the auto-scale
    # minimum tick spacing to 20 pixels.
    $cAxis->syncAxis(null);
    $cAxis->setTickDensity(20);

    if ($chartIndex == 1) {
        # Speicify a color gradient as a list of colors, and use it in the color axis.
        $colorGradient = array(0x0044cc, 0xffffff, 0x00aa00);
        $cAxis->setColorGradient(false, $colorGradient);
    } else if ($chartIndex == 2) {
        # Specify the color scale to use in the color axis
        $colorScale = array(-1.0, 0x1a9850, -0.75, 0x66bd63, -0.5, 0xa6d96a, -0.25, 0xd9ef8b, 0,
            0xfee08b, 0.25, 0xfdae61, 0.5, 0xf46d43, 0.75, 0xd73027, 1);
        $cAxis->setColorScale($colorScale);
    } else if ($chartIndex == 3) {
        # Specify the color scale to use in the color axis. Also specify an underflow color 0x66ccff
        # (blue) for regions that fall below the lower axis limit.
        $colorScale = array(0, 0xffff99, 0.2, 0x80cdc1, 0.4, 0x35978f, 0.6, 0x01665e, 0.8, 0x003c30,
            1);
        $cAxis->setColorScale($colorScale, 0x66ccff);
    }

    # Set the center of the plot region at (230, 250), and set width x depth x height to 240 x 240 x
    # 170 pixels
    $c->setPlotRegion(230, 250, 240, 240, 170);

    # Set the plot region wall thichness to 3 pixels
    $c->setWallThickness(3);

    # Set the elevation and rotation angles to 45 degrees
    $c->setViewAngle(45, 45);

    # Set the perspective level to 20
    $c->setPerspective(20);

    # Spline interpolate data to a 50 x 50 grid for a smooth surface
    $c->setInterpolation(50, 50);

    # Set the axis title
    $c->xAxis->setTitle("X-Axis", "Arial Bold", 10);
    $c->yAxis->setTitle("Y-Axis", "Arial Bold", 10);
    $c->zAxis->setTitle("Z Axis", "Arial Bold", 10);

    # Output the chart
    $viewer->setChart($c, SVG);
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
    <title>Surface Color Scale</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        Surface Color Scale
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
