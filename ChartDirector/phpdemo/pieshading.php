<?php
require_once("../lib/phpchartdir.php");

function createChart($viewer, $chartIndex)
{
    # The data for the pie chart
    $data = array(18, 30, 20, 15);

    # The labels for the pie chart
    $labels = array("Labor", "Licenses", "Facilities", "Production");

    # The colors to use for the sectors
    $colors = array(0x66aaee, 0xeebb22, 0xbbbbbb, 0x8844ff);

    # Create a PieChart object of size 200 x 220 pixels. Use a vertical gradient color from blue
    # (0000cc) to deep blue (000044) as background. Use rounded corners of 16 pixels radius.
    $c = new PieChart(200, 220);
    $c->setBackground($c->linearGradientColor(0, 0, 0, $c->getHeight(), 0x0000cc, 0x000044));
    $c->setRoundedFrame(0xffffff, 16);

    # Set the center of the pie at (100, 120) and the radius to 80 pixels
    $c->setPieSize(100, 120, 80);

    # Set the pie data
    $c->setData($data, $labels);

    # Set the sector colors
    $c->setColors2(DataColor, $colors);

    # Demonstrates various shading modes
    if ($chartIndex == 0) {
        $c->addTitle("Default Shading", "bold", 12, 0xffffff);
    } else if ($chartIndex == 1) {
        $c->addTitle("Local Gradient", "bold", 12, 0xffffff);
        $c->setSectorStyle(LocalGradientShading);
    } else if ($chartIndex == 2) {
        $c->addTitle("Global Gradient", "bold", 12, 0xffffff);
        $c->setSectorStyle(GlobalGradientShading);
    } else if ($chartIndex == 3) {
        $c->addTitle("Concave Shading", "bold", 12, 0xffffff);
        $c->setSectorStyle(ConcaveShading);
    } else if ($chartIndex == 4) {
        $c->addTitle("Rounded Edge", "bold", 12, 0xffffff);
        $c->setSectorStyle(RoundedEdgeShading);
    } else if ($chartIndex == 5) {
        $c->addTitle("Radial Gradient", "bold", 12, 0xffffff);
        $c->setSectorStyle(RadialShading);
    }

    # Disable the sector labels by setting the color to Transparent
    $c->setLabelStyle("", 8, Transparent);

    # Output the chart
    $viewer->setChart($c, SVG);

    # Include tool tip for the chart
    $viewer->setImageMap($c->getHTMLImageMap("", "", "title='{label}: US\${value}K ({percent}%)'"));
}

# This example includes 6 charts
$viewers = array();
for ($i = 0; $i < 6; ++$i) {
    $viewers[$i] = new WebChartViewer("chart$i");
    createChart($viewers[$i], $i);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>2D Pie Shading</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        2D Pie Shading
    </div>
    <hr style="border:solid 1px #000080; background:#000080" />
    <div style="font:10pt verdana; margin-bottom:1.5em">
        <a href="viewsource.php?file=<?=basename(__FILE__)?>">View Chart Source Code</a>
    </div>
    <!-- ****** Here are the chart images ****** -->
    <?php
        for ($i = 0; $i < count($viewers); ++$i) {
            echo $viewers[$i]->renderHTML(), " ";
        }
    ?>
</body>
</html>
