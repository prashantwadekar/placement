<?php
require_once("../lib/phpchartdir.php");

#
# Data to draw the chart. In this demo, the data buffer will be filled by a random data generator.
# In real life, the data is probably stored in a buffer (eg. a database table, a text file, or some
# global memory) and updated by other means.
#

# We use a data buffer to emulate the last 240 samples.
$sampleSize = 240;
$dataSeries1 = array_fill(0, $sampleSize, 0);
$dataSeries2 = array_fill(0, $sampleSize, 0);
$dataSeries3 = array_fill(0, $sampleSize, 0);
$timeStamps = array_fill(0, $sampleSize, 0);

# Our pseudo random number generator
$firstDate = chartTime2(time()) - count($timeStamps);
for($i = 0; $i < count($timeStamps); ++$i) {
    $p = $firstDate + $i;
    $timeStamps[$i] = $p;
    $dataSeries1[$i] = cos($p * 2.1) * 10 + 1 / (cos($p) * cos($p) + 0.01) + 20;
    $dataSeries2[$i] = 100 * sin($p / 27.7) * sin($p / 10.1) + 150;
    $dataSeries3[$i] = 100 * cos($p / 6.7) * cos($p / 11.9) + 150;
}

# Create an XYChart object 600 x 270 pixels in size, with light grey (f4f4f4) background, black
# (000000) border, 1 pixel raised effect, and with a rounded frame.
$c = new XYChart(600, 270, 0xf4f4f4, 0x000000, 0);
$c->setRoundedFrame();

# Set the plotarea at (55, 62) and of size 520 x 175 pixels. Use white (ffffff) background. Enable
# both horizontal and vertical grids by setting their colors to grey (cccccc). Set clipping mode to
# clip the data lines to the plot area.
$c->setPlotArea(55, 62, 520, 175, 0xffffff, -1, -1, 0xcccccc, 0xcccccc);
$c->setClipping();

# Add a title to the chart using 15pt Times New Roman Bold Italic font, with a light grey (dddddd)
# background, black (000000) border, and a glass like raised effect.
$c->addTitle("Field Intensity at Observation Satellite", "Times New Roman Bold Italic", 15
    )->setBackground(0xdddddd, 0x000000, glassEffect());

# Add a legend box at the top of the plot area with 9pt Arial Bold font. We set the legend box to
# the same width as the plot area and use grid layout (as opposed to flow or top/down layout). This
# distributes the 3 legend icons evenly on top of the plot area.
$b = $c->addLegend2(55, 33, 3, "Arial Bold", 9);
$b->setBackground(Transparent, Transparent);
$b->setWidth(520);

# Configure the y-axis with a 10pt Arial Bold axis title
$c->yAxis->setTitle("Intensity (V/m)", "Arial Bold", 10);

# Configure the x-axis to auto-scale with at least 75 pixels between major tick and 15 pixels
# between minor ticks. This shows more minor grid lines on the chart.
$c->xAxis->setTickDensity(75, 15);

# Set the axes width to 2 pixels
$c->xAxis->setWidth(2);
$c->yAxis->setWidth(2);

# Set the x-axis label format
$c->xAxis->setLabelFormat("{value|hh:nn:ss}");

# Create a line layer to plot the lines
$layer = $c->addLineLayer2();

# The x-coordinates are the timeStamps.
$layer->setXData($timeStamps);

# The 3 data series are used to draw 3 lines. Here we put the latest data values as part of the data
# set name, so you can see them updated in the legend box.
$layer->addDataSet($dataSeries1, 0xff0000, $c->formatValue($dataSeries1[count($dataSeries1) - 1],
    "Alpha: <*bgColor=FFCCCC*> {value|2} "));
$layer->addDataSet($dataSeries2, 0x00cc00, $c->formatValue($dataSeries2[count($dataSeries2) - 1],
    "Beta: <*bgColor=CCFFCC*> {value|2} "));
$layer->addDataSet($dataSeries3, 0x0000ff, $c->formatValue($dataSeries3[count($dataSeries3) - 1],
    "Gamma: <*bgColor=CCCCFF*> {value|2} "));

# Create the WebChartViewer to output the chart
$viewer = new WebChartViewer("ChartImage1");

# Check if is a stream request to update the chart
if ($viewer->isStreamRequest()) {
    # Stream the updated chart to the browser
    $viewer->streamChart($c->makeChart2(SVG));
    exit();
}

# Is the initial web page request. Output chart as usual.
$viewer->setChart($c, SVG);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Real-Time Chart</title>
    <script type="text/javascript" src="cdjcv.js"></script>
</head>
<body style="margin:0px">
<table cellspacing="0" cellpadding="0" border="0">
    <tr>
        <td align="right" colspan="2" style="background:#000088; color:#ffff00; padding:0px 4px 2px 0px;">
            <a style="color:#FFFF00; font:italic bold 10pt Arial; text-decoration:none" href="http://www.advsofteng.com/">
                Advanced Software Engineering
            </a>
        </td>
    </tr>
    <tr valign="top">
        <td style="width:130px; background:#c0c0ff; border-right:black 1px solid; border-bottom:black 1px solid;">
            <br />
            <br />
            <div style="font:12px Verdana; padding:10px;">
                <b>Update Period</b><br />
                <select id="UpdatePeriod" style="width:110px">
                    <option value="5">5</option>
                    <option value="10" selected="selected">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="60">60</option>
                </select>
                <br /><br /><br />
                <b>Time Remaining</b><br />
                <div style="width:108px; border:#888888 1px inset;">
                    <div style="margin:3px" id="TimeRemaining">0</div>
                </div>
            </div>
        </td>
        <td>
            <div style="font: bold 20pt Arial; margin:5px 0px 0px 5px;">
                Simple Real-Time Chart
            </div>
            <hr style="border:solid 1px #000080" />
            <div style="padding:0px 5px 5px 10px">
                <!-- ****** Here is the chart image ****** -->
                <?php echo $viewer->renderHTML(); ?>
            </div>
        </td>
    </tr>
</table>
<script type="text/javascript">

//
// Executes once every second to update the countdown display. Updates the chart when the countdown reaches 0.
//
function timerTick()
{
    // Get the update period and the time left
    var updatePeriod = parseInt(document.getElementById("UpdatePeriod").value);
    var timeLeft = Math.min(parseInt(document.getElementById("TimeRemaining").innerHTML), updatePeriod) - 1;

    if (timeLeft == 0)
        // Can update the chart now
        JsChartViewer.get('ChartImage1').streamUpdate();
    else if (timeLeft < 0)
        // Reset the update period
        timeLeft += updatePeriod;

    // Update the countdown display
    document.getElementById("TimeRemaining").innerHTML = timeLeft;
}
window.setInterval("timerTick()", 1000);

</script>
</body>
</html>
