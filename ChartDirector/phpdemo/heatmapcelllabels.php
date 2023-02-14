<?php
require_once("../lib/phpchartdir.php");

# The x-axis and y-axis labels
$xLabels = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J");
$yLabels = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");

# Random data for the 10 x 10 cells
$rand = new RanSeries(2);
$zData = $rand->get2DSeries(count($xLabels), count($yLabels), 0, 100);

# We set the middle 5 x 5 cells to NoValue to remove them from the chart
for($x = 3; $x < 7; ++$x) {
    for($y = 3; $y < 7; ++$y) {
        $zData[$y * count($xLabels) + $x] = NoValue;
    }
}

# Create an XYChart object of size 480 x 540 pixels.
$c = new XYChart(480, 540);

# Set the plotarea at (50, 40) and of size 400 x 400 pixels. Set the background, border, and grid
# lines to transparent.
$p = $c->setPlotArea(50, 40, 400, 400, -1, -1, Transparent, Transparent);

# Create a discrete heat map with 10 x 10 cells
$layer = $c->addDiscreteHeatMapLayer($zData, count($xLabels));

# Set the x-axis labels. Use 8pt Arial Bold font. Set axis stem to transparent, so only the labels
# are visible. Set 0.5 offset to position the labels in between the grid lines. Position the x-axis
# at the top of the chart.
$c->xAxis->setLabels($xLabels);
$c->xAxis->setLabelStyle("Arial Bold", 8);
$c->xAxis->setColors(Transparent, TextColor);
$c->xAxis->setLabelOffset(0.5);
$c->xAxis->setTitle("X axis title placeholder", "Arial Bold", 12);
$c->setXAxisOnTop();

# Set the y-axis labels. Use 8pt Arial Bold font. Set axis stem to transparent, so only the labels
# are visible. Set 0.5 offset to position the labels in between the grid lines. Reverse the y-axis
# so that the labels are flowing top-down instead of bottom-up.
$c->yAxis->setLabels($yLabels);
$c->yAxis->setLabelStyle("Arial Bold", 8);
$c->yAxis->setColors(Transparent, TextColor);
$c->yAxis->setLabelOffset(0.5);
$c->yAxis->setTitle("Y axis title placeholder", "Arial Bold", 12);
$c->yAxis->setReverse();

# Set a 3-pixel gap between cells
$layer->setCellGap(3);

# Use the z value as the cell label
$layer->setDataLabelFormat("{z|0}");

# Position the color axis 20 pixels below the plot area and of the width as the plot area. Put the
# labels at the bottom side of the color axis. Use 8pt Arial Bold font for the labels.
$cAxis = $layer->setColorAxis($p->getLeftX(), $p->getBottomY() + 20, TopLeft, $p->getWidth(), Bottom
    );
$cAxis->setLabelStyle("Arial Bold", 8);
$cAxis->setTitle("Color legend title placeholder", "Arial Bold", 12);

# Set the color stops and scale of the color axis
$colorScale = array(0, 0x00ff00, 50, 0xffff00, 80, 0xff6600, 100, 0xff0000);
$cAxis->setColorScale($colorScale);
$cAxis->setLinearScale(0, 100, 10);

# Output the chart
$viewer = new WebChartViewer("chart1");
$viewer->setChart($c, SVG);

# Include tool tip for the chart
$viewer->setImageMap($c->getHTMLImageMap("", "", "title='<*cdml*>({xLabel}, {yLabel}) = {z|2}'"));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Heat Map Cell Labels</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        Heat Map Cell Labels
    </div>
    <hr style="border:solid 1px #000080; background:#000080" />
    <div style="font:10pt verdana; margin-bottom:1.5em">
        <a href="viewsource.php?file=<?=basename(__FILE__)?>">View Chart Source Code</a>
    </div>
    <!-- ****** Here is the chart image ****** -->
    <?php echo $viewer->renderHTML(); ?>
</body>
</html>

