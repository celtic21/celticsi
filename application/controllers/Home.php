<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$this->load->view('home/list'); //auth mhs
	}

	public function register()
	{
		//validasi input
		$valid = $this->form_validation;

		$valid->set_rules('MhsNama','MhsNim','nim','required',
			array('required'   => '%s harus diisi'));

		$valid->set_rules('email','Email','required|valid_email|is_unique[tmhs.MhsEmail]',
			array('required'   => '%s harus diisi',
				'valid_email'=> '%s tidak valid',
				'is_unique'  => '%s sudah terdaftar'));

		$valid->set_rules('password','MhsPassword','required',
			array('required' => '%s harus diisi'));

		$valid->set_rules('nohp','nohp','required|min_length[1]|max_length[13]',
			array('required'   => '%s harus diisi',
				  'min_length' => '%s minimal 11 karakter',
				  'max_length' => '%s maksimal 13 karakter'));
 

		if($valid->run()===FALSE){
		//end validasi

			$data = array(	'title'		=> 'Halaman Pendaftaran',
							'si'		=> 'Skripsi UMK'
			);
			$this->load->view('register/list', $data, FALSE);

		//masuk database
		}else{
			$i = $this->input;
			$data = array ( 
				'MhsNim'   		   	   => $i->post('nim'),
				'MhsNama'			   => $i->post('nama'),
				'MhsPassword'     	   => SHA1($i->post('password')),
				'MhsNohp'   	       => $i->post('nohp'),
				'MhsAlamat'   		   => $i->post('alamat'),
				'MhsEmail'     	       => $i->post('email'),
				'MhsStatus'		       => 0
				
			);
			$this->db->insert('tmhs', $data);
			// $this->register_model->add($data);
			redirect(base_url('home'),'refresh');
		}
	//end masuk database
	}

	public function login()
	{

		//validasi
		$this->form_validation->set_rules('nim', 'nim', 'required',
			array(	'required'	=> '%s harus diisi'));

		$this->form_validation->set_rules('password', 'Password', 'required',
			array(	'required'	=> '%s harus diisi'));

		if($this->form_validation->run())
		{
			$nim 	= $this->input->post('nim');
			$password 	= $this->input->post('password');
			//proses ke login mhs
			$this->mhs_login->login($nim,$password);
		}
		//end validasi

		$data = array ( 'title' => 'Halaman Login');
		$this->load->view('home', $data, FALSE);
	}

	public function secure()
	{
		$data = array ( 'title' 	=> 'Login',
						'si'		=> 'Skripsi UMK');
 		$this->load->view('secure/login/list', $data, FALSE);
	}

	public function logout()
	{
		$this->mhs_login->logout();
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */