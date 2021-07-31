<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends Auth_Controller {
	public function index()
	{
		$data['userdata'] 	= $this->userdata;

		$data['page'] 		= "Laporan";
		$data['judul'] 		= "Laporan";

		$this->template->views('Laporan', $data);
	}
}
