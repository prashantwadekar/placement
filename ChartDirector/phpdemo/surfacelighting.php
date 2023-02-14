<?php
require_once("../lib/phpchartdir.php");

function createChart($viewer, $chartIndex)
{
    # The x and y coordinates of the grid
    $dataX = array(-10, -8, -6, -4, -2, 0, 2, 4, 6, 8, 10);
    $dataY = array(-10, -8, -6, -4, -2, 0, 2, 4, 6, 8, 10);

    # The values at the grid points. In this example, we will compute the values using the formula z
    # = x * sin(y) + y * sin(x).
    $dataZ = array_fill(0, count($dataX) * count($dataY), 0);
    for($yIndex = 0; $yIndex < count($dataY); ++$yIndex) {
        $y = $dataY[$yIndex];
        for($xIndex = 0; $xIndex < count($dataX); ++$xIndex) {
            $x = $dataX[$xIndex];
            $dataZ[$yIndex * count($dataX) + $xIndex] = $x * sin($y) + $y * sin($x);
        }
    }

    # Create a SurfaceChart object of size 380 x 400 pixels, with white (ffffff) background and grey
    # (888888) border.
    $c = new SurfaceChart(380, 400, 0xffffff, 0x888888);

    # Demonstrate various lighting parameters
    if ($chartIndex == 0) {
        $c->addTitle(
            "Default Lighting<*br*><*size=10*>Ambient = 0.5, Diffuse = 0.5, Specular = 1, ".
            "Shininess = 8");
    } else if ($chartIndex == 1) {
        $c->addTitle(
            "Matte (Non-Glossy) Lighting<*br*><*size=10*>Ambient = 0.5, Diffuse = 0.5, Specular = ".
            "0, Shininess = 0");
        $c->setLighting(0.5, 0.5, 0, 0);
    } else if ($chartIndex == 2) {
        $c->addTitle(
            "Flat Lighting<*br*><*size=10*>Ambient = 1, Diffuse = 0, Specular = 0, Shininess = 0");
        $c->setLighting(1, 0, 0, 0);
    } else {
        $c->addTitle(
            "Strong Glossy Lighting<*br*><*size=10*>Ambient = 0.5, Diffuse = 0.5, Specular = 4, ".
            "Shininess = 32");
        $c->setLighting(0.5, 0.5, 4, 32);
    }

    # Set the center of the plot region at (175, 200), and set width x depth x height to 200 x 200 x
    # 160 pixels
    $c->setPlotRegion(175, 200, 200, 200, 160);

    # Set the plot region wall thichness to 5 pixels
    $c->setWallThickness(5);

    # Set the elevation and rotation angles to 45 and 60 degrees
    $c->setViewAngle(45, 60);

    # Set the perspective level to 35
    $c->setPerspective(35);

    # Set the data to use to plot the chart
    $c->setData($dataX, $dataY, $dataZ);

    # Spline interpolate data to a 50 x 50 grid for a smooth surface
    $c->setInterpolation(50, 50);

    # Set contour lines to semi-transparent black (c0000000)
    $c->setContourColor(0xc0000000);

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
    <title>Surface Lighting</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        Surface Lighting
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
