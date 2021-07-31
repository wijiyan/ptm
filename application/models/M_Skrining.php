<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Skrining extends CI_Model {

    public function select_all() {
        $data = $this->db->query('SELECT * FROM
            tbl_pemeriksaan
            INNER JOIN tbl_sasaran ON tbl_pemeriksaan.nik = tbl_sasaran.nik');

        return $data->result();
    }

    public function select_all_sasaran() {
        $data = $this->db->query('SELECT * FROM
            tbl_pemeriksaan
            INNER JOIN tbl_sasaran ON tbl_pemeriksaan.nik = tbl_sasaran.nik
            WHERE tbl_sasaran.nik = "'.$this->userdata->username.'"');

        return $data->result();
    }

    public function select_all_bulan_ini() {
        $data = $this->db->query('SELECT * FROM
            tbl_pemeriksaan
            INNER JOIN tbl_sasaran ON tbl_pemeriksaan.nik = tbl_sasaran.nik
            WHERE MONTH(tgl_pemeriksaan) = "'.date('m').'"');

        return $data->result();
    }


    public function select_by_id($id) {
        $data = $this->db->get_where('tbl_pemeriksaan', array('id_pemeriksaan' => $id));

        return $data->row();
    }

    public function cek_nik($nik) {
        $this->db->where('nik', $nik);
        $data = $this->db->get('tbl_skrining');

        return $data->num_rows();
    }

    public function update($data) {
        $this->db->update('tbl_pemeriksaan', $data, array('id_pemeriksaan' => $data['id']));
        return $this->db->affected_rows();
    }

    public function delete($id) {
        $this->db->delete('tbl_pemeriksaan', array('id_pemeriksaan' => $id));

        return $this->db->affected_rows();
    }

    public function insert($data) {
        $this->db->insert('tbl_pemeriksaan', $data);
        return $this->db->affected_rows();
    }

}
