<?php
require_once("../lib/phpchartdir.php");

# The x-axis and y-axis labels
$xLabels = array("Alpha", "Beta", "Gamma", "Delta", "Epsilon", "Zeta", "Eta", "Theta", "Iota",
    "Kappa");
$yLabels = array("Ant", "Bear", "Cat", "Dog", "Elephant", "Fox", "Goat", "Horse", "Insect",
    "Jellyfish");

# Random data for the 10 x 10 cells
$rand = new RanSeries(2);
$zData = $rand->getSeries(count($xLabels) * count($yLabels), 0, 10);

# The coordinates for the first set of scatter symbols
$symbolX = array(2.5, 6.5, 3.5, 8.5);
$symbolY = array(4.5, 7.5, 9.5, 8.5);

# The coordinates for the second set of scatter symbols
$symbol2X = array(6.5, 3.5, 7.5, 1.5);
$symbol2Y = array(0.5, 7.5, 3.5, 2.5);

# Create an XYChart object of size 600 x 500 pixels.
$c = new XYChart(600, 500);

# Set the plotarea at (80, 80) and of size 400 x 400 pixels. Set the background, border, and grid
# lines to transparent.
$p = $c->setPlotArea(80, 80, 400, 400, -1, -1, Transparent, Transparent);

# Add the first set of scatter symbols. Use grey (0x555555) cross shape symbols.
$c->addScatterLayer($symbolX, $symbolY, "Disputed", Cross2Shape(0.2), 15, 0x555555
    )->setHTMLImageMap("{disable}");

# Add the first set of scatter symbols. Use yellow (0xffff66) star shape symbols.
$c->addScatterLayer($symbol2X, $symbol2Y, "Audited", StarShape(5), 19, 0xffff66)->setHTMLImageMap(
    "{disable}");

# Create a discrete heat map with 10 x 10 cells
$layer = $c->addDiscreteHeatMapLayer($zData, count($xLabels));

# Set the x-axis labels. Use 10pt Arial Bold font rotated by 90 degrees. Set axis stem to
# transparent, so only the labels are visible. Set 0.5 offset to position the labels in between the
# grid lines. Position the x-axis at the top of the chart.
$c->xAxis->setLabels($xLabels);
$c->xAxis->setLabelStyle("Arial Bold", 10, TextColor, 90);
$c->xAxis->setColors(Transparent, TextColor);
$c->xAxis->setLabelOffset(0.5);
$c->setXAxisOnTop();

# Set the y-axis labels. Use 10pt Arial Bold font. Set axis stem to transparent, so only the labels
# are visible. Set 0.5 offset to position the labels in between the grid lines. Reverse the y-axis
# so that the labels are flowing top-down instead of bottom-up.
$c->yAxis->setLabels($yLabels);
$c->yAxis->setLabelStyle("Arial Bold", 10);
$c->yAxis->setColors(Transparent, TextColor);
$c->yAxis->setLabelOffset(0.5);
$c->yAxis->setReverse();

# Set the color stops and scale
$colorScale = array(0, 0xff0000, 1, 0xff8800, 3, 0x4488cc, 7, 0x99ccff, 9, 0x00ff00, 10);
$colorLabels = array("Poor", "Fair", "Good", "Very Good", "Excellent");
$layer->colorAxis->setColorScale($colorScale);

# Position the legend box 20 pixels to the right of the plot area. Use 10pt Arial Bold font. Set the
# key icon size to 15 x 15 pixels. Set vertical key spacing to 8 pixels.
$b = $c->addLegend($p->getRightX() + 20, $p->getTopY(), true, "Arial Bold", 10);
$b->setBackground(Transparent, Transparent);
$b->setKeySize(15, 15);
$b->setKeySpacing(0, 8);

# Add the color scale label to the legend box
for($i = count($colorLabels) - 1; $i >= 0; --$i) {
    $b->addKey($colorLabels[$i], (int)($colorScale[$i * 2 + 1]));
}

# Output the chart
$viewer = new WebChartViewer("chart1");
$viewer->setChart($c, SVG);

# Include tool tip for the chart
$viewer->setImageMap($c->getHTMLImageMap("", "", "title='<*cdml*>({xLabel}, {yLabel}) = {z|2}'"));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Heat Map Cell Symbols</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        Heat Map Cell Symbols
    </div>
    <hr style="border:solid 1px #000080; background:#000080" />
    <div style="font:10pt verdana; margin-bottom:1.5em">
        <a href="viewsource.php?file=<?=basename(__FILE__)?>">View Chart Source Code</a>
    </div>
    <!-- ****** Here is the chart image ****** -->
    <?php echo $viewer->renderHTML(); ?>
</body>
</html>
