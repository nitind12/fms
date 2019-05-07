<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class currenttotaldisplay extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('My_model','ftm');
			if(! $this->session->userdata('user_')){
			redirect('login');
		}
	}
	public function index()
	{
		$data['curr_date'] = date('Y-m-d');
		$str=$data['curr_date'];
		$data['currenttotal'] = $this->ftm->get_currentreceipt($str);
		$this->load->view('templates/header');
		$this->load->view('templates/navheader');
		$this->load->view('templates/sidebar');
		$this->load->view('Dashboard/currenttotalamount',$data);
		$this->load->view('templates/footer');
	}
	/*public function currenttotal()
	{
		$data['receipttotal'] = $this->ftm->getreceiptdata_total();
		$data['studenttotal'] = $this->ftm->getstudentdata_total();
		echo json_encode($data);

	}*/
}