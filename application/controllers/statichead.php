<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class statichead extends CI_Controller {

function __construct(){
	parent::__construct();
	$this->load->model('static_model','sm');

}
	
	public function index(){
		$this->load->view('templates/header');
		$this->load->view('templates/navheader');
		$this->load->view('templates/masterside');
		$this->load->view('Dashboard/index_static_in_class');
		$this->load->view('templates/footer');
	}

	
	function insert_record(){

		$data=$this->sm->submission();
		$this->session->set_flashdata('msg_', $data['msg']);
		redirect('statichead');
	}
}
