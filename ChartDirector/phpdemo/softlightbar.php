<?php
require_once("../lib/phpchartdir.php");

# The data for the bar chart
$data = array(450, 560, 630, 800, 1100, 1350, 1600, 1950, 2300, 2700);

# The labels for the bar chart
$labels = array("1996", "1997", "1998", "1999", "2000", "2001", "2002", "2003", "2004", "2005");

# Create a XYChart object of size 600 x 360 pixels
$c = new XYChart(600, 360);

# Add a title to the chart using 18pt Times Bold Italic font
$c->addTitle("Annual Revenue for Star Tech", "Times New Roman Bold Italic", 18);

# Set the plotarea at (60, 40) and of size 500 x 280 pixels. Use a vertical gradient color from
# light blue (eeeeff) to deep blue (0000cc) as background. Set border and grid lines to white
# (ffffff).
$c->setPlotArea(60, 40, 500, 280, $c->linearGradientColor(60, 40, 60, 280, 0xeeeeff, 0x0000cc), -1,
    0xffffff, 0xffffff);

# Add a multi-color bar chart layer using the supplied data. Use soft lighting effect with light
# direction from left.
$c->addBarLayer3($data)->setBorderColor(Transparent, softLighting(Left));

# Set x axis labels using the given labels
$c->xAxis->setLabels($labels);

# Draw the ticks between label positions (instead of at label positions)
$c->xAxis->setTickOffset(0.5);

# Add a title to the y axis with 10pt Arial Bold font
$c->yAxis->setTitle("USD (millions)", "Arial Bold", 10);

# Set axis label style to 8pt Arial Bold
$c->xAxis->setLabelStyle("Arial Bold", 8);
$c->yAxis->setLabelStyle("Arial Bold", 8);

# Set axis line width to 2 pixels
$c->xAxis->setWidth(2);
$c->yAxis->setWidth(2);

# Output the chart
$viewer = new WebChartViewer("chart1");
$viewer->setChart($c, SVG);

# Include tool tip for the chart
$viewer->setImageMap($c->getHTMLImageMap("", "", "title='Year {xLabel}: US\$ {value}M'"));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Soft Bar Shading</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        Soft Bar Shading
    </div>
    <hr style="border:solid 1px #000080; background:#000080" />
    <div style="font:10pt verdana; margin-bottom:1.5em">
        <a href="viewsource.php?file=<?=basename(__FILE__)?>">View Chart Source Code</a>
    </div>
    <!-- ****** Here is the chart image ****** -->
    <?php echo $viewer->renderHTML(); ?>
</body>
</html>
