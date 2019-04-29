<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class drop_student_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}

	function deletion(){
		$crse_ = $this->input->post('textcrse');
		$stdnt = $this->input->post('textstudent');

		$sid= $this->db->insert_id();


		$this->db->where('student_ID', $sid);
		$query = $this->db->get('student_details');

		if($query->num_rows()!=0){
			$bool_ = array(
				'res' => false,
				'msg' => '<b class="text-danger">This name is already exists. Please try again !!</b>'
			);
		} else {

			$data = array(
				'student_' => $crse_,
				'hobby'=> $stdnt_,
			);
			$this->db->where('student_ID',$sid);
			$this->db->delete('student_details', $data);

			$bool_ = array(
				'res' => true,
				'msg' => '<b class="text-success">Record successfully deleted...</b>'
			);
		}

	return $bool_;
	}
}

