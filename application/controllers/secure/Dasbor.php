
<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Dasbor extends CI_Controller {
 
	public function index()
 	{
 		$data = array ( 'title' 	=> 'Halaman Utama',
 						'isi'		=> 'secure/dasbor/list'
 					);
 		$this->load->view('secure/layout/wrapper', $data, FALSE);
 	}

 	public function dosen()
 	{
 		$data = array ( 'title' 	=> 'Halaman Utama',
 						'isi'		=> 'secure/dasbor/dosen'
 					);
 		$this->load->view('secure/layout/wrapper', $data, FALSE);
 	}

 	public function koordinator()
 	{
 		$data = array ( 'title' 	=> 'Halaman Utama',
 						'isi'		=> 'secure/dasbor/koordinator'
 					);
 		$this->load->view('secure/layout/wrapper', $data, FALSE);
 	}

 	public function operator()
 	{
 		$data = array ( 'title' 	=> 'Halaman Utama',
 						'isi'		=> 'secure/dasbor/operator'
 					);
 		$this->load->view('secure/layout/wrapper', $data, FALSE);
 	}

 	public function kaprodi()
 	{
 		$data = array ( 'title' 	=> 'Halaman Utama',
 						'isi'		=> 'secure/dasbor/kaprodi'
 					);
 		$this->load->view('secure/layout/wrapper', $data, FALSE);
 	}


 }
 
