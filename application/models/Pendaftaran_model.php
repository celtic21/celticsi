<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function daftar_skripsi()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->order_by('id', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

}

/* End of file Pendaftaran_model.php */
/* Location: ./application/models/Pendaftaran_model.php */