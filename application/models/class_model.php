<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class class_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}

	function submission(){
		
		$Course_ = $this->input->post('textcourse');
		$Semester_=$this->input->post('txtSemester');
		$Section_=$this->input->post('txtSection');

		$sid = $this->db->insert_id();
		$this->db->where('class_ID', $sid);
		$query = $this->db->get('class');

		if($query->num_rows()!=0){
			$bool_ = array(
				'res' => false,
				'msg' => '<b class="text-danger">This id already exists. Please try again !!</b>'
			);
		} else {

			$data = array(
				'course' => $Course_,
				'sem' => $Semester_,
				'section'=> $Section_
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
			//$this->db->distinct('course');
			//$this->db->select('b.course,a.course_ID,a.sem_ID,a.section');
			$this->db->from('class a');
			$this->db->join('course_details b', 'a.course_ID=b.course_ID');
			$this->db->join('student_in_session c', 'a.class_ID=c.class_ID');
			$this->db->group_by('c.class_ID');
			$query= $this->db->get();

			return $query->result();
		}
		/*function getclass_invoice(){
			$this->db->from('class_in_session a');
			$this->db->join('student_in_session b', 'a.class_sess_ID=b.class_sess_ID');
			$query= $this->db->get();

			return $query->row();
		}*/

		function getClassesStudentwise(){
			$this->db->select('a.*, b.course, count(c.student_ID) as totalStudents');
			$this->db->from('class a');
			$this->db->join('course_details b', 'a.course_ID=b.course_ID');
			$this->db->join('student_in_session c', 'a.class_ID=c.class_ID');
			$this->db->group_by('c.class_ID');

			$query= $this->db->get();

			return $query->result();
		}
		function getCourse(){
			$this->db->select('course_ID,course');
			$query= $this->db->get('course_details');
			return $query->result();
		}
	}