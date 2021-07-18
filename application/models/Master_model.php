<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function listing_dosen()
	{
		$this->db->select('*');
		$this->db->from('tdosen');
		$this->db->order_by('DosenId', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

		public function listing_mhs()
	{
		$this->db->select('*');
		$this->db->from('tmhs');
		$this->db->order_by('MhsNim', 'desc');
		$query = $this->db->get();
		return $query->result();
	}
	

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */