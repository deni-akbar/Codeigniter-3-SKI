<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pameran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('quota_model');
		$this->load->model('antrian_model');
		$this->load->model('stand_model');
		$this->load->library('form_validation');
		$this->load->library('session');
	
	}

	public function index()
	{
		$data['quota'] = $this->quota_model->get_all_data();
		$data['antrian'] = $this->antrian_model->get_all_data();
		$data['stand'] = $this->stand_model->get_all_data();

		$this->load->view('dashboard',$data);
	}

	public function tambah()
	{
		$data['stand'] = $this->stand_model->get_all_data();
		$this->load->view('tambah',$data);
	}

	public function tambahSave()
	{
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('kd_stand','Kode Stand','required');
		$this->form_validation->set_rules('tanggal_pesan','Tanggal Pesan','required');

		$insert=false;

		if($this->form_validation->run() != FALSE)
		{
			$total_kuota_lk= $this->quota_model->get_lk_data()->jumlah;
			$total_kuota_ft= $this->quota_model->get_ft_data()->jumlah;
			$total_daily_lk= count($this->antrian_model->get_total_lk());
			$total_daily_ft= count($this->antrian_model->get_total_ft());

			if($this->input->post('kd_stand')=='FT'){
				if($total_kuota_ft<=$total_daily_ft){
					$this->session->set_flashdata('err', "Pemesanan stand foto telah melebihi batas pemesanan hari ini, silahkan pilih hari lain");
					return $this->tambah();
				}
				$check_ft= $this->antrian_model->get_exist_email_ft();
				if($check_ft){
					$this->session->set_flashdata('err', "Email sudah ada pada pemesanan hari ini");
					return $this->tambah();
					
				}
			}else{
				if($total_kuota_lk<=$total_daily_lk){
					$this->session->set_flashdata('err', "Pemesanan stand lukis telah melebihi batas pemesanan hari ini, silahkan pilih hari lain");
					return $this->tambah();
				}
				$check_lk= $this->antrian_model->get_exist_email_lk();
				if($check_lk){
					$this->session->set_flashdata('err', "Email sudah ada pada pemesanan hari ini");
					return $this->tambah();
					
				}
			}
			$insert= $this->antrian_model->tambah();
		}else{
			return $this->tambah();
			
		}

		if($insert!=FALSE){
			$this->session->set_flashdata('success', "Success ditambahkan");
		}
		$this->tambah();
		

	}

	public function importPDF(){
		{
			// panggil library yang kita buat sebelumnya yang bernama pdfgenerator
			$this->load->library('pdfgenerator');
			$no_urut=$this->input->get('no_urut');
			// title dari pdf
			$this->data['title_pdf'] = 'File No Urut';
			$this->data['no_urut'] = $no_urut;
			// filename dari pdf ketika didownload
			$file_pdf = "file_no_urut_$no_urut";
			// setting paper
			$paper = 'A4';
			//orientasi paper potrait / landscape
			$orientation = "portrait";
			
			$html = $this->load->view('pdf_no_urut',$this->data, true);	    
			
			// run dompdf
			$this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
		}
	}
}
