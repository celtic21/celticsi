<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function index()
	{
		$data = array ( 'title' 	=> 'Data Diri',
 						'isi'		=> 'mhs/profil/list'
 					);
 		$this->load->view('mhs/layout/wrapper', $data, FALSE);
	}

	public function edit_pass()
	{
		$data = array ( 'title' 	=> 'Data Diri',
 						'isi'		=> 'mhs/profil/list'
 					);
 		$this->load->view('mhs/layout/wrapper', $data, FALSE);
	}

}

/* End of file Profil.php */
/* Location: ./application/controllers/mhs/Profil.php */