<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Login_model extends CI_Model {

	// login 
	public function mhs_login($nim,$password)
	{
		$this->db->select('*');
		$this->db->from('tmhs');
		$this->db->where(array('MhsNim' => $nim,
							   'MhsPassword' => sha1($password)));
		$this->db->order_by('MhsNim','desc');
		$query = $this->db->get();
		return $query->row();
	}

	public function secure_login($username,$password)
	{
		$this->db->select('*');
		$this->db->from('tdosen');
		$this->db->where(array('username' => $username,
							   'password' => sha1($password)));
		$this->db->order_by('id','desc');
		$query = $this->db->get();
		return $query->row();
	}

}

/* End of file Login_model */
/* Location: ./application/models/Login_model */