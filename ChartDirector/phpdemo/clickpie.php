<?php
require_once("../lib/phpchartdir.php");

# Get the selected year and month
$selectedYear = (int)($_REQUEST["year"]);
$selectedMonth = (int)($_REQUEST["x"]) + 1;

#
# In real life, the data may come from a database based on selectedYear. In this example, we just
# use a random number generator.
#
$seed = ($selectedYear - 1992) * (100 + 3 * $selectedMonth);
$rantable = new RanTable($seed, 1, 4);
$rantable->setCol(0, $seed * 0.003, $seed * 0.017);

$data = $rantable->getCol(0);

# The labels for the pie chart
$labels = array("Services", "Hardware", "Software", "Others");

# Create a PieChart object of size 600 x 240 pixels
$c = new PieChart(600, 280);

# Set the center of the pie at (300, 140) and the radius to 120 pixels
$c->setPieSize(300, 140, 120);

# Add a title to the pie chart using 18pt Times Bold Italic font
$c->addTitle("Revenue Breakdown for " . $selectedMonth . "/" . $selectedYear,
    "Times New Roman Bold Italic", 18);

# Draw the pie in 3D with 20 pixels 3D depth
$c->set3D(20);

# Set label format to display sector label, value and percentage in two lines
$c->setLabelFormat("{label}<*br*>\${value|2}M ({percent}%)");

# Set label style to 10pt Arial Bold Italic font. Set background color to the same as the sector
# color, with reduced-glare glass effect and rounded corners.
$t = $c->setLabelStyle("Arial Bold Italic", 10);
$t->setBackground(SameAsMainColor, Transparent, glassEffect(ReducedGlare));
$t->setRoundedCorners();

# Use side label layout method
$c->setLabelLayout(SideLayout);

# Set the pie data and the pie labels
$c->setData($data, $labels);

# Output the chart
$viewer = new WebChartViewer("chart1");
$viewer->setChart($c, SVG);

# Create an image map for the chart
$viewer->setImageMap($c->getHTMLImageMap("piestub.php", "", "title='{label}:US\$ {value|2}M'"));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Clickable Pie Chart</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        Simple Clickable Pie Chart
    </div>
    <hr style="border:solid 1px #000080; background:#000080" />
    <div style="font:10pt verdana; margin-bottom:1.5em">
        <a href="viewsource.php?file=<?=basename(__FILE__)?>">View Chart Source Code</a>
    </div>
    <!-- ****** Here is the chart image ****** -->
    <?php echo $viewer->renderHTML(); ?>
</body>
</html>
