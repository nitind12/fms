<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class receiptdisplay extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('student_model','stm');
			if(! $this->session->userdata('user_')){
			redirect('login');
		}
	}
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navheader');
		$this->load->view('templates/sidebar');
		$this->load->view('Dashboard/indexreceipt1');
		$this->load->view('templates/footer');
	}
	


}
