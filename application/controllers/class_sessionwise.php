<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class class_sessionwise extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('class_model','cm');
			if(! $this->session->userdata('user_')){
			redirect('login');
		}
	}
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navheader');
		$this->load->view('templates/sidebar');
		$this->load->view('Dashboard/indexclass_sesswise');
		$this->load->view('templates/footer');
	}
	function getclass_sesswise()
	{
		$data['class_sessionwise'] = $this->cm->getclass_sessionwise();
		echo json_encode($data);

	}
	function getclass_in_session($str)
	{
		$data['class_in_session'] = $this->cm->getclass_in_session($str);
		echo json_encode($data);

	}

	
}
