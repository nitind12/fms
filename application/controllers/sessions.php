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

function insert_record()
	{
		$data = $this->sm->submission();

		$this->session->set_flashdata('msg_', $data['msg']);
		redirect('sessions');

	}
	function getsession()
	{
		$this->load->model('session_model', 'sm');
		$data['sess'] = $this->sm->getsessions();
		echo json_encode($data);
	}
	function insert_data()
	{
		$data = $this->sm->classsubmission();

		$this->session->set_flashdata('msg_', $data['msg']);
		redirect('sessions');

	}
	function delete_record($sid){
		$data['delete'] = $this->sm->deletion($sid);
		echo json_encode($data);
	}
 }

