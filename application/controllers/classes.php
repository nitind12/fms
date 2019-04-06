<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class classes extends CI_Controller {



	public function index()
	{
	

		$this->load->view('templates/header');
		$this->load->view('templates/navheader');
		$this->load->view('templates/masterside');
		$this->load->view('Dashboard/indexclass');
		$this->load->view('templates/footer');
	}

	function insert_record(){
		$data = $this->csm->submission();

		$this->session->set_flashdata('msg_', $data['msg']);

		redirect('class');
	}
}
