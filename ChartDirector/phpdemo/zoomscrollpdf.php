<?php
require_once("../lib/phpchartdir.php");

#
# Create a random table for demo purpose.
#
function getRanTable() {
    $r = new RanTable(127, 4, 1827);
    $r->setDateCol(0, chartTime(2015, 1, 1), 86400);
    $r->setCol(1, 150, -10, 10);
    $r->setCol(2, 200, -10, 10);
    $r->setCol(3, 250, -8, 8);
    return $r;
}

#
# Initialize the WebChartViewer when the page is first loaded
#
function initViewer($viewer) {
    # The full x-axis range is from Jan 1, 2007 to Jan 1, 2012
    $startDate = chartTime(2015, 1, 1);
    $endDate = chartTime(2020, 1, 1);
    $viewer->setFullRange("x", $startDate, $endDate);

    # Initialize the view port to show the last 366 days (out of 1827 days)
    $viewer->setViewPortWidth(366.0 / 1827);
    $viewer->setViewPortLeft(1 - $viewer->getViewPortWidth());

    # Set the maximum zoom to 10 days (out of 1827 days)
    $viewer->setZoomInWidthLimit(10.0 / 1827);
}

#
# Draw an XYChart using data from startX to endX
#
function drawXYChart($startX, $endX) {
    # Obtain the random data table
    $r = getRanTable();

    # Select the data for the visible date range startDate to endDate. It is possible there is no
    # data point at exactly startDate or endDate. In this case, we also need the data points that
    # are just outside the visible date range to "overdraw" the line a little bit (the "overdrawn"
    # part will be clipped to the plot area) In this demo, we do this by adding a one day margin to
    # the date range when selecting the data.
    $r->selectDate(0, $startX - 86400, $endX + 86400);
    # The selected data from the random data table
    $timeStamps = $r->getCol(0);
    $dataSeriesA = $r->getCol(1);
    $dataSeriesB = $r->getCol(2);
    $dataSeriesC = $r->getCol(3);

    #
    # At this stage, we have extracted the visible data. We can use those data to plot the chart.
    #

    #================================================================================
    # Configure overall chart appearance.
    #================================================================================

    # Create an XYChart object of size 640 x 350 pixels
    $c = new XYChart(640, 350);

    # Set the plotarea at (55, 50) with width 80 pixels less than chart width, and height 85 pixels
    # less than chart height. Use a vertical gradient from light blue (f0f6ff) to sky blue (a0c0ff)
    # as background. Set border to transparent and grid lines to white (ffffff).
    $c->setPlotArea(55, 50, $c->getWidth() - 80, $c->getHeight() - 85, $c->linearGradientColor(0,
        50, 0, $c->getHeight() - 35, 0xf0f6ff, 0xa0c0ff), -1, Transparent, 0xffffff, 0xffffff);

    # As the data can lie outside the plotarea in a zoomed chart, we need enable clipping.
    $c->setClipping();

    # Add a legend box at (55, 25) using horizontal layout. Use 8pts Arial Bold as font. Set the
    # background and border color to Transparent and use line style legend key.
    $b = $c->addLegend(55, 25, false, "Arial Bold", 8);
    $b->setBackground(Transparent);
    $b->setLineStyleKey();

    # Set the axis stem to transparent
    $c->xAxis->setColors(Transparent);
    $c->yAxis->setColors(Transparent);

    # Add axis title using 10pts Arial Bold Italic font
    $c->yAxis->setTitle("Ionic Temperature (C)", "Arial Bold Italic", 10);

    #================================================================================
    # Add data to chart
    #================================================================================

    #
    # In this example, we represent the data by lines. You may modify the code below to use other
    # representations (areas, scatter plot, etc).
    #

    # Add a line layer for the lines, using a line width of 2 pixels
    $layer = $c->addLineLayer2();
    $layer->setLineWidth(2);

    # In this demo, we do not have too many data points. In real code, the chart may contain a lot
    # of data points when fully zoomed out - much more than the number of horizontal pixels in this
    # plot area. So it is a good idea to use fast line mode.
    $layer->setFastLineMode();

    # Now we add the 3 data series to a line layer, using the color red (ff33333), green (008800)
    # and blue (3333cc)
    $layer->setXData($timeStamps);
    $layer->addDataSet($dataSeriesA, 0xff3333, "Alpha");
    $layer->addDataSet($dataSeriesB, 0x008800, "Beta");
    $layer->addDataSet($dataSeriesC, 0x3333cc, "Gamma");

    #================================================================================
    # Configure axis scale and labelling
    #================================================================================

    # Set the x-axis scale
    $c->xAxis->setDateScale($startX, $endX);

    #
    # In this demo, the time range can be from a few years to a few days. We demonstrate how to set
    # up different date/time format based on the time range.
    #

    # If all ticks are yearly aligned, then we use "yyyy" as the label format.
    $c->xAxis->setFormatCondition("align", 31104000);
    $c->xAxis->setLabelFormat("{value|yyyy}");

    # If all ticks are monthly aligned, then we use "mmm yyyy" in bold font as the first label of a
    # year, and "mmm" for other labels.
    $c->xAxis->setFormatCondition("align", 2592000);
    $c->xAxis->setMultiFormat(StartOfYearFilter(), "<*font=bold*>{value|mmm yyyy}", AllPassFilter(),
        "{value|mmm}");

    # If all ticks are daily algined, then we use "mmm dd<*br*>yyyy" in bold font as the first label
    # of a year, and "mmm dd" in bold font as the first label of a month, and "dd" for other labels.
    $c->xAxis->setFormatCondition("align", 86400);
    $c->xAxis->setMultiFormat(StartOfYearFilter(),
        "<*block,halign=left*><*font=bold*>{value|mmm dd<*br*>yyyy}", StartOfMonthFilter(),
        "<*font=bold*>{value|mmm dd}");
    $c->xAxis->setMultiFormat2(AllPassFilter(), "{value|dd}");

    # For all other cases (sub-daily ticks), use "hh:nn<*br*>mmm dd" for the first label of a day,
    # and "hh:nn" for other labels.
    $c->xAxis->setFormatCondition("else");
    $c->xAxis->setMultiFormat(StartOfDayFilter(), "<*font=bold*>{value|hh:nn<*br*>mmm dd}",
        AllPassFilter(), "{value|hh:nn}");

    return $c;
}

