<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class studentregi extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('student_model', 'stm');
			if(! $this->session->userdata('user_')){
			redirect('login');
		}
	}
	
	public function index()
	{
		$this->load->model('student_model', 'stm');
		$data['students'] = $this->stm->getStudents();
		$this->load->model('class_model', 'cm');
		$data['course'] = $this->cm->getclasses();

		$this->load->view('templates/header');
		$this->load->view('templates/navheader');
		$this->load->view('templates/registrationside');
		$this->load->view('Dashboard/indexstudentregi', $data);
		$this->load->view('templates/footer');
	}
	function getStudent($stdid=''){
		$this->load->model('student_model', 'stm');
		$data['stud'] = $this->stm->getStudents($stdid);
		echo json_encode($data);
	}

	function getStudents($crsid=''){
		$this->load->model('student_model', 'stm');
		$data['stud'] = $this->stm->getStudentsCoursewise($crsid);
		echo json_encode($data);
	}


function insert_record(){
		$data = $this->stm->submission();

		$this->session->set_flashdata('msg_', $data['msg']);

		redirect('studentregi');
	}
}
