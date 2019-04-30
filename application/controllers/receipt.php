<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class receipt extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('fee_receipt_model', 'frm');
			if(! $this->session->userdata('user_')){
			redirect('login');
		}
	}
	 function index()
	{
		$data['class_in_session'] = $this->frm->getclass('2018-19');

		//$data['invoice'] = $this->frm->getinvoice();
		//$data['getdata'] = $this->frm->put_value($cls,$yrf,$monf,$yrt,$mont);
		$data['students'] = $this->frm->getstudent('BCA2018-19_I');
		$data['discount'] = $this->frm->getdiscount();
		$data['static'] = $this->frm->getstaticfee('BCA2018-19_I');
		$data['flexible'] = $this->frm->getflexiblefee();
		$data['invoice'] = $this->frm->getinvoice();
		$this->load->view('templates/header');
		$this->load->view('templates/navheader');
		$this->load->view('templates/receiptside');
		$this->load->view('Dashboard/indexreceipt', $data);
		$this->load->view('templates/footer');
	}
	function get_data(){
		//echo $this->input->get('cmbClass');die();
		$data['class_in_session'] = $this->frm->getclass('2018-19');
		$data['students'] = $this->frm->getstudent('BCA2018-19_I');
		$data['discount'] = $this->frm->getdiscount();
		$data['static'] = $this->frm->getstaticfee('BCA2018-19_I');
		$data['flexible'] = $this->frm->getflexiblefee();
		$data['invoice'] = $this->frm->getinvoice();
		echo json_encode($data);
	}

	function get_invoice_data($invid, $stdid){
		//echo $invid . " - " . $stdid;
		$data['students'] = $this->frm->getstudentInvoiceData($invid, $stdid);
		$data['discount'] = $this->frm->getstudentdiscount($invid, $stdid);
		//$data['discount_invoice'] = $this->frm->getstudentdiscountInvoice($invid, $stdid);
		$data['curr_date'] = date('d-m-Y');
		echo json_encode($data);
	}
	function generatereceipt(){
		$data['resultant'] = $this->frm->generatereceipt();
		echo json_encode($data);
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

