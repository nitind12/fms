<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class statichead_students extends CI_Controller {
function __construct(){
		parent::__construct();
		$this->load->model('statichead_model', 'sm');
			if(! $this->session->userdata('user_')){
			redirect('login');
		}
	}
	
	function insert_record(){
		$data = $this->sm->submission();
		//$data['static_data'] = $this->sm->getstatichead();
		$this->load->view('templates/header');
		$this->load->view('templates/navheader');
		$this->load->view('templates/receiptside');
		$this->load->view('Dashboard/index_static_in_class', $data);
		$this->load->view('templates/footer');
		$this->session->set_flashdata('msg_', $data['msg']);

		redirect('statichead_students');
	}
	function index(){
		$data['static_data'] = $this->sm->getstatichead();
		$this->load->view('templates/header');
		$this->load->view('templates/navheader');
		$this->load->view('templates/receiptside');
		$this->load->view('Dashboard/index_static_in_class', $data);
		$this->load->view('templates/footer');
		
	}
	function getstatichead(){
		$data['static_data'] = $this->sm->getstatichead();
		$data['classes'] = $this->sm->getclasses();

		echo json_encode($data);
	}
	function getstatichead_data($str){
		$data['statichead_data'] = $this->sm->getstatichead_data($str);
		echo json_encode($data);
	}
	function delete_record($shid){
		$data['delete'] = $this->sm->deletion($shid);
		echo json_encode($data);
	}
	function getstaticheads(){
		$data['staticheads_data'] = $this->sm->getstatichead_classwise();
		
	}
	function getstatichead_details(){
		$data['classes'] = $this->sm->getclasses();

		$data['static_classes'] = $this->sm->getstatichead_details();

		echo json_encode($data);
		
	}
	function updatestatichead_data($str){
		$data['update_static_data'] = $this->sm->updatestaticheads_data($str);
		echo json_encode($data);
	}
}