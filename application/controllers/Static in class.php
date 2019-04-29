<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sessions extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('session_model', 'sm');
			if(! $this->session->userdata('user_')){
			redirect('login');
		}
	}
	public function index()
	{
	
		$this->load->view('templates/header');
		$this->load->view('templates/navheader');
		$this->load->view('templates/masterside');
		$this->load->view('Dashboard/indexsessions');
		$this->load->view('templates/footer');
	}

function insert_record(){
		$data = $this->sm->submission();

		$this->session->set_flashdata('msg_', $data['msg']);

		redirect('sessions');
	}
}