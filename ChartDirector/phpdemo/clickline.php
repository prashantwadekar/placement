<?php
require_once("../lib/phpchartdir.php");

# Get the selected year.
$selectedYear = $_REQUEST["xLabel"];

#
# In real life, the data may come from a database based on selectedYear. In this example, we just
# use a random number generator.
#
$seed = 50 + ((int)($selectedYear) - 1996) * 15;
$rantable = new RanTable($seed, 1, 12);
$rantable->setCol2(0, $seed, -$seed * 0.25, $seed * 0.33, $seed * 0.1, $seed * 3);

$data = $rantable->getCol(0);

#
# Now we obtain the data into arrays, we can start to draw the chart using ChartDirector
#

# Create a XYChart object of size 600 x 320 pixels
$c = new XYChart(600, 360);

# Add a title to the chart using 18pt Times Bold Italic font
$c->addTitle("Month Revenue for Star Tech for " . $selectedYear, "Times New Roman Bold Italic", 18);

# Set the plotarea at (60, 40) and of size 500 x 280 pixels. Use a vertical gradient color from
# light blue (eeeeff) to deep blue (0000cc) as background. Set border and grid lines to white
# (ffffff).
$c->setPlotArea(60, 40, 500, 280, $c->linearGradientColor(60, 40, 60, 280, 0xeeeeff, 0x0000cc), -1,
    0xffffff, 0xffffff);

# Add a red line (ff0000) chart layer using the data
$dataSet = $c->addLineLayer()->addDataSet($data, 0xff0000, "Revenue");

# Set the line width to 3 pixels
$dataSet->setLineWidth(3);

# Use a 13 point circle symbol to plot the data points
$dataSet->setDataSymbol(CircleSymbol, 13);

# Set the labels on the x axis. In this example, the labels must be Jan - Dec.
$labels = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec")
    ;
$c->xAxis->setLabels($labels);

# When auto-scaling, use tick spacing of 40 pixels as a guideline
$c->yAxis->setTickDensity(40);

# Add a title to the x axis to reflect the selected year
$c->xAxis->setTitle("Year " . $selectedYear, "Times New Roman Bold Italic", 12);

# Add a title to the y axis
$c->yAxis->setTitle("USD (millions)", "Times New Roman Bold Italic", 12);

# Set axis label style to 8pt Arial Bold
$c->xAxis->setLabelStyle("Arial Bold", 8);
$c->yAxis->setLabelStyle("Arial Bold", 8);

# Set axis line width to 2 pixels
$c->xAxis->setWidth(2);
$c->yAxis->setWidth(2);

# Output the chart
$viewer = new WebChartViewer("chart1");
$viewer->setChart($c, SVG);

# Create an image map for the chart
$viewer->setImageMap($c->getHTMLImageMap("clickpie.php?year=" . $selectedYear, "",
    "title='{xLabel}: US\$ {value|0}M'"));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Clickable Line Chart</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        Simple Clickable Line Chart
    </div>
    <hr style="border:solid 1px #000080; background:#000080" />
    <div style="font:10pt verdana; margin-bottom:1.5em">
        <a href="viewsource.php?file=<?=basename(__FILE__)?>">View Chart Source Code</a>
    </div>
    <!-- ****** Here is the chart image ****** -->
    <?php echo $viewer->renderHTML(); ?>
</body>
</html>
