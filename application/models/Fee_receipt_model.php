<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fee_receipt_model extends CI_Model {

	/*function getclasses_sessionwise($session){
		$this->db->where('session_ID', $session);
		$query=$this->db->get('class_in_session');
		//echo $this->db->last_query(); die();
		return $query->result();
	}*/
	/*function getcourse($course){
		$this->db->where('course_ID', $course);
		$query=$this->db->get('course_details');
		//echo $this->db->last_query(); die();
		return $query->result();
	}*/
	/*function getinvoice($class,$yearfrom,$monthfrom,$yearto,$monthto){
		$this->db->where('course_ID', $course);
		$query=$this->db->get('course_details');
		//echo $this->db->last_query(); die();
		return $query->result();
	}*/
	function getclass($classid){
		$this->db->where('session_ID', $classid);
		$query=$this->db->get('class_in_session');
		//echo $this->db->last_query(); die();
		return $query->result();
	}
	function getstudent(){
		$this->db->select('student_ID,first_Name,last_Name');
		$query=$this->db->get('student_details');
		//echo $this->db->last_query(); die();
		return $query->result();
	}
	function getdiscount(){
		$this->db->from('student_register_discount a');
		$this->db->join('discount_details b', 'a.discount_ID=b.discount_ID');
		$query = $this->db->get();
		//echo $this->db->last_query(); die();
		return $query->result();
	}
	function getfee(){
		$this->db->select('student_ID,invoice_ID,static_head_ID,flexible_head_ID,static_head_Amount,flexible_head_Amount,due_Amount');
		$query=$this->db->get('fee_invoice');
		
		//$this->db->from('fee_invoice a');
		//$this->db->join('fee_flexible_head b','a.flexible_head_ID=b.flexible_head_ID');
		//$query = $this->db->get();
		//echo $this->db->last_query(); die();
		return $query->result();
	}
	function getinvoice(){
		$cls=$this->input->get('cmbClass');
		$yrf=$this->input->get('cmbYearf');
		$monf=$this->input->get('cmbMonthf');
		$yrt=$this->input->get('cmbYeart');
		$mont=$this->input->get('cmbMontht');
		
		$this->db->order_by('a.student_ID');
		$this->db->from('fee_invoice a');
		$this->db->join('class_in_session b', 'a.class_sess_ID=b.class_sess_ID');
		$this->db->order_by('invoice_ID', 'desc');
		//$this->db->where('DATE_FORMAT(CONCAT(year_From,'-',month_From,'-',1),'%Y-%m-%d')>=',date('Y-m-d',strtotime())
		$this->db->where('year_From', $yrf);
		$this->db->where('month_From', $monf);
		$this->db->where('year_To', $yrt);
		$this->db->where('month_To', $mont);
		$this->db->where('a.class_sess_ID', $cls);
		//$this->db->limit(1,0);
		$query = $this->db->get();
		//echo $this->db->last_query(); die();
		return $query->result();
	}
	/*function put_value($cls,$yrf,$monf,$yrt,$mont)
	{
		$this->db->from('fee_invoice a');
		$this->db->join('class_in_session b', 'a.class_sess_ID=b.class_sess_ID');
		$query='select * from fee_invoice where class_ID='.$cls.' and year_From='.$yrf.' and month_From='.$monf.' and year_To='.$yrt.' month_To='.$mont.' ';
		return $this->db->query($query)->result();
	}*/
	function getstudentInvoicedata($invid, $stdid){
		$this->db->from('student_details a');
		$this->db->join('fee_invoice b','a.student_ID=b.student_ID');
		$this->db->where('a.student_ID', $stdid);
		$this->db->where('b.invoice_ID', $invid);
		$query = $this->db->get();
		//echo $this->db->last_query(); die();
		return $query->row();
	}
	function getstudentdiscount($invid, $stdid){
		$this->db->from('discount_details a');
		$this->db->join(' fee_receipt b','a.discount_ID=b.discount_ID');
		$this->db->where('b.student_ID', $stdid);
		$this->db->where('b.invoice_ID', $invid);
		$query = $this->db->get();
		//echo $this->db->last_query(); die();
		return $query->row();
	}
	/*function getstudentdiscountInvoice($invid, $stdid){
		$this->db->from('discount_details a');
		$this->db->join(' fee_invoice b','a.discount_ID=b.discount_ID');
		$this->db->where('b.student_ID', $stdid);
		$this->db->where('b.invoice_ID', $invid);
		$query = $this->db->get();
		//echo $this->db->last_query(); die();
		return $query->row();
	}*/
	function getreceiptdata(){
		$data['invoice'] = $this->getstudentInvoicedata();
		

		$data_ = array(
			'invoice_ID'=>1,
			'student_ID'=>1000,
			'discount_ID'=>10,
			'discount_Status'=>1,
			'discount_Amount'=>	100,
			'description'=>1,
			'actual_paid_Amount'=>100,
			'paid'=>100,
			'fine'=>50,
			'type_ID'=>11,
			'fee_Mode'=>cash,
			'bank_Name'=>BOB,
			'cheque_No'=>123,
			'cheque_Date'=>2019-4-10,
			'date_of_Entry'=>2019-4-12,
			'session_ID'=>1000,
			'username'=>fms,
			'date'=>2019-4-12,		
		);
		print_r($data_);
		$bool=$this->db->insert('fee_receipt', $data_);
	return $bool;
	







	}

}