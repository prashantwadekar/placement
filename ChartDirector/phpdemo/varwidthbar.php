<?php
require_once("../lib/phpchartdir.php");

# The data for the chart
$data = array(800, 600, 1000, 1400);
$widths = array(250, 500, 960, 460);
$labels = array("Wind", "Hydro", "Coal", "Natural Gas");

# The colors to use
$colors = array(0x00aa00, 0x66aaee, 0xee6622, 0xffbb00);

# Create a XYChart object of size 500 x 350 pixels
$c = new XYChart(500, 350);

# Add a title to the chart using 15pt Arial Italic font
$c->addTitle("Energy Generation Breakdown", "Arial Italic", 15);

# Set the plotarea at (60, 60) and of (chart_width - 90) x (chart_height - 100) in size. Use a
# vertical gradient color from light blue (f9f9ff) to sky blue (aaccff) as background. Set grid
# lines to white (ffffff).
$plotAreaBgColor = $c->linearGradientColor(0, 60, 0, $c->getHeight() - 40, 0xaaccff, 0xf9fcff);
$c->setPlotArea(60, 60, $c->getWidth() - 90, $c->getHeight() - 100, $plotAreaBgColor, -1, -1,
    0xffffff);

# Add a legend box at (50, 30) using horizontal layout and transparent background.
$c->addLegend(55, 30, false)->setBackground(Transparent);

# Add titles to x/y axes with 10 points Arial Bold font
$c->xAxis->setTitle("Mega Watts", "Arial Bold", 10);
$c->yAxis->setTitle("Cost per MWh (dollars)", "Arial Bold", 10);

# Set the x axis rounding to false, so that the x-axis will fit the data exactly
$c->xAxis->setRounding(false, false);

# In ChartDirector, there is no bar layer that can have variable bar widths, but you may create a
# bar using an area layer. (A bar can be considered as the area under a rectangular outline.) So by
# using a loop to create one bar per area layer, we can achieve a variable width bar chart.

# starting position of current bar
$currentX = 0;

for($i = 0; $i < count($data); ++$i) {
    # ending position of current bar
    $nextX = $currentX + $widths[$i];

    # outline of the bar
    $dataX = array($currentX, $currentX, $nextX, $nextX);
    $dataY = array(0, $data[$i], $data[$i], 0);

    # create the area layer to fill the bar
    $layer = $c->addAreaLayer($dataY, $colors[$i], $labels[$i]);
    $layer->setXData($dataX);

    # Tool tip for the layer
    $layer->setHTMLImageMap("", "", "title='" . $labels[$i] . ": " . $widths[$i] . " MW at \$" .
        $data[$i] . " per MWh'");

    # the ending position becomes the starting position of the next bar
    $currentX = $nextX;
}

# Output the chart
$viewer = new WebChartViewer("chart1");
$viewer->setChart($c, SVG);

# Include tool tip for the chart
$viewer->setImageMap($c->getHTMLImageMap(""));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Variable Width Bar Chart</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        Variable Width Bar Chart
    </div>
    <hr style="border:solid 1px #000080; background:#000080" />
    <div style="font:10pt verdana; margin-bottom:1.5em">
        <a href="viewsource.php?file=<?=basename(__FILE__)?>">View Chart Source Code</a>
    </div>
    <!-- ****** Here is the chart image ****** -->
    <?php echo $viewer->renderHTML(); ?>
</body>
</html>
