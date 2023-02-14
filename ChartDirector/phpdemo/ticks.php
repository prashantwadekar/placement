<?php
require_once("../lib/phpchartdir.php");

function createChart($viewer, $chartIndex)
{
    # The data for the chart
    $data = array(100, 125, 265, 147, 67, 105);
    $labels = array("Jan", "Feb", "Mar", "Apr", "May", "Jun");

    # Create a XYChart object of size 250 x 250 pixels
    $c = new XYChart(250, 250);

    # Set the plot area at (27, 25) and of size 200 x 200 pixels
    $c->setPlotArea(27, 25, 200, 200);

    if ($chartIndex == 1) {
        # High tick density, uses 10 pixels as tick spacing
        $c->addTitle("Tick Density = 10 pixels");
        $c->yAxis->setTickDensity(10);
    } else {
        # Normal tick density, just use the default setting
        $c->addTitle("Default Tick Density");
    }

    # Set the labels on the x axis
    $c->xAxis->setLabels($labels);

    # Add a color bar layer using the given data. Use a 1 pixel 3D border for the bars.
    $c->addBarLayer3($data)->setBorderColor(-1, 1);

    # Output the chart
    $viewer->setChart($c, SVG);

    # Include tool tip for the chart
    $viewer->setImageMap($c->getHTMLImageMap("", "", "title='Revenue for {xLabel}: US\${value}M'"));
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
    <title>Tick Density</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        Tick Density
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
