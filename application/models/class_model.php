<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class class_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}

	function submission(){
		
		$Course_ = $this->input->post('textcourse');
		$Semster_=$this->input->post('txtSemester');
		$Section_=$this->input->post('txtSection');

		$this->db->where('class_ID', $clss_Id_);
		$query = $this->db->get('class');

		if($query->num_rows()!=0){
			$bool_ = array(
				'res' => false,
				'msg' => '<b class="text-danger">This id already exists. Please try again !!</b>'
			);
		} else {

			$data = array(
				'Course' => $Course_,
				'Semester' => $Semester_,
				'Section'=> $Section_
			);
			$this->db->insert('class', $data);
		

			$bool_ = array(
				'res' => true,
				'msg' => '<b class="text-success">Record successfully inserted...</b>'
			);
		}
	return $bool_;

	}
		
		function getclasses(){
			$this->db->select('course,sem,section');
			$query= $this->db->get('class');
			return $query->result();
		}
		function getCourse(){
			$this->db->select('course_ID,course');
			$query= $this->db->get('course_details');
			return $query->result();
		}
	}