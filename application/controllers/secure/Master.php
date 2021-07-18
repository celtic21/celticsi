<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('master_model');
	}

	public function index()
	{
		$data = array ( 'title' 	=> 'Halaman Utama',
 						'isi'		=> 'secure/master/dosen'
 					);
 		$this->load->view('secure/layout/wrapper', $data, FALSE);
	}

	public function dosen()
	{
		$dosen = $this->master_model->listing_dosen();

		$data = array(	'title' 	=> 'Data Dosen',
						'dosen'		=> $dosen,
						'isi'		=> 'secure/master/dosen'
					 );
		$this->load->view('secure/layout/wrapper', $data, FALSE);
	}

	public function operator()
	{
		$data = array ( 'title' 	=> 'Data Operator',
 						'isi'		=> 'secure/master/operator'
 					);
 		$this->load->view('secure/layout/wrapper', $data, FALSE);
	}

	public function mahasiswa()
	{
		$mhs = $this->master_model->listing_mhs();

		$data = array(	'title' 	=> 'Data Mahasiswa',
						'mhs'		=> $mhs,
						'isi'		=> 'secure/master/mahasiswa'
					 );
		$this->load->view('secure/layout/wrapper', $data, FALSE);
	}



}

/* End of file Master.php */
/* Location: ./application/controllers/secure/Master.php */