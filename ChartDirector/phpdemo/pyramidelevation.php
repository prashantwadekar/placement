<?php
require_once("../lib/phpchartdir.php");

function createChart($viewer, $chartIndex)
{
    # The data for the pyramid chart
    $data = array(156, 123, 211, 179);

    # The colors for the pyramid layers
    $colors = array(0x66aaee, 0xeebb22, 0xcccccc, 0xcc88ff);

    # The elevation angle
    $angle = $chartIndex * 15;

    # Create a PyramidChart object of size 200 x 200 pixels, with white (ffffff) background and grey
    # (888888) border
    $c = new PyramidChart(200, 200, 0xffffff, 0x888888);

    # Set the pyramid center at (100, 100), and width x height to 60 x 120 pixels
    $c->setPyramidSize(100, 100, 60, 120);

    # Set the elevation angle
    $c->addTitle("Elevation = " . $angle, "Arial Italic", 15);
    $c->setViewAngle($angle);

    # Set the pyramid data
    $c->setData($data);

    # Set the layer colors to the given colors
    $c->setColors2(DataColor, $colors);

    # Leave 1% gaps between layers
    $c->setLayerGap(0.01);

    # Output the chart
    $viewer->setChart($c, SVG);
}

# This example includes 7 charts
$viewers = array();
for ($i = 0; $i < 7; ++$i) {
    $viewers[$i] = new WebChartViewer("chart$i");
    createChart($viewers[$i], $i);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pyramid Elevation</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        Pyramid Elevation
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
