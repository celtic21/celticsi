<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends CI_Controller {

	public function index()
	{
		$data = array ( 'title' 	=> 'Halaman Utama',
 						'isi'		=> 'mhs/dasbor/list'
 					);
 		$this->load->view('mhs/layout/wrapper', $data, FALSE);
	}

}

/* End of file Dasbor.php */
/* Location: ./application/controllers/mahasiswa/Dasbor.php */