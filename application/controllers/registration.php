<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {
function __construct(){
		parent::__construct();
		if(! $this->session->userdata('user_')){
			redirect('login');
		}
	}
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navheader');
		$this->load->view('templates/registrationside');
		$this->load->view('Dashboard/indexregi');
		$this->load->model('my_model','mm');
		$this->load->view('templates/footer');
	
	
	}	
}
