<!DOCTYPE html>
<html>
<head>
    <title>Simple Clickable Pie Chart Handler</title>
</head>
<body style="margin:5px 0px 0px 5px">
<div style="font:bold 18pt verdana;">
    Simple Clickable Pie Chart Handler
</div>
<hr style="border:solid 1px #000080" />
<div style="font:10pt verdana; margin-bottom:20px">
    <a href="viewsource.php?file=<?php echo $_SERVER["SCRIPT_NAME"] ?>">View Source Code</a>
</div>
<div style="font:10pt verdana;">
<b>You have clicked on the following sector :</b><br />
<ul>
    <li>Sector Number : <?php echo $_REQUEST["sector"] ?></li>
    <li>Sector Name : <?php echo $_REQUEST["label"] ?></li>
    <li>Sector Value : <?php echo $_REQUEST["value"] ?></li>
    <li>Sector Percentage : <?php echo $_REQUEST["percent"] ?>%</li>
</ul>
</div>
</body>
</html>
