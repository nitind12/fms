<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dropstudent extends CI_Controller {


	public function index()
	{
	

		$this->load->view('templates/header');
		$this->load->view('templates/navheader');
		$this->load->view('templates/masterside');
		$this->load->view('Dashboard/indexdrop');
		$this->load->view('templates/footer');
	}

	
}
