<?php
require_once("../lib/phpchartdir.php");

function createChart($viewer, $chartIndex)
{
    # The first level nodes of the tree map. There are 4 nodes.
    $names = array("A", "B", "C", "D");

    # Use random numbers for second level nodes
    $r = new RanSeries(11 + $chartIndex);

    $series0 = $r->getSeries(6, 10, 100);
    $series1 = $r->getSeries(6, 10, 100);
    $series2 = $r->getSeries(6, 10, 100);
    $series3 = $r->getSeries(6, 10, 100);

    # Colors for second level nodes
    $colors0 = array(0xddeedd, 0xbbeebb, 0x99ee99, 0x77ee77, 0x55ee55, 0x33ee33);
    $colors1 = array(0xffeedd, 0xffddbb, 0xffcc99, 0xffbb77, 0xffaa55, 0xff9933);
    $colors2 = array(0xddeeff, 0xbbddff, 0x99ccee, 0x77bbee, 0x55aadd, 0x3399dd);
    $colors3 = array(0xffeeff, 0xeeccee, 0xddaadd, 0xcc88cc, 0xbb66bb, 0xaa44aa);

    # Create a Tree Map object of size 400 x 380 pixels
    $c = new TreeMapChart(400, 380);

    # Set the plotarea at (10, 35) and of size 380 x 300 pixels
    $c->setPlotArea(10, 35, 380, 300);

    # Obtain the root of the tree map, which is the entire plot area
    $root = $c->getRootNode();

    # Add first level nodes to the root. We do not need to provide data as they will be computed as
    # the sum of the second level nodes.
    $root->setData(null, $names);

    # Add second level nodes to each of the first level node
    $root->getNode(0)->setData($series0, null, $colors0);
    $root->getNode(1)->setData($series1, null, $colors1);
    $root->getNode(2)->setData($series2, null, $colors2);
    $root->getNode(3)->setData($series3, null, $colors2);

    # Get the prototype (template) for the first level nodes.
    $nodeConfig = $c->getLevelPrototype(1);

    # Hide the first level node cell border by setting its color to transparent
    $nodeConfig->setColors(-1, Transparent);

    # Get the prototype (template) for the second level nodes.
    $nodeConfig2 = $c->getLevelPrototype(2);

    # Set the label format for the nodes to include the parent node's label and index of the second
    # level node. Use semi-transparent black (3f000000) Arial Bold font and put the label at the
    # center of the cell.
    $nodeConfig2->setLabelFormat("{parent.label}{index}", "Arial Bold", 8, 0x3f000000, Center);

    # Set the second level node cell border to white (ffffff)
    $nodeConfig2->setColors(-1, 0xffffff);

    if ($chartIndex == 0) {
        # Squarify (default) - Layout the cells so that they are as square as possible.
        $c->addTitle("Squarify", "Arial Bold", 15);
    } else if ($chartIndex == 1) {
        # Slice and Dice - First level cells flow horizontally. Second level cells flow vertically.
        # (The setLayoutMethod also supports other flow directions.)
        $c->addTitle("Slice and Dice", "Arial Bold", 15);
        $root->setLayoutMethod(TreeMapSliceAndDice);
    } else if ($chartIndex == 2) {
        # Binary Split by Size - Split the cells into left/right groups so that their size are as
        # close as possible. For each group, split the cells into top/bottom groups using the same
        # criteria. Continue until each group contains one cell. (The setLayoutMethod also supports
        # other flow directions.)
        $c->addTitle("Binary Split by Size", "Arial Bold", 15);
        $root->setLayoutMethod(TreeMapBinaryBySize);
        $nodeConfig->setLayoutMethod(TreeMapBinaryBySize);
    } else if ($chartIndex == 3) {
        # Layout first level cells using Slice and Dice. Layout second level cells using Binary
        # Split By Size.
        $c->addTitle("Slice and Dice + Binary By Size", "Arial Bold", 15);
        $root->setLayoutMethod(TreeMapSliceAndDice);
        $nodeConfig->setLayoutMethod(TreeMapBinaryBySize);
    } else if ($chartIndex == 4) {
        # Layout first level cells using Slice and Dice. Layout second level cells using Squarify.
        $c->addTitle("Slice and Dice + Squarify", "Arial Bold", 15);
        $root->setLayoutMethod(TreeMapSliceAndDice);
        $nodeConfig->setLayoutMethod(TreeMapSquarify);
    } else if ($chartIndex == 5) {
        # Layout first level cells using Binary Split By Size.. Layout second level cells using
        # Strip. With Strip layout, cells flow from left to right, top to bottom. The number of
        # cells in each row is such that they will be as close to a square as possible. (The
        # setLayoutMethod also supports other flow directions.)
        $c->addTitle("Binary Split By Size + Strip", "Arial Bold", 15);
        $root->setLayoutMethod(TreeMapBinaryBySize);
        $nodeConfig->setLayoutMethod(TreeMapStrip);
    }

    # Output the chart
    $viewer->setChart($c, SVG);

    # Include tool tip for the chart
    $viewer->setImageMap($c->getHTMLImageMap("", "",
        "title='<*cdml*>{parent.label}{index}: {value|2}'"));
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
    <title>Multi Level Tree Map Layout</title>
    <!-- Include ChartDirector Javascript Library to support chart interactions -->
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:5px 0px 0px 5px">
    <div style="font:bold 18pt verdana;">
        Multi Level Tree Map Layout
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
