<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Daftar');
		$this->load->model('M_Daerah');
		$this->load->model('M_auth');

	}

	public function index()
	{
		$data['page'] 	  = "Home";
		$data['judul'] 	  = "Home";

		//data['modal_tambah_anc'] = show_my_modal('modals/modal_tambah_anc', 'tambah-anc', $data);

		$this->load->view('Home', $data);
	}

	public function simpan()
	{
		$data = $this->input->post();
		$dataSasaran = array(
			'nik' => $data['nik'], 
			'nama' => $data['nama'], 
			'tpt_lahir' => $data['tpt_lahir'], 
			'tgl_lahir' => $data['tgl_lahir'], 
			'jenkel' => $data['jenkel'], 
			'umur' => $data['umur'], 
			'status_menikah' => $data['status_menikah'], 
			'hp' => $data['hp'], 
			'pekerjaan' => $data['pekerjaan'], 
			'prov_domisili' => $this->M_Daerah->nama_daerah('provinsi', $data['prov_domisili']), 
			'kota_domisili' => $this->M_Daerah->nama_daerah('kabupaten', $data['kota_domisili']),
			'kec_domisili' => $this->M_Daerah->nama_daerah('kecamatan', $data['kec_domisili']),
			'kel_domisili' => $this->M_Daerah->nama_daerah('kelurahan', $data['kel_domisili']),
			'rt_domisili' => $data['rt_domisili'], 
			'rw_domisili' => $data['rw_domisili'], 
			'alamat_domisili' => $data['alamat_domisili']
		);

		$cek_nik = $this->M_Daftar->cek_nik($data['nik']);
		if($cek_nik < 1)
		{
			$result = $this->M_Daftar->insert($dataSasaran);
			$result2 = $this->M_Daftar->insert_admin($data);
			if ($result > 0) {
				$this->session->set_flashdata('msg', show_succ_msg('Silakan Isi Skrining'));
				$data = $this->M_auth->login($data['nik'], $data['password']);
				$session = [
					'userdata' => $data,
					'status' => "Loged in"
				];
				$this->session->set_userdata($session);
				redirect('Dashboard/sasaran');
			} else {
				$this->session->set_flashdata('msg', show_error_msg('Gagal Tersimpan Periksa Kembali Data Anda'));
				redirect('Home/register');
			}
		} else {
			$this->session->set_flashdata('msg', show_err_msg('Anda Sudah Terdaftar Silakan Login Disini Menggunakan Nik Anda'));
			redirect('Home/login');
		}
	}

	public function skrining()
	{
		$this->load->view('skrining');
	}

	public function cek_tiket() {
		$isi = $this->input->post();
		$nik = $isi['nik'];
		$this->db->where('nik', $nik);
		$this->db->order_by('tgl_kunjungan', 'DESC');
		$this->db->limit(1);
		$data = $this->db->get('tbl_pasien');
		foreach ($data->result() as $row) {
			$data2 = array(
				'nama' => $row->nama,
				'nik' => $row->nik,
				'bpjs' => $row->bpjs,
				'alamat' => $row->alamat,
				'tgl_kunjungan' => $row->tgl_kunjungan,
				'sesi' => $row->sesi,
				'antrian' => $row->antrian,
			);
		}
		$this->load->view('cek_tiket', $data2);
	}

	public function getsesi($tgl)
	{
		$libur = $this->M_Daftar->getlibur($tgl);
		if(!empty($libur)){
			echo "<option>LIBUR</option>";
		} else {
			$sesion=$this->db->get('tbl_sesi');
			foreach($sesion->result() as $row){
				echo "<option value='{$row->sesi}'>{$row->sesi} sisa ".$this->M_Daftar->terisi($tgl, $row->sesi)."</option>";
			}
		}
	}

	public function register()
	{
		$this->load->model('M_Daerah'); 
		$data['provinsi'] = $this->M_Daerah->getProv();
		$this->load->view('register', $data);
	}

	public function login()
	{
		$this->load->view('login');
	}

}
