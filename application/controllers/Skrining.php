<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skrining extends Auth_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_Skrining');
		$this->load->model('M_Daerah'); 
		$this->load->model('M_Sasaran'); 
		$this->load->model('M_Setting'); 
	}
	
	public function index() {
		$data['userdata'] 	= $this->userdata;
		$data['provinsi'] = $this->M_Daerah->getProv();

		$data['page'] 		= "Skrining";
		$data['judul'] 		= "Data Skrining";

		$data['modal_tambah_skrining'] = show_my_modal('modals/modal_tambah_skrining', 'tambah-skrining', $data);

		$this->template->views('Skrining/skrining', $data);

	}

	public function tampil() {
		$data['dataSkrining'] = $this->M_Skrining->select_all();
		$this->load->view('Skrining/list_data', $data);
	}

	public function tampil_sasaran() {
		$data['dataSkrining'] = $this->M_Skrining->select_all_sasaran();
		$this->load->view('Skrining/list_data', $data);
	}

	public function delete() {
		$id = $_POST['id'];
		$result = $this->M_Skrining->delete($id);

		if ($result > 0) {
			echo show_succ_msg('Data Skrining Berhasil dihapus');
		} else {
			echo show_err_msg('Data Skrining Gagal dihapus'); 
		}
	}

	public function Simpan() {
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

		$dataPemeriksaan = array(
			'nik' => $data['nik'], 
			'tgl_pemeriksaan' => $data['tgl_pemeriksaan'], 
			'tpt_pemeriksaan' => $data['tpt_pemeriksaan'], 
			'hipertensi_k' => $data['hipertensi_k'], 
			'dm_k' => $data['dm_k'], 
			'jantung_k' => $data['jantung_k'], 
			'benjolan_payudara_k' => $data['benjolan_payudara_k'], 
			'stroke_k' => $data['stroke_k'], 
			'asma_k' => $data['asma_k'], 
			'hipertensi_s' => $data['hipertensi_s'], 
			'dm_s' => $data['dm_s'], 
			'jantung_s' => $data['jantung_s'], 
			'benjolan_payudara_s' => $data['benjolan_payudara_s'], 
			'stroke_s' => $data['stroke_s'], 
			'asma_s' => $data['asma_s'], 
			'kolesterol' => $data['kolesterol'], 
			'merokok' => $data['merokok'], 
			'krg_aktf_fisik' => $data['krg_aktf_fisik'], 
			'krg_sayur' => $data['krg_sayur'], 
			'alkohol' => $data['alkohol'], 
			'gula_berlebih' => $data['gula_berlebih'], 
			'garam_berlebih' => $data['garam_berlebih'], 
			'lemak_berlebih' => $data['lemak_berlebih'], 
			'sistol' => $data['sistol'], 
			'diastol' => $data['diastol'], 
			'tb' => $data['tb'], 
			'bb' => $data['bb'], 
			'lingkar_perut' => $data['lingkar_perut'], 
			'gds' => $data['gds'], 
			'benjolan_payudara' => $data['benjolan_payudara'], 
			'g_mt_kanan' => $data['g_mt_kanan'], 
			'g_mt_kiri' => $data['g_mt_kiri'], 
			'g_telinga_kanan' => $data['g_telinga_kanan'], 
			'g_telinga_kiri' => $data['g_telinga_kiri']
		);

		$dataAdmin = array(
			'username' => $data['nik'],
			'nama' => $data['nama'],
			'password' => '123456',
			'foto' => 'user_01.jpg',
			'level' => 'sasaran'
		);

		$nik = $data['nik'];
		$cek_nik = $this->M_Sasaran->cek_nik($nik);
		if(empty($cek_nik))
		{
			$this->M_admin->insert($dataAdmin);
			$this->M_Sasaran->insert($dataSasaran);
		}

		$result = $this->M_Skrining->insert($dataPemeriksaan);

		if ($result > 0) {
			$out['status'] = '';
			$out['msg'] = show_succ_msg('Data Skrining Berhasil ditambahkan');
		} else {
			$out['status'] = '';
			$out['msg'] = show_err_msg('Data Skrining Gagal ditambahkan');
		}

		echo json_encode($out);
	}

	public function SimpandariSasaran() {
		$data = $this->input->post();

		$dataPemeriksaan = array(
			'nik' => $this->userdata->username, 
			'tgl_pemeriksaan' => $data['tgl_pemeriksaan'], 
			'tpt_pemeriksaan' => $data['tpt_pemeriksaan'], 
			'hipertensi_k' => $data['hipertensi_k'], 
			'dm_k' => $data['dm_k'], 
			'jantung_k' => $data['jantung_k'], 
			'benjolan_payudara_k' => $data['benjolan_payudara_k'], 
			'stroke_k' => $data['stroke_k'], 
			'asma_k' => $data['asma_k'], 
			'hipertensi_s' => $data['hipertensi_s'], 
			'dm_s' => $data['dm_s'], 
			'jantung_s' => $data['jantung_s'], 
			'benjolan_payudara_s' => $data['benjolan_payudara_s'], 
			'stroke_s' => $data['stroke_s'], 
			'asma_s' => $data['asma_s'], 
			'kolesterol' => $data['kolesterol'], 
			'merokok' => $data['merokok'], 
			'krg_aktf_fisik' => $data['krg_aktf_fisik'], 
			'krg_sayur' => $data['krg_sayur'], 
			'alkohol' => $data['alkohol'], 
			'gula_berlebih' => $data['gula_berlebih'], 
			'garam_berlebih' => $data['garam_berlebih'], 
			'lemak_berlebih' => $data['lemak_berlebih'], 
			'sistol' => $data['sistol'], 
			'diastol' => $data['diastol'], 
			'tb' => $data['tb'], 
			'bb' => $data['bb'], 
			'lingkar_perut' => $data['lingkar_perut'], 
			'gds' => $data['gds'], 
			'benjolan_payudara' => $data['benjolan_payudara'], 
			'g_mt_kanan' => $data['g_mt_kanan'], 
			'g_mt_kiri' => $data['g_mt_kiri'], 
			'g_telinga_kanan' => $data['g_telinga_kanan'], 
			'g_telinga_kiri' => $data['g_telinga_kiri']
		);

		$result = $this->M_Skrining->insert($dataPemeriksaan);

		if ($result > 0) {
			$out['status'] = '';
			$out['msg'] = show_succ_msg('Data Skrining Berhasil ditambahkan');
		} else {
			$out['status'] = '';
			$out['msg'] = show_err_msg('Data Skrining Gagal ditambahkan');
		}
		echo json_encode($out);
	}

	public function update() {
		$id = trim($_POST['id']);
		$data['dataSkrining'] = $this->M_Skrining->select_by_id($id);

		echo show_my_modal('modals/modal_update_skrining', 'update-skrining', $data);
	}

	public function prosesUpdate() {
		$this->form_validation->set_rules('nama', 'Nama Skrining', 'trim|required');

		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {

			$result = $this->M_Skrining->update($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Data Skrining Berhasil dirubah');
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Data Skrining Gagal dirubah');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_val(validation_errors());
		}
		echo json_encode($out);
	}

	public function cari(){
		$nik=$_GET['nik'];
		$cari =$this->M_autocomplete->cari($nik)->result();
		echo json_encode($cari);
	} 

	public function export_excel(){
		$data = $this->M_Skrining->select_all_bulan_ini();

		error_reporting(E_ALL);

		include_once './assets/phpexcel/Classes/PHPExcel.php';
		$objPHPExcel = new PHPExcel();
		$objPHPExcel->setActiveSheetIndex(0);

		$current_col = 0;
		$current_row = 1;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'no');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'nik');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'nama');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'tpt_lahir');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'tgl_lahir');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'jenkel');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'umur');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'status_menikah');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'hp');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'pekerjaan');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'prov_domisili');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'kota_domisili');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'kec_domisili');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'kel_domisili');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'rt_domisili');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'rw_domisili');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'alamat_domisili');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'tgl_pemeriksaan');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'tpt_pemeriksaan');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'hipertensi_k');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'dm_k');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'jantung_k');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'benjolan_payudara_k');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'stroke_k');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'asma_k');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'hipertensi_s');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'dm_s');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'jantung_s');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'benjolan_payudara_s');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'stroke_s');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'asma_s');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'kolesterol');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'merokok');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'krg_aktf_fisik');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'krg_sayur');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'alkohol');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'gula_berlebih');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'garam_berlebih');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'lemak_berlebih');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'sistol');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'diastol');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'tb');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'bb');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'lingkar_perut');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'gds');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'benjolan_payudara');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'g_mt_kanan');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'g_mt_kiri');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'g_telinga_kanan');
		$current_col++;
		$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row,'g_telinga_kiri');
		$current_col++;



		$current_col = 0;
		$current_row = 2;
		$no = 1;
		foreach($data as $row){
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $no++);
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, '\''.$row->nik, PHPExcel_Cell_DataType::TYPE_STRING);
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $row->nama);
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $row->tpt_lahir);
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $row->tgl_lahir);
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $row->jenkel);
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $row->umur);
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $row->status_menikah);
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, '\''.$row->hp, PHPExcel_Cell_DataType::TYPE_STRING);
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $row->pekerjaan);
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $row->prov_domisili);
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $row->kota_domisili);
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $row->kec_domisili);
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $row->kel_domisili);
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $row->rt_domisili);
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $row->rw_domisili);
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $row->alamat_domisili);
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $row->tgl_pemeriksaan);
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $row->tpt_pemeriksaan);
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $this->M_Setting->conv($row->hipertensi_k));
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $this->M_Setting->conv($row->dm_k));
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $this->M_Setting->conv($row->jantung_k));
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $this->M_Setting->conv($row->benjolan_payudara_k));
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $this->M_Setting->conv($row->stroke_k));
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $this->M_Setting->conv($row->asma_k));
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $this->M_Setting->conv($row->hipertensi_s));
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $this->M_Setting->conv($row->dm_s));
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $this->M_Setting->conv($row->jantung_s));
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $this->M_Setting->conv($row->benjolan_payudara_s));
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $this->M_Setting->conv($row->stroke_s));
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $this->M_Setting->conv($row->asma_s));
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $this->M_Setting->conv($row->kolesterol));
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $this->M_Setting->conv($row->merokok));
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $this->M_Setting->conv($row->krg_aktf_fisik));
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $this->M_Setting->conv($row->krg_sayur));
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $this->M_Setting->conv($row->alkohol));
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $this->M_Setting->conv($row->gula_berlebih));
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $this->M_Setting->conv($row->garam_berlebih));
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $this->M_Setting->conv($row->lemak_berlebih));
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $row->sistol);
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $row->diastol);
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $row->tb.' Cm');
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $row->bb.' Kg');
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $row->lingkar_perut.' Cm');
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $row->gds);
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $this->M_Setting->conv($row->benjolan_payudara));
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $this->M_Setting->conv($row->g_mt_kanan));
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $this->M_Setting->conv($row->g_mt_kiri));
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $this->M_Setting->conv($row->g_telinga_kanan));
			$current_col++;
			$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($current_col, $current_row, $this->M_Setting->conv($row->g_telinga_kiri));
			$current_col++;

            //move to next row
			$current_row++;
            //reset column back to A
			$current_col = 0;

		}


		header("Content-Type:application/vnd.ms-excel");
		$judul = date('d m Y');
		header("Content-Disposition:attachment;filename=".$judul.".xlsx");

		$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
		$objWriter->save('php://output');
	}

}
