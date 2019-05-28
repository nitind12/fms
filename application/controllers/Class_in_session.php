<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class class_in_session extends CI_Controller {

function __construct(){
	parent::__construct();
	$this->load->model('classinsessionmodel','csm');
		if(! $this->session->userdata('user_')){
			redirect('login');
		}

}

	public function index()
	{
	

		$this->load->view('templates/header');
		$this->load->view('templates/navheader');
		$this->load->view('templates/masterside');
		$this->load->view('Dashboard/indexclass_in_session');
		$this->load->view('templates/footer');
	}


	function getclassinsession()
	{
		$this->load->model('classinsessionmodel', 'csm');
		$data['csess'] = $this->csm->getclassinsession();
		
		echo json_encode($data);
	}
	function insert_record(){
		$data = $this->csm->submission();

		$this->session->set_flashdata('msg_', $data['msg']);

		redirect('class_in_session');
	}
}