#
# Draw the chart
#
function drawChart($viewer) {
    # Determine the visible x-axis range
    $viewPortStartDate = $viewer->getValueAtViewPort("x", $viewer->getViewPortLeft());
    $viewPortEndDate = $viewer->getValueAtViewPort("x", $viewer->getViewPortRight());

    # Draw the XYChart
    $c = drawXYChart($viewPortStartDate, $viewPortEndDate);

    # Add a title to the chart using 18 pts Times New Roman Bold Italic font
    $c->addTitle("   PDF Report Demonstration", "Times New Roman Bold Italic", 18);

    if ($viewer->IsAttachmentRequest()) {
        # Output as PNG attachment
        $viewer->streamAttachment($c->makeChart2(PNG), "demo_chart.png");
        exit();
    } else {
        # Output the chart
        $viewer->setChart($c, SVG);

        # Output Javascript chart model to the browser to support tracking cursor
        $viewer->setChartModel($c->getJsChartModel());
    }
}

#
# Create a multi-page PDF Report
#
function createPdfReport($viewer) {
    # The MultiPagePDF object can create PDF from multiple pages, each with one chart object. Since
    # a chart object can contain text (eg. using BaseChart.addText) and other charts (eg. using
    # MultiChart), that means each page can contain text and multiple charts.
    $doc = new MultiPagePDF();

    # Page configuration - A4 = 210 x 297mm. The PDF default is 96 dpi (dot per inch), so the A4
    # size is equal to 794 x 1123 dots.
    $pageConfig = "pagewidth = 794; pageHeight = 1123";

    # In this example, we include a cover page with only text. This is by creating an empty pie
    # chart with text only.
    $firstPage = new PieChart(720, 960);
    $firstPage->addText(360, 320,
        "<*size=50*>ChartDirector<*br*><*size=30*>PDF Report Demonstration<*/*>", "Arial Bold", 30,
        0x000000, Center);
    $firstPage->setOutputOptions($pageConfig);
    $doc->addPage($firstPage);

    # We include 2 charts per page, with each chart showing one year of data. Each page will also
    # have a header and page number
    $startYear = (int)(getChartYMD($viewer->getValueAtViewPort("x", 0)) / 10000);
    $endYear = (int)(getChartYMD($viewer->getValueAtViewPort("x", 1) - 1) / 10000);
    $pageNumber = 0;

    for($yyyy = $startYear; $yyyy < $endYear + 1; $yyyy += 2) {
        # This chart is the page.
        $m = new MultiChart(760, 920);

        # Use addTitle to add a header
        $m->addTitle("ChartDirector PDF Report Demonstration", "Arial Bold", 20);

        # Create the first chart
        $c = drawXYChart(chartTime($yyyy, 1, 1), chartTime($yyyy + 1, 1, 1));
        $m->addChart((int)(($m->getWidth() - $c->getWidth()) / 2), 100, $c);
        $c->addTitle("Year " . $yyyy);

        $c2 = null;
        if ($yyyy < $endYear) {
            # Create the second chart
            $c2 = drawXYChart(chartTime($yyyy + 1, 1, 1), chartTime($yyyy + 2, 1, 1));
            $c2->addTitle("Year " . ($yyyy + 1));
            $m->addChart((int)(($m->getWidth() - $c2->getWidth()) / 2), 500, $c2);
        }

        # Add the page number
        $pageNumber = $pageNumber + 1;
        $m->addTitle(BottomCenter, $pageNumber, "Arial Bold", 8);

        $m->setOutputOptions($pageConfig);
        $doc->addPage($m);
    }

    # Output the PDF report
    return $doc->outPDF2();
}

