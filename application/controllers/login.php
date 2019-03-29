<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function index()
	{
		$this->session->sess_destroy();
		$this->load->view('templates/header');
		$this->load->view('Dashboard/login');
		$this->load->view('templates/footer');
	}

	function authenticate(){
		$this->load->model('my_model');
		$r = $this->my_model->authenticate();

		if($r == true){
			redirect('dashboard');
		} else {
			redirect('login');
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
