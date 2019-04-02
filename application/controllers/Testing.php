<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testing extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('my_test_model', 'mtm');
	}

	function index(){
		$this->load->view('templates/header');
		$this->load->view('templates/navheader');
		$this->load->view('templates/sidebar');
		$this->load->view('testing/test');
		$this->load->view('templates/footer');
	}

	function insert_record(){
		$data = $this->mtm->submission();

		$this->session->set_flashdata('msg_', $data['msg']);

		redirect('testing');
	}
}