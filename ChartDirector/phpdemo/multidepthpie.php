<?php
require_once("../lib/phpchartdir.php");

# The data for the pie chart
$data = array(72, 18, 15, 12);

# The labels for the pie chart
$labels = array("Labor", "Machinery", "Facilities", "Computers");

# The depths for the sectors
$depths = array(30, 20, 10, 10);

# Create a PieChart object of size 360 x 300 pixels, with a light blue (DDDDFF) background and a 1
# pixel 3D border
$c = new PieChart(360, 300, 0xddddff, -1, 1);

# Set the center of the pie at (180, 175) and the radius to 100 pixels
$c->setPieSize(180, 175, 100);

# Add a title box using 15pt Times Bold Italic font and blue (AAAAFF) as background color
$c->addTitle("Project Cost Breakdown", "Times New Roman Bold Italic", 15)->setBackground(0xaaaaff);

# Set the pie data and the pie labels
$c->setData($data, $labels);

# Draw the pie in 3D with variable 3D depths
$c->set3D2($depths);

# Set the start angle to 225 degrees may improve layout when the depths of the sector are sorted in
# descending order, because it ensures the tallest sector is at the back.
$c->setStartAngle(225);

# Output the chart
$viewer = new WebChartViewer("chart1");
$viewer->setChart($c, SVG);

# Include tool tip for the chart
$viewer->setImageMap($c->getHTMLImageMap("", "", "title='{label}: US\${value}K ({percent}%)'"));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Multi-Depth Pie Chart</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        Multi-Depth Pie Chart
    </div>
    <hr style="border:solid 1px #000080; background:#000080" />
    <div style="font:10pt verdana; margin-bottom:1.5em">
        <a href="viewsource.php?file=<?=basename(__FILE__)?>">View Chart Source Code</a>
    </div>
    <!-- ****** Here is the chart image ****** -->
    <?php echo $viewer->renderHTML(); ?>
</body>
</html>
