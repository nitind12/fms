<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class flexihead_students extends CI_Controller {
function __construct(){
		parent::__construct();
		$this->load->model('Flexihead_model', 'fm');
	}

	
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navheader');
		$this->load->view('templates/masterside');
		$this->load->view('Dashboard/indexflexihead_students');
		$this->load->view('templates/footer');
	}
	function getflexihead(){
		$this->load->model('Flexihead_model', 'fm');
		$data['flex'] = $this->fm->getflexiheads();
		echo json_encode($data);
	}
	function insert_record(){
		$data = $this->fm->submission();

		$this->session->set_flashdata('msg_', $data['msg']);

		redirect('flexihead_students');
	}

	
}
