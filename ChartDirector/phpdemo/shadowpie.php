<?php
require_once("../lib/phpchartdir.php");

function createChart($viewer, $chartIndex)
{
    # the tilt angle of the pie
    $angle = $chartIndex * 90 + 45;

    # The data for the pie chart
    $data = array(25, 18, 15, 12, 8, 30, 35);

    # The labels for the pie chart
    $labels = array("Labor", "Licenses", "Taxes", "Legal", "Insurance", "Facilities", "Production");

    # Create a PieChart object of size 110 x 110 pixels
    $c = new PieChart(110, 110);

    # Set the center of the pie at (50, 55) and the radius to 36 pixels
    $c->setPieSize(55, 55, 36);

    # Set the depth, tilt angle and 3D mode of the 3D pie (-1 means auto depth, "true" means the 3D
    # effect is in shadow mode)
    $c->set3D(-1, $angle, true);

    # Add a title showing the shadow angle
    $c->addTitle("Shadow @ " . $angle . " deg", "Arial", 8);

    # Set the pie data
    $c->setData($data, $labels);

    # Disable the sector labels by setting the color to Transparent
    $c->setLabelStyle("", 8, Transparent);

    # Output the chart
    $viewer->setChart($c, SVG);

    # Include tool tip for the chart
    $viewer->setImageMap($c->getHTMLImageMap("", "", "title='{label}: US\${value}K ({percent}%)'"));
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
    <title>3D Shadow Mode</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        3D Shadow Mode
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
