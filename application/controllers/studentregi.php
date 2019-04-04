<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class studentregi extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('student_model', 'stm');
	}
	
	public function index()
	{
		$this->load->model('student_model', 'stm');
		$data['students'] = $this->stm->getStudents();
		$this->load->model('student_model', 'stm');
		$data['course'] = $this->stm->getCourse();

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

function insert_record(){
		$data = $this->stm->submission();

		$this->session->set_flashdata('msg_', $data['msg']);

		redirect('studentregi');
	}
}