# Create the WebChartViewer object
$viewer = new WebChartViewer("chart1");

if ($viewer->isPartialUpdateRequest()) {
    if (isset($_REQUEST["download"]) && ($_REQUEST["download"] == "report")) {
        # PDF report
        $viewer->streamAttachment(createPdfReport($viewer), "chartdirector_report.pdf");
    } else {
        # Is a partial update request. Draw the chart and perform a partial response.
        drawChart($viewer);
        print($viewer->partialUpdateChart());
    }
    exit();
}

#
# If the code reaches here, it is a full page request.
#

# In this exapmle, we just need to initialize the WebChartViewer and draw the chart.
initViewer($viewer);
drawChart($viewer);
?>

<!DOCTYPE html>
<html>
<head>
    <title>PDF Report Demonstration</title>
    <script type="text/javascript" src="cdjcv.js"></script>
    <style type="text/css">
        .chartButton { font:12px Verdana; border-bottom:#000000 1px solid; padding:5px; cursor:pointer;}
        .chartButtonSpacer { font:12px Verdana; border-bottom:#000000 1px solid; padding:5px;}
        .chartButton:hover { box-shadow:inset 0px 0px 0px 2px #444488; }
        .chartButtonPressed { background-color: #CCFFCC; }
    </style>
</head>
<body style="margin:0px;">
<script type="text/javascript">

//
// Execute the following initialization code after the web page is loaded
//
JsChartViewer.addEventListener(window, 'load', function() {
    // Update the chart when the view port has changed (eg. when the user zooms in using the mouse)
    var viewer = JsChartViewer.get('<?php echo $viewer->getId() ?>');
    viewer.attachHandler("ViewPortChanged", viewer.partialUpdate);

    // Draw track cursor when mouse is moving over plotarea. Hide it when mouse leaves plot area.
    viewer.attachHandler(["MouseMovePlotArea", "TouchStartPlotArea", "TouchMovePlotArea", "PostUpdate",
        "ChartMove"], function(e) {
        this.preventDefault(e);   // Prevent the browser from using touch events for other actions
        trackLineLabel(viewer, viewer.getPlotAreaMouseX());
        viewer.setAutoHide("all", ["MouseOutPlotArea", "TouchEndPlotArea"]);
    });
});

//
// Draw track line with data labels
//
function trackLineLabel(viewer, mouseX)
{
    // Remove all previously drawn tracking object
    viewer.hideObj("all");

    // The chart and its plot area
    var c = viewer.getChart();
    var plotArea = c.getPlotArea();

    // Get the data x-value that is nearest to the mouse, and find its pixel coordinate.
    var xValue = c.getNearestXValue(mouseX);
    var xCoor = c.getXCoor(xValue);

    // Draw a vertical track line at the x-position
    viewer.drawVLine("trackLine", xCoor, plotArea.getTopY(), plotArea.getBottomY(), "black 1px dotted");

    // Draw a label on the x-axis to show the track line position
    viewer.showTextBox("xAxisLabel", xCoor, plotArea.getBottomY() + 4, JsChartViewer.Top,
        c.xAxis().getFormattedLabel(xValue, "mmm dd, yyyy"),
        "font:bold 11px Arial;color:#FFFFFF;background-color:#000000;padding:0px 3px");

    // Iterate through all layers to draw the data labels
    for (var i = 0; i < c.getLayerCount(); ++i)
    {
        var layer = c.getLayerByZ(i);

        // The data array index of the x-value
        var xIndex = layer.getXIndexOf(xValue);

        // Iterate through all the data sets in the layer
        for (var j = 0; j < layer.getDataSetCount(); ++j)
        {
            var dataSet = layer.getDataSetByZ(j);

            // Get the color and position of the data label
            var color = dataSet.getDataColor();
            var yCoor = c.getYCoor(dataSet.getPosition(xIndex), dataSet.getUseYAxis());

            // Draw a track dot with a label next to it for visible data points in the plot area
            if ((yCoor != null) && (yCoor >= plotArea.getTopY()) && (yCoor <= plotArea.getBottomY()) &&
                (color != null))
            {
                viewer.showTextBox("dataPoint" + i + "_" + j, xCoor, yCoor, JsChartViewer.Center,
                    viewer.htmlRect(7, 7, color));

                viewer.showTextBox("dataLabel" + i + "_" + j, xCoor + 5, yCoor, JsChartViewer.Left,
                    dataSet.getValue(xIndex).toPrecision(4), "padding:0px 3px;font:bold 11px Arial;" +
                    "background-color:" + color + ";color:#FFFFFF;-webkit-text-size-adjust:100%;");
            }
        }
    }
}

//
// This method is called when the user clicks on the Pointer, Zoom In or Zoom Out buttons
//
function setMouseMode(mode)
{
    var viewer = JsChartViewer.get('<?php echo $viewer->getId() ?>');
    if (mode == viewer.getMouseUsage())
        mode = JsChartViewer.Default;

    // Set the button color based on the selected mouse mode
    document.getElementById("scrollButton").className = "chartButton" +
        ((mode  == JsChartViewer.Scroll) ? " chartButtonPressed" : "");
    document.getElementById("zoomInButton").className = "chartButton" +
        ((mode  == JsChartViewer.ZoomIn) ? " chartButtonPressed" : "");
    document.getElementById("zoomOutButton").className = "chartButton" +
        ((mode  == JsChartViewer.ZoomOut) ? " chartButtonPressed" : "");

    // Set the mouse mode
    viewer.setMouseUsage(mode);
}

</script>
<form method="post" id="ZoomScrollPDF" runat="server">
<table cellspacing="0" cellpadding="0" style="border:black 1px solid;">
    <tr>
        <td align="right" colspan="2" style="background:#000088; color:#ffff00; padding:0px 4px 2px 0px;">
            <a style="color:#FFFF00; font:italic bold 10pt Arial; text-decoration:none" href="http://www.advsofteng.com/">
                Advanced Software Engineering
            </a>
        </td>
    </tr>
    <tr valign="top">
        <td style="width:130px; background:#c0c0ff;">
        <div style="width:130px">
            <!-- The following table is to create 3 cells for 3 buttons to control the mouse usage mode. -->
            <table style="width:100%; padding:0px; border:0px; border-spacing:0px;">
                <tr>
                    <td class="chartButton" id="scrollButton" onclick="setMouseMode(JsChartViewer.Scroll)"
                        ontouchstart="this.onclick(event); event.preventDefault();">
                        <img src="scrollew.gif" style="vertical-align:middle" alt="Drag" />&nbsp;&nbsp;Drag to Scroll
                    </td>
                </tr>
                <tr>
                    <td class="chartButton" id="zoomInButton" onclick="setMouseMode(JsChartViewer.ZoomIn)"
                        ontouchstart="this.onclick(event); event.preventDefault();">
                        <img src="zoomInIcon.gif" style="vertical-align:middle" alt="Zoom In" />&nbsp;&nbsp;Zoom In
                    </td>
                </tr>
                <tr>
                    <td class="chartButton" id="zoomOutButton" onclick="setMouseMode(JsChartViewer.ZoomOut)"
                        ontouchstart="this.onclick(event); event.preventDefault();">
                        <img src="zoomOutIcon.gif" style="vertical-align:middle" alt="Zoom Out" />&nbsp;&nbsp;Zoom Out
                    </td>
                </tr>
            </table>
            <div style="margin-top:30px; text-align:center">
                <input type="button" value="Download Chart" style="width:100%;height:2em"
                    onclick="JsChartViewer.get('<?php echo $viewer->getId() ?>').partialUpdateAsAttachment('download=chart');" />
                <input type="button" value="PDF Report" style="margin-top:5px; width:100%;height:2em"
                    onclick="JsChartViewer.get('<?php echo $viewer->getId() ?>').partialUpdateAsAttachment('download=report');" />
            </div>
        </div>
        </td>
        <td style="border-left:black 1px solid; padding:10px 5px 0px 5px;">
            <!-- ****** Here is the chart image ****** -->
            <?php echo $viewer->renderHTML() ?>
        </td>
    </tr>
</table>
</form>
</body>
</html>
