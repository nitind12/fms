<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dropstudent extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('drop_student_model', 'dm');
	}


	public function index()
	{
		$this->load->model('student_model','stm');
		$data['students'] = $this->stm->getStudents();

		$this->load->model('class_model','cm');
		$data['class'] = $this->cm->getclasses();

		$this->load->view('templates/header');
		$this->load->view('templates/navheader');
		$this->load->view('templates/masterside');
		$this->load->view('Dashboard/indexdrop',$data);
		$this->load->view('templates/footer');
	}

	function delete_record(){
		$data= $this->dm->deletion();
		$this->load->model('drop_student_model','dm');
		$this->session->set_flashdata('msg_', $data['msg']);
		redirect('dropstudent');
	}
}
