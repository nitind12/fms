<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class displaydue extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('fee_due_model','fdm');
			if(! $this->session->userdata('user_')){
			redirect('login');
		}
	}
	public function index()
	{
		//$data['invoicedata'] = $this->fdm->getclass();
		//$data['reciepttotal'] = $this->ftm->getreceiptdata_total();
		//$data['studenttotal'] = $this->ftm->getstudentdata_total();
		$this->load->view('templates/header');
		$this->load->view('templates/navheader');
		$this->load->view('templates/sidebar');
		$this->load->view('Dashboard/indexdisplaydue');
		$this->load->view('templates/footer');
	}
	public function getduedata()
	{
		$data['class_in_session'] = $this->fdm->getclass();
		echo json_encode($data);

	}
	public function getdata($str)
	{
		$data['invoicedata'] = $this->fdm->getinvoicedata($str);
		echo json_encode($data);

	}
}