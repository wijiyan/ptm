<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_admin');
		$this->load->model('M_Dashboard');
	}

	public function index() {
		$data['userdata'] 	= $this->userdata;
		$data['total_sasaran']  = $this->M_Dashboard->total_sasaran();
		//$data['sakit'] 		= $this->M_Dashboard->sakit();
		//$data['sehat'] 		= $this->M_Dashboard->sehat();
		// $data['emergency'] 	= $this->M_Dashboard->kondisi('emergency');
		// $data['urgent']  	= $this->M_Dashboard->kondisi('urgent');
		// $data['elektif']	= $this->M_Dashboard->kondisi('elektif');

		$data['page'] 				= "Dashboard";
		$data['judul'] 				= "Dashboard";
		$this->template->views('dashboard', $data);
	}

	public function sasaran() {
		$data['userdata'] 	= $this->userdata;
		//$data['hari_ini']  	= $this->M_Dashboard->hari_ini();
		//$data['sakit'] 		= $this->M_Dashboard->sakit();
		//$data['sehat'] 		= $this->M_Dashboard->sehat();
		// $data['emergency'] 	= $this->M_Dashboard->kondisi('emergency');
		// $data['urgent']  	= $this->M_Dashboard->kondisi('urgent');
		// $data['elektif']	= $this->M_Dashboard->kondisi('elektif');

		$data['page'] 				= "Dashboard-sasaran";
		$data['judul'] 				= "Dashboard";
		$this->template->views('dashboard-sasaran', $data);
	}

}
