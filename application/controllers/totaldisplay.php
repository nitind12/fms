<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class totaldisplay extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('fee_total_model','ftm');
			if(! $this->session->userdata('user_')){
			redirect('login');
		}
	}
	public function index()
	{
		$data['class_in_session'] = $this->ftm->getclass('2018-19');
		$data['reciepttotal'] = $this->ftm->getreceiptdata_total();
		$data['studenttotal'] = $this->ftm->getstudentdata_total();
		$this->load->view('templates/header');
		$this->load->view('templates/navheader');
		$this->load->view('templates/sidebar');
		$this->load->view('Dashboard/totalamount',$data);
		$this->load->view('templates/footer');
	}
	public function total()
	{
		$data['class_in_session'] = $this->ftm->getclass('2018-19');
		$data['receipttotal'] = $this->ftm->getreceiptdata_total();
		$data['studenttotal'] = $this->ftm->getstudentdata_total();
		echo json_encode($data);

	}

	


}