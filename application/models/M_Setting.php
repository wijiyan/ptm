<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_setting extends CI_Model {
	public function select_all() {
		$this->db->order_by('id', 'ASC');
		$data = $this->db->get('tbl_sesi');

		return $data->result();
	}

	public function delete($id) {
		$this->db->delete('tbl_sesi', array('id' => $id));

		return $this->db->affected_rows();
	}

	public function select_by_id($id) {
		$data = $this->db->get_where('tbl_sesi', array('id' => $id));

		return $data->row();
	}

	public function insert($data) {
		$this->db->insert('tbl_sesi', $data);
		return $this->db->affected_rows();
	}

	public function update($data) {

		$this->db->where("id", $data['id']);
		$this->db->update("tbl_sesi", $data);

		return $this->db->affected_rows();
	}

	public function tgl_indo($tanggal, $cetak_hari = true)
	{
		$hari = array ( 1 =>    'Senin',
			'Selasa',
			'Rabu',
			'Kamis',
			'Jumat',
			'Sabtu',
			'Minggu'
		);

		$bulan = array (1 =>   'Januari',
			'Februari',
			'Maret',
			'April',
			'Mei',
			'Juni',
			'Juli',
			'Agustus',
			'September',
			'Oktober',
			'November',
			'Desember'
		);
		$split    = explode('-', $tanggal);
		$tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];

		if ($cetak_hari) {
			$num = date('N', strtotime($tanggal));
			return $hari[$num] . ', ' . $tgl_indo;
		}
		return $tgl_indo;
	}

	public function conv($angka){
		if($angka == '1'){
			return 'YA';
		} else if($angka == '0'){
			return 'TIDAK';
		}
	}
}
