<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class flexiblehead extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('flexmodel', 'fmd');
	}


	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navheader');
		$this->load->view('templates/masterside');
		$this->load->view('Dashboard/indexflexihead');
		$this->load->view('templates/footer');
	}
	function insert_record(){
		$data = $this->fmd->submission();

		$this->session->set_flashdata('msg_', $data['msg']);

		redirect('flexiblehead');
	}
}
