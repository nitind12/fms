<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class totalclasses extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('student_model','stm');
	}
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navheader');
		$this->load->view('templates/sidebar');
		$this->load->view('Dashboard/indextotalclasses');
		$this->load->view('templates/footer');
	}
	


}
