<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

	public function daftar_skripsi()
	{
		$data = array ( 'title' 	=> 'Pendaftaran Skripsi',
 						'isi'		=> 'mhs/pendaftaran/daftar_skripsi'
 					);
 		$this->load->view('mhs/layout/wrapper', $data, FALSE);
	}

	public function daftar_seminar()
	{
		$data = array ( 'title' 	=> 'Pendaftaran Skripsi',
 						'isi'		=> 'mhs/pendaftaran/daftar_skripsi'
 					);
 		$this->load->view('mhs/layout/wrapper', $data, FALSE);
	}

	public function daftar_sidang()
	{
		$data = array ( 'title' 	=> 'Pendaftaran Skripsi',
 						'isi'		=> 'mhs/pendaftaran/daftar_skripsi'
 					);
 		$this->load->view('mhs/layout/wrapper', $data, FALSE);
	}

}

/* End of file Pendaftaran.php */
/* Location: ./application/controllers/mhs/Pendaftaran.php */