<?php
require_once("../lib/phpchartdir.php");

#
# Data for 4 scatter layers to demonstrate various tooltip styles
#

$dataX0 = array(1, 1, 2, 2);
$dataY0 = array(3, 4, 3, 4);

$dataX1 = array(3, 3, 4, 4);
$dataY1 = array(3, 4, 3, 4);

$dataX2 = array(1, 1, 2, 2);
$dataY2 = array(1, 2, 1, 2);

$dataX3 = array(3, 3, 4, 4);
$dataY3 = array(1, 2, 1, 2);

# Create a XYChart object of size 550 x 390 pixels
$c = new XYChart(550, 390);

# Set the plotarea at (30, 40) and size 300 x 300 pixels. Use a gradient color background, light
# grey (c0c0c0) border, and light grey horizontal and vertical grid lines.
$c->setPlotArea(30, 40, 300, 300, $c->linearGradientColor(0, 30, 0, 330, 0xf9fcff, 0xaaccff), -1,
    0xc0c0c0, 0xc0c0c0, 0xc0c0c0);

# Add a legend box at the right side of the plot area. Use 10pt Arial Bold font and set background
# and border colors to Transparent.
$c->addLegend($c->getPlotArea()->getRightX() + 20, $c->getPlotArea()->getTopY(), true,
    "Arial Bold Italic", 10)->setBackground(Transparent);

# Add a title to the chart using 18pt Times Bold Itatic font
$c->addTitle("CDML Tooltip Demonstration", "Times New Roman Bold Italic", 18);

# Set the axes line width to 3 pixels, and ensure the auto axis labels are integers.
$c->xAxis->setWidth(3);
$c->yAxis->setWidth(3);
$c->yAxis->setMinTickInc(1);
$c->yAxis->setMinTickInc(1);

# Add a scatter chart layer with 19 pixel red (ff3333) sphere symbols. Use default CDML tooltip
# style.
$layer0 = $c->addScatterLayer($dataX0, $dataY0, "Default CDML Tooltip", GlassSphere2Shape, 19,
    0xff3333);
$layer0->setHTMLImageMap("", "", "title='<*cdml*>{dataSetName}<*br*>X = {x}, Y = {value}'");

# Add a scatter chart layer with 19 pixel green (33ff33) sphere symbols. Cconfigure the CDML tooltip
# to use a background background with text of different colors and fonts.
$layer1 = $c->addScatterLayer($dataX1, $dataY1, "Dark Style Tooltip", GlassSphere2Shape, 19,
    0x33ff33);
$layer1->setHTMLImageMap("", "",
    "title='<*cdml style=\"background:#000000; padding:5px; border-radius:3px; font-size:8pt\"*>".
    "<*span style=\"font:bold italic 100% Arial; color:#FFFF00\"*>{dataSetName}<*/span*><*br*>".
    "<*span style=\"font:bold 100% Arial; color:#FFFFFF\"*>X = {x}, Y = {value}<*/span*>'");

# Add a scatter chart layer with 19 pixels sky blue (66ccff) symbols. Configure the CDML tooltip to
# ue a translucent background.
$layer2 = $c->addScatterLayer($dataX2, $dataY2, "Translucent Tooltip", GlassSphere2Shape, 19,
    0x66ccff);
$layer2->setHTMLImageMap("", "",
    "title='<*cdml class=\"translucentToolTip\"*><*b*><*u*>{dataSetName}<*/u*><*/b*><*br*>X = ".
    "{x}, Y = {value}'");

# Add a scatter chart layer with 19 pixels sky blue (ffff00) symbols. Use standard tooltips provided
# by the GUI framework.
$layer3 = $c->addScatterLayer($dataX3, $dataY3, "Classical Tooltip", GlassSphere2Shape, 19, 0xffff00
    );
$layer3->setHTMLImageMap("", "", "title='[{dataSetName}] X = {x}, Y = {value}'");

# Output the chart
$viewer = new WebChartViewer("chart1");
$viewer->setChart($c, SVG);

# Include tool tip for the chart
$viewer->setImageMap($c->getHTMLImageMap(""));
?>

<!DOCTYPE html>
<html>
<head>
    <title>CDML Tooltips</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
    <style>
        .translucentToolTip { background:rgba(255,255,0,0.6); padding:5px; border-radius:3px; font:8pt Arial; }
    </style>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        CDML Tooltips
    </div>
    <hr style="border:solid 1px #000080; background:#000080" />
    <div style="font:10pt verdana; margin-bottom:1.5em">
        <a href="viewsource.php?file=<?=basename(__FILE__)?>">View Chart Source Code</a>
    </div>
    <!-- ****** Here is the chart image ****** -->
    <?php echo $viewer->renderHTML(); ?>
</body>
</html>
