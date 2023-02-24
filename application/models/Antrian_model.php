<?php

class Antrian_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_all_data()
	{
		$query = $this->db->get('tbl_antri_stand');
		return $query->result();
	}

	public function get_exist_email_ft()
	{
		$this->db->where('email', $this->input->post('email'));
		$this->db->where('kd_stand', "FT");
		$this->db->where('tanggal_pesan', $this->input->post('tanggal_pesan'));
		$query = $this->db->get('tbl_antri_stand');
		return $query->row();
	}

	public function get_exist_email_lk()
	{
		$this->db->where('email', $this->input->post('email'));
		$this->db->where('kd_stand', "LK");
		$this->db->where('tanggal_pesan', $this->input->post('tanggal_pesan'));
		$query = $this->db->get('tbl_antri_stand');
		return $query->row();
	}

	public function get_total_lk()
	{
		$this->db->where('kd_stand', "LK");
		$this->db->where('tanggal_pesan', $this->input->post('tanggal_pesan'));
		$query = $this->db->get('tbl_antri_stand');
		return $query->result();
	}

	public function get_total_ft()
	{
		$this->db->where('kd_stand', "FT");
		$this->db->where('tanggal_pesan', $this->input->post('tanggal_pesan'));
		$query = $this->db->get('tbl_antri_stand');
		return $query->result();
	}
	
	public function tambah()
	{
		if($this->input->post('kd_stand')=='FT'){
			$last_no=sprintf("%03d", count($this->get_total_ft())+1);
			$no_urut= "FT".date('Ymd').$last_no;
		}else{
			$last_no=sprintf("%03d", count($this->get_total_lk())+1);
			$no_urut= "LK".date('Ymd').$last_no;

		}

		$data = [
					'kd_stand' => $this->input->post('kd_stand'),
					'nama' => $this->input->post('nama'),
					'email' => $this->input->post('email'),
					'tanggal_pesan' => $this->input->post('tanggal_pesan'),
					'no_antri' => $no_urut,
				];

		return $this->db->insert('tbl_antri_stand', $data);
	}
}

?>