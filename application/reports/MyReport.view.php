<?php
    //MyReport.view.php
    use \koolreport\widgets\koolphp\Table;
?>
<html>
    <head>
        <title>Student Report</title></title>
    </head>
    <body>
        <h1>MyReport</h1>
        <h3>List all Studnets</h3>
        <?php
        Table::create(array(
            "dataStore"=>$this->dataStore("studentcreate_master"),
            "class"=>array(
                "table"=>"table table-hover"
            )
        ));
        ?>
    </body>
</html>