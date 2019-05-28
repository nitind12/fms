<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fee_due_model extends CI_Model {

	function getclass(){
		$this->db->where('session_ID', $this->session->userdata('SESS_'));
		$query=$this->db->get('class_in_session');
		//echo $this->db->last_query(); die();
		return $query->result();
	}
	function getinvoicedata($str){
		$newstr = str_replace('%20', ' ', $str);
		$this->db->from('student_details a');
		$this->db->join('fee_receipt b','a.student_ID=b.student_ID');
		$this->db->join('fee_invoice c', 'b.invoice_ID=c.invoice_ID');
		$this->db->where('c.class_sess_ID',$newstr);
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