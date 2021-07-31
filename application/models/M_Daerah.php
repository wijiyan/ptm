<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Daerah extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

	public function getProv()
	{
    $sql="SELECT * FROM provinsi";
    $query=$this->db->query($sql);
    return $query->result();
	}

	public function getKab($id_prov)
	{
	  $sql="SELECT * FROM kabupaten WHERE id_prov={$id_prov} ORDER BY nama";
	  $query=$this->db->query($sql);
    return $query->result();
	}

	public function getKec($id_kab)
	{
	  $sql="SELECT * FROM kecamatan WHERE id_kab={$id_kab} ORDER BY nama";
	  $query=$this->db->query($sql);
    return $query->result();
	}

	public function getKel($id_kec)
	{
	  $sql="SELECT * FROM kelurahan WHERE id_kec={$id_kec} ORDER BY nama";
	  $query=$this->db->query($sql);
    return $query->result();
	}

	public function nama_daerah($data, $kode){
		if($data == 'provinsi'){
			$prov = $this->db->get_where('provinsi', array('id_prov' => $kode));
			foreach ($prov->result() as $row) {
				return $row->nama;
			}
		}else if($data == 'kabupaten'){
			$prov = $this->db->get_where('kabupaten', array('id_kab' => $kode));
			foreach ($prov->result() as $row) {
				return $row->nama;
			}
		}else if($data == 'kecamatan'){
			$prov = $this->db->get_where('kecamatan', array('id_kec' => $kode));
			foreach ($prov->result() as $row) {
				return $row->nama;
			}
		}else if($data == 'kelurahan'){
			$prov = $this->db->get_where('kelurahan', array('id_kel' => $kode));
			foreach ($prov->result() as $row) {
				return $row->nama;
			}
		}
	}
}
