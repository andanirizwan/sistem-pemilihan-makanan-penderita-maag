<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autentication extends CI_Controller {

	public function login()
	{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			if (!empty($username)&&!empty($password)) {
				$validasi_login_db = $this->autentication_model->login($username,$password);
				if ($validasi_login_db != false) {
					$this->session->set_userdata('username',$username);
					redirect('page/beranda');
				}

				redirect('/');
			}else{

				redirect('/');
			}
	}

	public function logout(){
		$this->session->unset_userdata('username');
		redirect('page/login');
	}

}
