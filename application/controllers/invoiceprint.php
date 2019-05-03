<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class invoiceprint extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('fee_receipt_model','frm');
			if(! $this->session->userdata('user_')){
			redirect('login');
	}
	 function index($invid,$stdid)
	{
		
		$data['students'] = $this->frm->getstudentInvoiceData($invid, $stdid);
		$data['discount'] = $this->frm->getstudentdiscount($invid, $stdid);
		$data['curr_date'] = date('d-m-Y');
		echo json_encode($data);

		$this->load->view('templates/header');
		$this->load->view('Dashboard/invoiceprint');
		$this->load->view('templates/footer');
	}
}
