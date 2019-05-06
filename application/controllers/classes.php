<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class classes extends CI_Controller {
function __construct(){
		parent::__construct();
		$this->load->model('class_model', 'cm');
	}


	public function index()
	{
		$this->load->model('class_model','cm');
		$data['course'] = $this->cm->getCourse();


		$this->load->view('templates/header');
		$this->load->view('templates/navheader');
		$this->load->view('templates/masterside');
		$this->load->view('Dashboard/indexclass', $data);
		$this->load->view('templates/footer');
	}

	function insert_record(){
		$data = $this->cm->submission();

		$this->session->set_flashdata('msg_', $data['msg']);

		redirect('classes');
	}
	function getclass(){
		$this->load->model('class_model', 'cm');
		$data['clss'] = $this->cm->getClassesStudentwise();
		$data['clssTotal'] = $this->cm->getclasses();
		/*$data['clss_invoice'] = $this->cm->getclass_invoice();*/
		echo json_encode($data);
	}
	function delete_record($cid){
		$data['delete'] = $this->cm->deletion($cid);
		echo json_encode($data);
	}
}
