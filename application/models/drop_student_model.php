<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class drop_student_model extends CI_Model {


	function studentDelete(){
		$crse_ = $this->input->get('txtcourse');
		$stdnt = $this->input->get('txtStudent');
		$this->db->where('class_ID', $crse_);
		$this->db->where('student_ID',$stdnt);
		$query = $this->db->delete('student_in_session');
	}
}

