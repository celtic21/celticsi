<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mhs_login
{
	protected $CI;

	public function __construct()
	{
        $this->CI =& get_instance();

        //load model
        $this->CI->load->model('login_model');
	}

	//fungsi login
	public function login($nim,$password)
	{
		$cek = $this->CI->login_model->mhs_login($nim,$password);
		//jika ada data user, maka buat session login
		if($cek) {
			$nim		= $cek->MhsNim;
			$nama		= $cek->MhsNama;
			$nohp		= $cek->MhsNohp;
			$email		= $cek->MhsEmail;
			//buat session
			$this->CI->session->set_userdata('MhsNim',$nim);
			$this->CI->session->set_userdata('MhsNama',$nama);
			$this->CI->session->set_userdata('MhsNohp',$nohp);
			$this->CI->session->set_userdata('MhsEmail',$email);
			//redirek ke dasbor
			redirect(base_url('mhs/dasbor'),'refresh');
		}else{
			//jika tidak ada data
			$this->CI->session->set_flashdata('salah', 'Username Atau Password salah');
			redirect(base_url('home'),'refresh');
		}
	}
	
	//fungsi cek login
	public function cek_login()
	{
		//periksa apakah session sudah ada atau belum
		if ($this->CI->session->userdata('MhsNim') == "") 
		{
			$this->CI->session->set_flashdata('relog', 'Anda Belum Login');
			redirect(base_url('home'),'refresh');
		}

	}

	//fungsi logout
	public function logout()
	{
		$this->CI->session->unset_userdata('MhsNim');
		$this->CI->session->unset_userdata('MhsNama');
		$this->CI->session->unset_userdata('MhsNohp');
		$this->CI->session->unset_userdata('MhsEmail');
		//redirek login
		$this->CI->session->set_flashdata('logout', 'Anda Berhasil Logout');
		redirect(base_url('home'),'refresh');
	}


}

/* End of file Login_user */
/* Location: ./application/libraries/Login_user */
