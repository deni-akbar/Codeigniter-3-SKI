<?php

class Quota_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function get_all_data()
	{
		$query = $this->db->get('tbl_quota_stand');
		return $query->result();
	}

	public function get_lk_data()
	{
		$this->db->where('kd_stand', "LK");
		$query = $this->db->get('tbl_quota_stand');
		return $query->row();
	}

	public function get_ft_data()
	{
		$this->db->where('kd_stand', "FT");
		$query = $this->db->get('tbl_quota_stand');
		return $query->row();
	}

}

?>