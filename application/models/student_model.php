<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class student_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}

	function submission(){
		$stdid_ = $this->input->post('txtstdid');
		$frstnme_ = $this->input->post('txtfrstnme');
		$lstnme_ = $this->input->post('txtlstnme');
		$fnme_ = $this->input->post('txtfnme');
		$mnme_ = $this->input->post('txtmnme');
		$ctgry_ = $this->input->post('txtctgry');
		$gndr_ = $this->input->post('txtfmle');
		$gndr_ = $this->input->post('txtmle');
		$ntlty_ = $this->input->post('txtntnlty');
		$dob_ = $this->input->post('txtdte');
		$bgrp_ = $this->input->post('txtbgrp');
		$stts_ = $this->input->post('txtstts');
		$usrnme_ = $this->input->post('txtusrnme');


		

		$this->db->where('student_ID', $stdid_);
		$query = $this->db->get('student_details');

		if($query->num_rows()!=0){
			$bool_ = array(
				'res' => false,
				'msg' => '<b class="text-danger">This id already exists. Please try again !!</b>'
			);
		} else {

			$data = array(
				'student_ID' => $stdid_,
				'first_Name' => $frstnme_,
				'last_Name' => $lstnme_,
				'fathers_Name' => $fnme_,
				'mothers_Name' => $mnme_,
				'category' => $ctgry_,
				'gender' => $gndr_,
				'nationality' => $ntlty_,
				'dob' => $dob_,
				'blood_Group' => $bgrp_,
				'status' => $stts_,
				'username' => $usrnme_,

				
			);
			$this->db->insert('student_details', $data);

			$bool_ = array(
				'res' => true,
				'msg' => '<b class="text-success">Record successfully inserted...</b>'
			);
		}

	return $bool_;
	}
	function getStudents($stdid=''){
		if($stdid!=''){
			$this->db->where('student_ID', $stdid);
		}
		
		$query = $this->db->get('student_details');
		if($stdid!=''){
			return $query->row();
		} else {
			return $query->result();
		}
	}
	function getCourse(){
		$this->db->select('course_ID, course');
		$query = $this->db->get('course_details');
		return $query->result();
	}
}