<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Dashboard extends CI_Model {

	public function counter($table) {
		$data = $this->db->get($table);
		return $data->num_rows();
	}

	public function hari_ini() {
		$this->db->where('tgl_kunjungan', date('Y-m-d'));
		$data = $this->db->get('tbl_sasaran');
		return $data->num_rows();
	}

	public function total_sasaran() {
		$data = $this->db->get('tbl_sasaran');
		return $data->num_rows();
	}

	public function skrining() {
		$data = $this->db->get('tbl_pemeriksaan');
		return $data->num_rows();
	}
}
