<?php
require_once("../lib/phpchartdir.php");

function createChart($viewer, $chartIndex)
{
    # The data for the pie chart
    $data = array(42, 18, 8);

    # The labels for the pie chart
    $labels = array("Agree", "Disagree", "Not Sure");

    # The colors to use for the sectors
    $colors = array(0x66ff66, 0xff6666, 0xffff00);

    # Create a PieChart object of size 300 x 300 pixels. Set the background to a gradient color from
    # blue (aaccff) to sky blue (ffffff), with a grey (888888) border. Use rounded corners and soft
    # drop shadow.
    $c = new PieChart(300, 300);
    $c->setBackground($c->linearGradientColor(0, 0, 0, $c->getHeight() / 2, 0xaaccff, 0xffffff),
        0x888888);
    $c->setRoundedFrame();
    $c->setDropShadow();

    if ($chartIndex == 0) {
    #============================================================
    #    Draw a pie chart where the label is on top of the pie
    #============================================================

        # Set the center of the pie at (150, 150) and the radius to 120 pixels
        $c->setPieSize(150, 150, 120);

        # Set the label position to -40 pixels from the perimeter of the pie (-ve means label is
        # inside the pie)
        $c->setLabelPos(-40);

    } else {
    #============================================================
    #    Draw a pie chart where the label is outside the pie
    #============================================================

        # Set the center of the pie at (150, 150) and the radius to 80 pixels
        $c->setPieSize(150, 150, 80);

        # Set the sector label position to be 20 pixels from the pie. Use a join line to connect the
        # labels to the sectors.
        $c->setLabelPos(20, LineColor);

    }

    # Set the pie data and the pie labels
    $c->setData($data, $labels);

    # Set the sector colors
    $c->setColors2(DataColor, $colors);

    # Use local gradient shading, with a 1 pixel semi-transparent black (bb000000) border
    $c->setSectorStyle(LocalGradientShading, 0xbb000000, 1);

    # Output the chart
    $viewer->setChart($c, SVG);

    # Include tool tip for the chart
    $viewer->setImageMap($c->getHTMLImageMap("", "",
        "title='{label}: {value} responses ({percent}%)'"));
}

# This example includes 2 charts
$viewers = array();
for ($i = 0; $i < 2; ++$i) {
    $viewers[$i] = new WebChartViewer("chart$i");
    createChart($viewers[$i], $i);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Circular Label Layout</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        Circular Label Layout
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
