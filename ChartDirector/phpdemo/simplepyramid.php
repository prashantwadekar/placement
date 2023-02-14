<?php
require_once("../lib/phpchartdir.php");

# The data for the pyramid chart
$data = array(156, 123, 211, 179);

# The labels for the pyramid chart
$labels = array("Funds", "Bonds", "Stocks", "Cash");

# Create a PyramidChart object of size 360 x 360 pixels
$c = new PyramidChart(360, 360);

# Set the pyramid center at (180, 180), and width x height to 150 x 180 pixels
$c->setPyramidSize(180, 180, 150, 300);

# Set the pyramid data and labels
$c->setData($data, $labels);

# Add labels at the center of the pyramid layers using Arial Bold font. The labels will have two
# lines showing the layer name and percentage.
$c->setCenterLabel("{label}\n{percent}%", "Arial Bold");

# Output the chart
$viewer = new WebChartViewer("chart1");
$viewer->setChart($c, SVG);

# Include tool tip for the chart
$viewer->setImageMap($c->getHTMLImageMap("", "", "title='{label}: US\$ {value}M ({percent}%)'"));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Pyramid Chart</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        Simple Pyramid Chart
    </div>
    <hr style="border:solid 1px #000080; background:#000080" />
    <div style="font:10pt verdana; margin-bottom:1.5em">
        <a href="viewsource.php?file=<?=basename(__FILE__)?>">View Chart Source Code</a>
    </div>
    <!-- ****** Here is the chart image ****** -->
    <?php echo $viewer->renderHTML(); ?>
</body>
</html>
