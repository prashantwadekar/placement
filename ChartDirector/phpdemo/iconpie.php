<?php
require_once("../lib/phpchartdir.php");

# The data for the pie chart
$data = array(72, 18, 15, 12);

# The depths for the sectors
$depths = array(30, 20, 10, 10);

# The labels for the pie chart
$labels = array("Sunny", "Cloudy", "Rainy", "Snowy");

# The icons for the sectors
$icons = array("sun.png", "cloud.png", "rain.png", "snowy.png");

# Create a PieChart object of size 400 x 310 pixels, with a blue (CCCCFF) vertical metal gradient
# background, black border, 1 pixel 3D border effect and rounded corners
$c = new PieChart(400, 310, metalColor(0xccccff, 0), 0x000000, 1);
$c->setRoundedFrame();

# Set directory for loading images to current script directory
# Need when running under Microsoft IIS
$c->setSearchPath(dirname(__FILE__));

# Set the center of the pie at (200, 180) and the radius to 100 pixels
$c->setPieSize(200, 180, 100);

# Add a title box using 15pt Times Bold Italic font, on a blue (CCCCFF) background with glass effect
$c->addTitle("Weather Profile in Wonderland", "Times New Roman Bold Italic", 15)->setBackground(
    0xccccff, 0x000000, glassEffect());

# Set the pie data and the pie labels
$c->setData($data, $labels);

# Add icons to the chart as a custom field
$c->addExtraField($icons);

# Configure the sector labels using CDML to include the icon images
$c->setLabelFormat(
    "<*block,valign=absmiddle*><*img={field0}*> <*block*>{label}\n{percent}%<*/*><*/*>");

# Draw the pie in 3D with variable 3D depths
$c->set3D2($depths);

# Set the start angle to 225 degrees may improve layout when the depths of the sector are sorted in
# descending order, because it ensures the tallest sector is at the back.
$c->setStartAngle(225);

# Output the chart
$viewer = new WebChartViewer("chart1");
$viewer->setChart($c, SVG);

# Include tool tip for the chart
$viewer->setImageMap($c->getHTMLImageMap("", "", "title='{label}: {value} days ({percent}%)'"));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Icon Pie Chart (1)</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        Icon Pie Chart (1)
    </div>
    <hr style="border:solid 1px #000080; background:#000080" />
    <div style="font:10pt verdana; margin-bottom:1.5em">
        <a href="viewsource.php?file=<?=basename(__FILE__)?>">View Chart Source Code</a>
    </div>
    <!-- ****** Here is the chart image ****** -->
    <?php echo $viewer->renderHTML(); ?>
</body>
</html>
