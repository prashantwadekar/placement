<!DOCTYPE html>
<html>
<head>
    <title>ChartDirector 7.0 Sample Programs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        html, body { overflow:hidden; margin:0px; padding:0px; height:100%; }
        .frame_container { width:100%; height:100%; -webkit-overflow-scrolling:touch; overflow:auto; }
        iframe { box-sizing:border-box; border:0px; width:100%; height:100%; margin:0px; padding:0px; display:block; }
        td { padding:0px; }
    </style>
</head>
<body>
    <table border="1" style="height:100%; width:100%; border-spacing:0px;">
        <tr>
            <td colspan="2" style="height:20px;">
                <iframe id="indextop" style="overflow:hidden;" src="indextop.php"></iframe>
            </td>
        </tr>
        <tr>
            <td style="height:100%;width:240px;">
                <div class="frame_container">
                    <iframe id="indexleft" src="indexleft.php"></iframe>
                </div>
            </td>
            <td style="height:100%;">
                <div class="frame_container">
                    <iframe name="indexright" src="indexright.php"></iframe>
                </div>
            </td>
    </table>
</body>
</html>
