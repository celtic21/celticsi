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

		public function proses_dskripsi()
	{
		
		$config['upload_path'] = './assets/upload/pendaftaran/skripsi';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']  = '2000';
		$config['max_width']  = '2000';
		$config['max_height']  = '2000';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('krs')){

		$data = array ( 'title' 	=> 'Pendaftaran Skripsi',
						'error'		=> $this->upload->display_errors(),
 						'isi'		=> 'mhs/pendaftaran/daftar_skripsi'
 					);
 		$this->load->view('mhs/layout/wrapper', $data, FALSE);
			
		//jika benar	
		}else{
		$upload_gambar = array('upload_data' => $this->upload->data());




 		$i = $this->input;
	// echo "<pre>";
 // 		print_r ($upload_gambar);
 // 		exit();
		$data = array ( 
						'DaftarsId'     => $this->session->userdata('MhsNim'),
						'DaftarsFileKrs'     => $upload_gambar['upload_data']['file_name'],
						'DaftarsFileSlip'     => $i->post('slip'),
						'DaftarsFileTranskrip'    => $i->post('skrip')
					  );
		echo "<pre>";
		print_r ($data);
		exit();
		}
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