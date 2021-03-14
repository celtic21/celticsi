<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('register_model');
	}

	public function index()
	{
		$data = array ( 'title' 	=> 'Halaman Pendaftaran',
 						'isi'		=> 'register/list'
 					);
 		$this->load->view('register/layout/wrapper', $data, FALSE);
	}

}

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */