<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_skripsi extends CI_Controller {

	public function index()
	{
		$data = array ( 'title' 	=> 'Pendaftaran Skripsi',
 						'isi'		=> 'mhs/daftar_skripsi/list'
 					);
 		$this->load->view('mhs/layout/wrapper', $data, FALSE);
	}

}

/* End of file Daftar_skripsi.php */
/* Location: ./application/controllers/mhs/Daftar_skripsi.php */