<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan_judul extends CI_Controller {

	public function index()
	{
		$data = array ( 'title' 	=> 'Pengajuan Judul',
 						'isi'		=> 'mhs/Pengajuan_judul/list'
 					);
 		$this->load->view('mhs/layout/wrapper', $data, FALSE);
	}

}

/* End of file Pengajuan_judul.php */
/* Location: ./application/controllers/mhs/Pengajuan_judul.php */