<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class preceipt extends CI_Controller {

	function print_($recpid)
	{
		$this->load->model('fee_receipt_model', 'frm');
		$data['receipt'] = $this->frm->getstudentreceipt($recpid);
		//$this->load->view('templates/header');
		//$this->load->view('templates/navheader');
		//$this->load->view('templates/receiptside');
		$this->load->view('testing/preceipt1', $data);
		//$this->load->view('templates/footer');
	}
}
