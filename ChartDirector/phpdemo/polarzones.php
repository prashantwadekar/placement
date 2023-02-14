<?php
require_once("../lib/phpchartdir.php");

# The data for the chart
$data = array(51, 15, 51, 40, 17, 87, 94, 21, 35, 88, 50, 60);

# The labels for the chart
$labels = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec")
    ;

# Create a PolarChart object of size 400 x 420 pixels
$c = new PolarChart(400, 420);

# Set background color to a pale grey f0f0f0, with a black border and 1 pixel 3D border effect
$c->setBackground(0xf0f0f0, 0x000000, 1);

# Add a title to the chart using 16pt Arial Bold Italic font. The title text is white (0xffffff) on
# a dark blue (000040) background
$c->addTitle("Chemical Concentration", "Arial Bold Italic", 16, 0xffffff)->setBackground(0x000040);

# Set center of plot area at (200, 240) with radius 145 pixels. Set background color to blue
# (9999ff)
$c->setPlotArea(200, 240, 145, 0x9999ff);

# Color the region between radius = 40 to 80 as green (99ff99)
$c->radialAxis->addZone(40, 80, 0x99ff99);

# Color the region with radius > 80 as red (ff9999)
$c->radialAxis->addZone(80, 999, 0xff9999);

# Set the grid style to circular grid
$c->setGridStyle(false);

# Set the radial axis label format
$c->radialAxis->setLabelFormat("{value} ppm");

# Use semi-transparent (40ffffff) label background so as not to block the data
$c->radialAxis->setLabelStyle()->setBackground(0x40ffffff, 0x40000000);

# Add a legend box at (200, 30) top center aligned, using 9pt Arial Bold font. with a black border.
$legendBox = $c->addLegend(200, 30, false, "Arial Bold", 9);
$legendBox->setAlignment(TopCenter);

# Add legend keys to represent the red/green/blue zones
$legendBox->addKey("Under-Absorp", 0x9999ff);
$legendBox->addKey("Normal", 0x99ff99);
$legendBox->addKey("Over-Absorp", 0xff9999);

# Add a blue (000080) spline line layer with line width set to 3 pixels and using yellow (ffff00)
# circles to represent the data points
$layer = $c->addSplineLineLayer($data, 0x000080);
$layer->setLineWidth(3);
$layer->setDataSymbol(CircleShape, 11, 0xffff00);

# Set the labels to the angular axis as spokes.
$c->angularAxis->setLabels($labels);

# Output the chart
$viewer = new WebChartViewer("chart1");
$viewer->setChart($c, SVG);

# Include tool tip for the chart.
$viewer->setImageMap($layer->getHTMLImageMap("", "", "title='Concentration on {label}: {value} ppm'"
    ));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Circular Zones</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        Circular Zones
    </div>
    <hr style="border:solid 1px #000080; background:#000080" />
    <div style="font:10pt verdana; margin-bottom:1.5em">
        <a href="viewsource.php?file=<?=basename(__FILE__)?>">View Chart Source Code</a>
    </div>
    <!-- ****** Here is the chart image ****** -->
    <?php echo $viewer->renderHTML(); ?>
</body>
</html>
