<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class invoiceprint extends CI_Controller {

	function index($inid)
	{
		$this->load->model('fee_receipt_model', 'frm');
		$str = explode('_', $inid);
		$data['students'] = $this->frm->getstudentInvoiceData($str[1]);

		//$data['discount'] = $this->frm->getstudentdiscount($data['students']['student_ID']);
		$data['curr_date'] = date('d-m-Y');
		//echo json_encode($data);
		//$this->load->view('templates/header');
		$this->load->view('Dashboard/invoiceprint',$data);
		//$this->load->view('templates/footer');
	}
}
