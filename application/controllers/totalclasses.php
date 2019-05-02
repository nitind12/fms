<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class totalclasses extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('student_model','stm');
			if(! $this->session->userdata('user_')){
			redirect('login');
		}
	}
	public function index()
	{
		$data['students']=$this->stm->getStudents();
		$this->load->view('templates/header');
		$this->load->view('templates/navheader');
		$this->load->view('templates/sidebar');
		$this->load->view('Dashboard/indextotalclasses',$data);
		$this->load->view('templates/footer');
	}
	


}
