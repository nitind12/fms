<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class receipt extends CI_Controller {

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
		$this->load->model('fee_receipt_model', 'frm');
		$data['class_in_session'] = $this->frm->getclass('2018-19');
		$data['students'] = $this->frm->getstudent();
		$data['discount'] = $this->frm->getdiscount();
		$data['fee'] = $this->frm->getfee();
		$data['invoice'] = $this->frm->getinvoice();
		$this->load->view('templates/header');
		$this->load->view('templates/navheader');
		$this->load->view('templates/receiptside');
		$this->load->view('Dashboard/indexreceipt', $data);
		$this->load->view('templates/footer');
	}
	
	



	/* function index()
	{
		$this->load->model('fee_receipt_model', 'frm');
		$data['course_details'] = $this->frm->getclasses_studentwise();
		$this->load->view('templates/header');
		$this->load->view('templates/navheader');
		$this->load->view('templates/receiptside');
		$this->load->view('Dashboard/indexreceipt', $data);
		$this->load->view('templates/footer');
	}*/

}

