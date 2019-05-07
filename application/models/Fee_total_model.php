<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fee_total_model extends CI_Model {

	function getclass($classid){
		$this->db->where('session_ID', $classid);
		$query=$this->db->get('class_in_session');
		//echo $this->db->last_query(); die();
		return $query->result();
	}
	function getreceiptdata_total(){
		$this->db->from('fee_receipt b');
		$this->db->join('student_in_session c', 'b.student_ID=c.student_ID');
		$cls=$this->input->get('cmbClass');
		$this->db->where('c.class_sess_ID',$cls);
		$query = $this->db->get();
		return $query->result();
	}
	function getstudentdata_total(){
		$this->db->from('student_details a');
		//$this->db->join('fee_invoice b', 'a.student_ID=b.student_ID');
		$this->db->join('student_in_session c', 'a.student_ID=c.student_ID');
		$cls=$this->input->get('cmbClass');
		//$monthf=$this->input->get('cmbMonthf');
		//$montht=$this->input->get('cmbMontht');
		$this->db->where('c.class_sess_ID',$cls);
		//$this->db->where('b.month_From',$monthf);
		//$this->db->where('b.month_To',$montht);
		$query = $this->db->get();
		return $query->result();

	}
}