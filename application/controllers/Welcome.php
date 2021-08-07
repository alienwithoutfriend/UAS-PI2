<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$data['allprofil'] = $this->Home_Model->profile();
		$data['allpendidikan'] = $this->Home_Model->pendidikan();
		$data['allpengalaman'] = $this->Home_Model->pengalaman();
		$this->load->view('index', $data);
	}

	public function ToLogin()
	{
		$this->load->view('login');
		
	}

	public function Login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = array(
			'username' => $username,
			'password' => md5($password)
		);
		$cek = $this->Home_Model->Login("tb_user",$data)->num_rows();
		if ($cek > 0 ) {
			$data_session = array(
				'nama' => $username,
				'status' => "Login"
			);
			$this->session->set_userdata($data_session);
			redirect('Admin/ToDashboard');
		} else {
			redirect('Admin/ToDashboard');
		}
	}
}
