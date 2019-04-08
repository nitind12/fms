<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class staffregi extends CI_Controller {
function __construct(){
		parent::__construct();
		$this->load->model('staff_model', 'sm');
	}
	
	function index()
	{

		$this->load->view('templates/header');
		$this->load->view('templates/navheader');
		$this->load->view('templates/registrationside');
		$this->load->view('Dashboard/indexstaffregi');
		$this->load->view('templates/footer');
	}

	function insert_record(){
		$data= $this->sm->submission();
		$this->session->set_flashdata('msg_', $data['msg']);

		redirect('staffregi');
	}
	function getStaff($sfid=''){
		$this->load->model('staff_model', 'stm');
		$data['staf'] = $this->stm->getStaffs($sfid);
		echo json_encode($data);
	}
}
