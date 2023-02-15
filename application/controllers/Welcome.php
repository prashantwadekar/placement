<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH."/reports/MyReport.php";

class Welcome extends CI_Controller {

	public function index()
	{
		$report = new MyReport;
		$report->run()->render();
	}
}