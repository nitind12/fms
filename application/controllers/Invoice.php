<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {

	function __construct(){
		parent::__construct();
	$this->load->model('fee_invoice_model', 'fim');
		if(! $this->session->userdata('user_')){
			redirect('login');
		}
	}

	function generateInvoice($sid){

		$data['resultant'] = $this->fim->generateInvoice($sid);
		 //redirect('invoice');
		echo json_encode($data);
		
	}
	function deleteInvoice($invid){
		$data['delete'] = $this->fim->deleteInvoice($invid);
		echo json_encode($data);
	}
	function getinvoicedata($str){
		$data['invoicedata'] = $this->fim->getinvoicedata($str);
		echo json_encode($data);
	}

}