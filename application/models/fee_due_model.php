<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fee_due_model extends CI_Model {

	function getclass($classid){
		$this->db->where('session_ID', $classid);
		$query=$this->db->get('class_in_session');
		//echo $this->db->last_query(); die();
		return $query->result();
	}
	function getinvoicedata($str){
		$this->db->from('fee_receipt a');
		$this->db->join('student_in_session b', 'a.student_ID=b.student_ID');
		$this->db->join('fee_invoice c', 'b.class_sess_ID=c.class_sess_ID');
		$this->db->join('student_details d', 'c.student_ID=d.student_ID');
		$this->db->where('b.class_sess_ID',$str);
		$query = $this->db->get();
		return $query->result();
	}
	/*function getstudentdata_total(){
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

	}*/
}