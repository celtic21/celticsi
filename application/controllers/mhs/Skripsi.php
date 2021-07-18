<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skripsi extends CI_Controller {

	public function index()
	{
		
	}

	public function Judul_skripsi()
	{
		$data = array ( 'title' 	=> 'Pengajuan Judul',
 						'isi'		=> 'mhs/skripsi/judul_skripsi'
 					);
 		$this->load->view('mhs/layout/wrapper', $data, FALSE);
	}

}

/* End of file Skripsi.php */
/* Location: ./application/controllers/mhs/Skripsi.php */