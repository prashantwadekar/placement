<?php
require_once("../lib/phpchartdir.php");

function createChart($viewer, $chartIndex)
{
    # The data for the chart
    $data = array(85, 156, 179.5, 211, 123);
    $labels = array("Mon", "Tue", "Wed", "Thu", "Fri");

    # Create a XYChart object of size 270 x 270 pixels
    $c = new XYChart(270, 270);

    # Set the plot area at (40, 32) and of size 200 x 200 pixels
    $plotarea = $c->setPlotArea(40, 32, 200, 200);

    # Set the background style based on the input parameter
    if ($chartIndex == 0) {
        # Has wallpaper image
        $c->setWallpaper(dirname(__FILE__)."/tile.png");
    } else if ($chartIndex == 1) {
        # Use a background image as the plot area background
        $plotarea->setBackground2(dirname(__FILE__)."/bg.png");
    } else if ($chartIndex == 2) {
        # Use white (0xffffff) and grey (0xe0e0e0) as two alternate plotarea background colors
        $plotarea->setBackground(0xffffff, 0xe0e0e0);
    } else {
        # Use a dark background palette
        $c->setColors(whiteOnBlackPalette());
    }

    # Set the labels on the x axis
    $c->xAxis->setLabels($labels);

    # Add a color bar layer using the given data. Use a 1 pixel 3D border for the bars.
    $c->addBarLayer3($data)->setBorderColor(-1, 1);

    # Output the chart
    $viewer->setChart($c, SVG);

    # Include tool tip for the chart
    $viewer->setImageMap($c->getHTMLImageMap("", "", "title='Revenue for {xLabel}: US\${value}K'"));
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
    <title>Background and Wallpaper</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        Background and Wallpaper
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
