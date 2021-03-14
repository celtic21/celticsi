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
		$data = array ( 'title' 	=> 'Pendaftaran',
						'si'		=> 'Skripsi UMK');
 		$this->load->view('register/list', $data, FALSE);
	}

}

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */