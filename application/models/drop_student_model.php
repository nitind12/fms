<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class drop_student_model extends CI_Model {


	function studentDelete($crse_,$stdnt){

		$this->db->where('class_ID', $crse_);
		$this->db->where('student_ID',$stdnt);
		//print_r($stdnt);exit();
		$query = $this->db->delete('student_in_session');
	}
}

