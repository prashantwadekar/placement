<?php
require_once("../lib/phpchartdir.php");

# The data for the pie chart
$data = array(25, 18, 15, 12, 8, 30, 35);

# The labels for the pie chart
$labels = array("Labor", "Licenses", "Taxes", "Legal", "Insurance", "Facilities", "Production");

# Create a PieChart object of size 450 x 270 pixels
$c = new PieChart(450, 270);

# Set the center of the pie at (150, 100) and the radius to 80 pixels
$c->setPieSize(150, 135, 100);

# add a legend box where the top left corner is at (330, 50)
$c->addLegend(330, 60);

# modify the sector label format to show percentages only
$c->setLabelFormat("{percent}%");

# Set the pie data and the pie labels
$c->setData($data, $labels);

# Use rounded edge shading, with a 1 pixel white (FFFFFF) border
$c->setSectorStyle(RoundedEdgeShading, 0xffffff, 1);

# Output the chart
$viewer = new WebChartViewer("chart1");
$viewer->setChart($c, SVG);

# Include tool tip for the chart
$viewer->setImageMap($c->getHTMLImageMap("", "", "title='{label}: US\${value}K ({percent}%)'"));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pie Chart with Legend (1)</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        Pie Chart with Legend (1)
    </div>
    <hr style="border:solid 1px #000080; background:#000080" />
    <div style="font:10pt verdana; margin-bottom:1.5em">
        <a href="viewsource.php?file=<?=basename(__FILE__)?>">View Chart Source Code</a>
    </div>
    <!-- ****** Here is the chart image ****** -->
    <?php echo $viewer->renderHTML(); ?>
</body>
</html>
