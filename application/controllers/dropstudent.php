<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dropstudent extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('drop_student_model', 'dm');
			if(! $this->session->userdata('user_')){
			redirect('login');
		}
	}


	public function index()
	{
		$this->load->model('student_model','stm');
		$data['students'] = $this->stm->getstudentsdetails();

		$this->load->model('class_model','cm');
		$data['class'] = $this->cm->getclasses();
		//$data['delete'] = $this->dm->studentDelete();

		$this->load->view('templates/header');
		$this->load->view('templates/navheader');
		$this->load->view('templates/masterside');
		$this->load->view('Dashboard/indexdrop',$data);
		$this->load->view('templates/footer');
	}
	public function deletion()
	{
		$crse_ = $this->input->post('txtcourse');
		$stdnt = $this->input->post('txtStudent');
		
		$data['delete'] = $this->dm->studentDelete($crse_,$stdnt);
	}	
}
