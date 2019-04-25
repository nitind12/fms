<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_model extends CI_Model {
	function authenticate(){
		$usr = $this->input->post('txtUsr');
		$pwd = $this->input->post('txtPassword');

		$this->db->where('a.username', $usr);
		$this->db->where('a.password', $pwd);
		$this->db->from('login_details a');
		$this->db->join('status_details b', 'b.status_ID=a.status_ID');
		$query = $this->db->get();
		
		if($query->num_rows()!=0){
			$bool = true;
			$r = $query->row();
			$this->session->set_userdata('user_', $r->username);
			$this->session->set_userdata('status_', $r->name);
		} else {
			$bool = false;
		}

		return $bool;
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

	function totalStudents(){
		$this->db->select('COUNT(student_ID) AS TOTAL_');
		$query = $this->db->get('student_details');
		return $query->row();
	}
	
}