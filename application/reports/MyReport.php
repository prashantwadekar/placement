<?php
//MyReport.php
require APPPATH."/libraries/koolreport/core/autoload.php";
class MyReport extends \koolreport\KoolReport
{
    use \koolreport\clients\Bootstrap;
    function settings()
    {
        return array(
            "assets"=>array(
                "path"=>"../../assets",
                "url"=>"Assets",
            ),
            "dataSources"=>array(
                "studentcreate_master"=>array(
                    "connectionString"=>"mysql:host=localhost;dbname=placement_db",
                    "username"=>"root",
                    "password"=>"localhost",
                    "charset"=>"utf8"
                )
            )
        );
    }
    function setup()
    {
        $this->src('studentcreate_master')
        ->query("Select * from studentcreate_master")
        ->pipe($this->dataStore("studentcreate_master"));
    }
}