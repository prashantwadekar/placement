<?php
require_once("../lib/phpchartdir.php");

function createChart($viewer, $chartIndex)
{
    # Determine the donut inner radius (as percentage of outer radius) based on input parameter
    $donutRadius = $chartIndex * 25;

    # The data for the pie chart
    $data = array(10, 10, 10, 10, 10);

    # The labels for the pie chart
    $labels = array("Marble", "Wood", "Granite", "Plastic", "Metal");

    # Create a PieChart object of size 150 x 120 pixels, with a grey (EEEEEE) background, black
    # border and 1 pixel 3D border effect
    $c = new PieChart(150, 120, 0xeeeeee, 0x000000, 1);

    # Set donut center at (75, 65) and the outer radius to 50 pixels. Inner radius is computed
    # according donutWidth
    $c->setDonutSize(75, 60, 50, (int)(50 * $donutRadius / 100));

    # Add a title to show the donut width
    $c->addTitle("Inner Radius = " . $donutRadius . " %", "Arial", 10)->setBackground(0xcccccc, 0);

    # Draw the pie in 3D
    $c->set3D(12);

    # Set the pie data and the pie labels
    $c->setData($data, $labels);

    # Disable the sector labels by setting the color to Transparent
    $c->setLabelStyle("", 8, Transparent);

    # Output the chart
    $viewer->setChart($c, SVG);

    # Include tool tip for the chart
    $viewer->setImageMap($c->getHTMLImageMap("", "", "title='{label}: {value}kg ({percent}%)'"));
}

# This example includes 5 charts
$viewers = array();
for ($i = 0; $i < 5; ++$i) {
    $viewers[$i] = new WebChartViewer("chart$i");
    createChart($viewers[$i], $i);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Donut Width</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        Donut Width
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
