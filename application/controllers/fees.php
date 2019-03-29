<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fees extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navheader');
		$this->load->view('templates/receiptside');
		$this->load->view('Dashboard/indexreceipt');
		$this->load->model('receipt_model','rm');
		$this->load->view('templates/footer');

	}
}

function getclasses_sessionwise()
{
	$this->load->model('receipt_model','rm');
	$this->rm->getclasses_sessionwise();
}