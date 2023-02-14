<?php
require_once("../lib/phpchartdir.php");

# In this example, we simply use random data for the 3 data series.
$r = new RanSeries(129);
$data0 = $r->getSeries(100, 100, -15, 15);
$data1 = $r->getSeries(100, 160, -15, 15);
$data2 = $r->getSeries(100, 220, -15, 15);
$timeStamps = $r->getDateSeries(100, chartTime(2014, 1, 1), 86400);

# Create a XYChart object of size 600 x 400 pixels
$c = new XYChart(600, 400);

# Add a title box using grey (0x555555) 20pt Arial font
$c->addTitle("    Multi-Line Chart Demonstration", "Arial", 20, 0x555555);

# Set the plotarea at (70, 70) and of size 500 x 300 pixels, with transparent background and border
# and light grey (0xcccccc) horizontal grid lines
$c->setPlotArea(70, 70, 500, 300, Transparent, -1, Transparent, 0xcccccc);

# Add a legend box with horizontal layout above the plot area at (70, 35). Use 12pt Arial font,
# transparent background and border, and line style legend icon.
$b = $c->addLegend(70, 35, false, "Arial", 12);
$b->setBackground(Transparent, Transparent);
$b->setLineStyleKey();

# Set axis label font to 12pt Arial
$c->xAxis->setLabelStyle("Arial", 12);
$c->yAxis->setLabelStyle("Arial", 12);

# Set the x and y axis stems to transparent, and the x-axis tick color to grey (0xaaaaaa)
$c->xAxis->setColors(Transparent, TextColor, TextColor, 0xaaaaaa);
$c->yAxis->setColors(Transparent);

# Set the major/minor tick lengths for the x-axis to 10 and 0.
$c->xAxis->setTickLength(10, 0);

# For the automatic axis labels, set the minimum spacing to 80/40 pixels for the x/y axis.
$c->xAxis->setTickDensity(80);
$c->yAxis->setTickDensity(40);

# Add a title to the y axis using dark grey (0x555555) 14pt Arial font
$c->yAxis->setTitle("Y-Axis Title Placeholder", "Arial", 14, 0x555555);

# Add a line layer to the chart with 3-pixel line width
$layer = $c->addLineLayer2();
$layer->setLineWidth(3);

# Add 3 data series to the line layer
$layer->addDataSet($data0, 0x5588cc, "Alpha");
$layer->addDataSet($data1, 0xee9944, "Beta");
$layer->addDataSet($data2, 0x99bb55, "Gamma");

# The x-coordinates for the line layer
$layer->setXData($timeStamps);

# Output the chart
$viewer = new WebChartViewer("chart1");
$viewer->setChart($c, SVG);

# Include tool tip for the chart
$viewer->setImageMap($c->getHTMLImageMap("", "", "title='[{x|mm/dd/yyyy}] {dataSetName}: {value}'"))
    ;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Multi-Line Chart (2)</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        Multi-Line Chart (2)
    </div>
    <hr style="border:solid 1px #000080; background:#000080" />
    <div style="font:10pt verdana; margin-bottom:1.5em">
        <a href="viewsource.php?file=<?=basename(__FILE__)?>">View Chart Source Code</a>
    </div>
    <!-- ****** Here is the chart image ****** -->
    <?php echo $viewer->renderHTML(); ?>
</body>
</html>
