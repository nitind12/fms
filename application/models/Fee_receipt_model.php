<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fee_receipt_model extends CI_Model {

	function getclasses_sessionwise($session){
		$this->db->where('session_ID', $session);
		$query=$this->db->get('class_in_session');
		//echo $this->db->last_query(); die();
		return $query->result();
	}
	function getcourse($course){
		$this->db->where('course_ID', $course);
		$query=$this->db->get('course_details');
		//echo $this->db->last_query(); die();
		return $query->result();
	}
	/*function getinvoice($class,$yearfrom,$monthfrom,$yearto,$monthto){
		$this->db->where('course_ID', $course);
		$query=$this->db->get('course_details');
		//echo $this->db->last_query(); die();
		return $query->result();
	}*/
}
