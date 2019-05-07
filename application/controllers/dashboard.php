<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		if(! $this->session->userdata('user_')){
			redirect('login');
		}
	}
	public function index()
	{
		
		$this->load->model('My_model', 'mm');
		$data['number'] = $this->mm->totalStudents();
		$data['no'] = $this->mm->totalClasses();
		$data['inv'] = $this->mm->gettotalinvoice();
		$data['res'] = $this->mm->gettotalreceipt();
		$data['amount'] = $this->mm->gettotalamount();
		$data['due'] = $this->mm->gettotaldues();
		$data['curr_date'] = date('Y-m-d');
		$str=$data['curr_date'];
		$data['currentamount'] = $this->mm->get_currentamount($str);
		$this->load->view('templates/header');
		$this->load->view('templates/navheader');
		$this->load->view('templates/sidebar');
		$this->load->view('Dashboard/indexdash',$data);
		$this->load->view('templates/footer');
	}
}
