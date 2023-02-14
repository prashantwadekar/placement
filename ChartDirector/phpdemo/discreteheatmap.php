<?php
require_once("../lib/phpchartdir.php");

# The x-axis and y-axis labels
$xLabels = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J");
$yLabels = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");

# Random data for the 10 x 10 cells
$r = new RanSeries(2);
$zData = $r->get2DSeries(count($xLabels), count($yLabels), 0, 100);

# Create an XYChart object of size 520 x 470 pixels.
$c = new XYChart(520, 470);

# Set the plotarea at (50, 30) and of size 400 x 400 pixels.
$p = $c->setPlotArea(50, 30, 400, 400);

# Create a discrete heat map with 10 x 10 cells
$layer = $c->addDiscreteHeatMapLayer($zData, count($xLabels));

# Set the x-axis labels. Use 8pt Arial Bold font. Set axis stem to transparent, so only the labels
# are visible. Set 0.5 offset to position the labels in between the grid lines.
$c->xAxis->setLabels($xLabels);
$c->xAxis->setLabelStyle("Arial Bold", 8);
$c->xAxis->setColors(Transparent, TextColor);
$c->xAxis->setLabelOffset(0.5);
$c->xAxis->setTitle("X Axis Title Placeholder", "Arial Bold", 12);

# Set the y-axis labels. Use 8pt Arial Bold font. Set axis stem to transparent, so only the labels
# are visible. Set 0.5 offset to position the labels in between the grid lines.
$c->yAxis->setLabels($yLabels);
$c->yAxis->setLabelStyle("Arial Bold", 8);
$c->yAxis->setColors(Transparent, TextColor);
$c->yAxis->setLabelOffset(0.5);
$c->yAxis->setTitle("Y Axis Title Placeholder", "Arial Bold", 12);

# Position the color axis 20 pixels to the right of the plot area and of the same height as the plot
# area. Put the labels on the right side of the color axis. Use 8pt Arial Bold font for the labels.
$cAxis = $layer->setColorAxis($p->getRightX() + 20, $p->getTopY(), TopLeft, $p->getHeight(), Right);
$cAxis->setLabelStyle("Arial Bold", 8);

# Output the chart
$viewer = new WebChartViewer("chart1");
$viewer->setChart($c, SVG);

# Include tool tip for the chart
$viewer->setImageMap($c->getHTMLImageMap("", "", "title='<*cdml*>({xLabel}, {yLabel}) = {z|2}'"));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Discrete Heat Map</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        Discrete Heat Map
    </div>
    <hr style="border:solid 1px #000080; background:#000080" />
    <div style="font:10pt verdana; margin-bottom:1.5em">
        <a href="viewsource.php?file=<?=basename(__FILE__)?>">View Chart Source Code</a>
    </div>
    <!-- ****** Here is the chart image ****** -->
    <?php echo $viewer->renderHTML(); ?>
</body>
</html>
