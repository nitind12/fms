<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function index()
	{
		
		$this->session->sess_destroy();
		$this->load->model('My_model','mm');
		$data['session'] = $this->mm->getsession();
		$this->load->view('templates/header');
		$this->load->view('Dashboard/login',$data);
		$this->load->view('templates/footer');
		$this->load->view('templates/footer2');
	}

	function authenticate(){
		$this->session->set_userdata('SESS_',$this->input->post('cmbSession'));
		//$this->session->userdata('SESS_');
		//$this->load->model('fee_receipt_model', 'frm');
		//$this->frm->getclass($session);
		//$this->load->view('Dashboard/indexreceipt',$data);
		$this->load->model('my_model');
		$r = $this->my_model->authenticate();
		if($r == true){
			redirect('dashboard');
		} else {
			redirect('login');
		}
	}
	function logout(){
		setcookie("user_","",time()-3600);
		setcookie("pwd_","",time()-3600);
		$this->session->sess_destroy();
		redirect('login');
	}
}
