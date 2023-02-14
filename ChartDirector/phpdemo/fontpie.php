<?php
require_once("../lib/phpchartdir.php");

# The data for the pie chart
$data = array(25, 18, 15, 12, 8, 30, 35);

# The labels for the pie chart
$labels = array("Labor", "Licenses", "Taxes", "Legal", "Insurance", "Facilities", "Production");

# Create a PieChart object of size 480 x 300 pixels
$c = new PieChart(480, 300);

# Set directory for loading images to current script directory
# Need when running under Microsoft IIS
$c->setSearchPath(dirname(__FILE__));

# Use a blue marble pattern as the background wallpaper, with a black border, and 1 pixel 3D border
# effect
$c->setBackground($c->patternColor("marble.png"), 0x000000, 1);

# Set the center of the pie at (150, 150) and the radius to 100 pixels
$c->setPieSize(150, 150, 100);

# Add a title to the pie chart using Times Bold Italic/15 points/deep blue (0x000080) as font, with
# a wood pattern as the title background
$c->addTitle("Project Cost Breakdown", "Times New Roman Bold Italic", 15, 0x000080)->setBackground(
    $c->patternColor("wood.png"));

# Draw the pie in 3D
$c->set3D();

# Add a legend box using Arial Bold Italic/11 points font. Use a pink marble pattern as the
# background wallpaper, with a 1 pixel 3D border. The legend box is top-right aligned relative to
# the point (465, 70)
$b = $c->addLegend(465, 70, true, "Arial Bold Italic", 11);
$b->setBackground($c->patternColor("marble2.png"), Transparent, 1);
$b->setAlignment(TopRight);

# Set the default font for all sector labels to Arial Bold/8pt/dark green (0x008000).
$c->setLabelStyle("Arial Bold", 8, 0x008000);

# Set the pie data and the pie labels
$c->setData($data, $labels);

# Explode the 3rd sector
$c->setExplode(2, 40);

# Use Arial Bold/12pt/red as label font for the 3rd sector
$c->sector(2)->setLabelStyle("Arial Bold", 12, 0xff0000);

# Use Arial/8pt/deep blue as label font for the 5th sector. Add a background box using the sector
# fill color (SameAsMainColor), with a black (0x000000) edge and 2 pixel 3D border.
$c->sector(4)->setLabelStyle("Arial", 8, 0x000080)->setBackground(SameAsMainColor, 0x000000, 2);

# Use Arial Italic/8pt/light red (0xff9999) as label font for the 6th sector. Add a dark blue
# (0x000080) background box with a 2 pixel 3D border.
$c->sector(0)->setLabelStyle("Arial Italic", 8, 0xff9999)->setBackground(0x000080, Transparent, 2);

# Use Times Bold Italic/8pt/deep green (0x008000) as label font for 7th sector. Add a yellow
# (0xFFFF00) background box with a black (0x000000) edge.
$c->sector(6)->setLabelStyle("Times New Roman Bold Italic", 8, 0x008000)->setBackground(0xffff00,
    0x000000);

# Output the chart
$viewer = new WebChartViewer("chart1");
$viewer->setChart($c, SVG);

# Include tool tip for the chart
$viewer->setImageMap($c->getHTMLImageMap("", "", "title='{label}: US\${value}K ({percent}%)'"));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Text Style and Colors</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        Text Style and Colors
    </div>
    <hr style="border:solid 1px #000080; background:#000080" />
    <div style="font:10pt verdana; margin-bottom:1.5em">
        <a href="viewsource.php?file=<?=basename(__FILE__)?>">View Chart Source Code</a>
    </div>
    <!-- ****** Here is the chart image ****** -->
    <?php echo $viewer->renderHTML(); ?>
</body>
</html>
