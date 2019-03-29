<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fee_receipt_model extends CI_Model {

	function getclasses_sessionwise($session){
		$this->db->where('session_ID', $session);
		$query=$this->db->get('class_in_session');
		//echo $this->db->last_query(); die();
		return $query->result();
	}
	/*function getstudentwise($student){
		$this->db->where('student_ID', $student);
		$query=$this->db->get('student_details');
		//echo $this->db->last_query(); die();
		return $query->result();
	}*/
}
