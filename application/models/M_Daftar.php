<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Daftar extends CI_Model {

    public function select_all() {
        $this->db->order_by('id', 'DESC');
        $data = $this->db->get('tbl_anc');

        return $data->result();
    }

    public function select_by_id($id) {
        $data = $this->db->get_where('tbl_anc', array('id' => $id));

        return $data->row();
    }

    public function cek_nik($nik) {
        $this->db->where('nik', $nik);
        $data = $this->db->get('tbl_sasaran');

        return $data->num_rows();
    }

    public function antrian($tgl, $sesi) {
        $this->db->where('tgl_kunjungan', $tgl);
        $this->db->where('sesi', $sesi);
        $data = $this->db->get('tbl_pasien');

        return $data->num_rows();
    }
    
    public function insert($data) {
        $this->db->insert('tbl_sasaran', $data);
        return $this->db->affected_rows();
    }

    public function insert_admin($data) {
        $isi = array(
            'username' => $data['nik'],
            'nama' => $data['nama'],
            'password' => MD5($data['password']),
            'foto' => 'user_01.jpg',
            'level' => 'sasaran'
        );
        $this->db->insert('admin', $isi);
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

}
