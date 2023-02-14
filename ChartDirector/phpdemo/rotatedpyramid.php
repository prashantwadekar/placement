<?php
require_once("../lib/phpchartdir.php");

# The data for the pyramid chart
$data = array(156, 123, 211, 179);

# The labels for the pyramid chart
$labels = array("Funds", "Bonds", "Stocks", "Cash");

# The semi-transparent colors for the pyramid layers
$colors = array(0x400000cc, 0x4066aaee, 0x40ffbb00, 0x40ee6622);

# Create a PyramidChart object of size 450 x 400 pixels
$c = new PyramidChart(450, 400);

# Set the pyramid center at (220, 180), and width x height to 150 x 300 pixels
$c->setPyramidSize(220, 180, 150, 300);

# Set the elevation to 15 degrees and rotation to 75 degrees
$c->setViewAngle(15, 75);

# Set the pyramid data and labels
$c->setData($data, $labels);

# Set the layer colors to the given colors
$c->setColors2(DataColor, $colors);

# Leave 1% gaps between layers
$c->setLayerGap(0.01);

# Add a legend box at (320, 60), with light grey (eeeeee) background and grey (888888) border. Set
# the top-left and bottom-right corners to rounded corners of 10 pixels radius.
$legendBox = $c->addLegend(320, 60);
$legendBox->setBackground(0xeeeeee, 0x888888);
$legendBox->setRoundedCorners(10, 0, 10, 0);

# Add labels at the center of the pyramid layers using Arial Bold font. The labels will show the
# percentage of the layers.
$c->setCenterLabel("{percent}%", "Arial Bold");

# Output the chart
$viewer = new WebChartViewer("chart1");
$viewer->setChart($c, SVG);

# Include tool tip for the chart
$viewer->setImageMap($c->getHTMLImageMap("", "", "title='{label}: US\$ {value}M ({percent}%)'"));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Rotated Pyramid Chart</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        Rotated Pyramid Chart
    </div>
    <hr style="border:solid 1px #000080; background:#000080" />
    <div style="font:10pt verdana; margin-bottom:1.5em">
        <a href="viewsource.php?file=<?=basename(__FILE__)?>">View Chart Source Code</a>
    </div>
    <!-- ****** Here is the chart image ****** -->
    <?php echo $viewer->renderHTML(); ?>
</body>
</html>
