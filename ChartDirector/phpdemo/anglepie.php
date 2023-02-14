<?php
require_once("../lib/phpchartdir.php");

function createChart($viewer, $chartIndex)
{
    # The data for the pie chart
    $data = array(25, 18, 15, 12, 8, 30, 35);

    # The labels for the pie chart
    $labels = array("Labor", "Licenses", "Taxes", "Legal", "Insurance", "Facilities", "Production");

    # Create a PieChart object of size 280 x 240 pixels
    $c = new PieChart(280, 240);

    # Set the center of the pie at (140, 130) and the radius to 80 pixels
    $c->setPieSize(140, 130, 80);

    # Add a title to the pie to show the start angle and direction
    if ($chartIndex == 0) {
        $c->addTitle("Start Angle = 0 degrees\nDirection = Clockwise");
    } else {
        $c->addTitle("Start Angle = 90 degrees\nDirection = AntiClockwise");
        $c->setStartAngle(90, false);
    }

    # Draw the pie in 3D
    $c->set3D();

    # Set the pie data and the pie labels
    $c->setData($data, $labels);

    # Explode the 1st sector (index = 0)
    $c->setExplode(0);

    # Output the chart
    $viewer->setChart($c, SVG);

    # Include tool tip for the chart
    $viewer->setImageMap($c->getHTMLImageMap("", "", "title='{label}: US\${value}K ({percent}%)'"));
}

# This example includes 2 charts
$viewers = array();
for ($i = 0; $i < 2; ++$i) {
    $viewers[$i] = new WebChartViewer("chart$i");
    createChart($viewers[$i], $i);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Start Angle and Direction</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        Start Angle and Direction
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
