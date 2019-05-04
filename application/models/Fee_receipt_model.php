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
	function getstudent($cssid){
		$this->db->from('student_details a');
		$this->db->join('student_in_session b', 'a.student_ID=b.student_ID');
		$this->db->where('class_sess_ID', $cssid);
		$query=$this->db->get();
		//echo $this->db->last_query(); die();
		return $query->result();
	}
	function getdiscount(){
		$this->db->from('student_register_discount a');
		$this->db->join('discount_details b', 'a.discount_ID=b.discount_ID');
		//$this->db->where('student_ID', $sid);
		$query = $this->db->get();
		//echo $this->db->last_query(); die();
		return $query->result();
	}
	function getstaticfee($cssid){
		$this->db->from('fee_static_head a');
		$this->db->join('static_fee_associate_class b', 'a.static_head_ID=b.static_head_ID');
		$this->db->where('b.class_sess_ID', $cssid);
		$query = $this->db->get();
		//echo $this->db->last_query(); die();
		return $query->result();
	}
	function getflexiblefee(){
		$this->db->from('fee_flexible_head a');
		$this->db->join('flexible_fee_associate_class b', 'a.flexible_head_ID=b.flexible_head_ID');
		//$this->db->where('b.student_ID', $sid);
		$query = $this->db->get();
		//echo $this->db->last_query(); die();
		return $query->result();
	}
	function getreceiptdata(){
		$this->db->from('student_details a');
		$this->db->join('fee_receipt b', 'a.student_ID=b.student_ID');
		$this->db->join('student_in_session c', 'a.student_ID=c.student_ID');
		$this->db->join('class d', 'c.class_ID=d.class_ID');
		$this->db->join('course_details e', 'd.course_ID=e.course_ID');
		$this->db->group_by('d.class_ID');
		//$this->db->where('b.student_ID', $sid);
		$query = $this->db->get();
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
	function getstudentreceipt($recpid){
		$this->db->from('student_details a');
		$this->db->join(' fee_receipt b','a.student_ID=b.student_ID');
		$this->db->join('student_in_session c','a.student_ID=b.student_ID');
		$this->db->join('class d','c.class_ID=d.class_ID');
		$this->db->join('course_details e','d.course_ID=e.course_ID');
		$this->db->where('b.receipt_ID', $recpid);
		$this->db->group_by('d.class_ID');
		$query = $this->db->get();
		//echo $this->db->last_query(); die();
		return $query->result();
	}
	function getstudentInvoice($invid){
		$this->db->select('invoice_ID,actual_Amount');
		$this->db->where('invoice_ID', $invid);
		$query = $this->db->get('fee_invoice');
		//echo $this->db->last_query(); die();
		return $query->row();
	}
	function getdiscount1($sid){
		$this->db->from('student_register_discount a');
		$this->db->join('discount_details b', 'a.discount_ID=b.discount_ID');
		$this->db->where('a.student_ID', $sid);
		//$this->db->where('student_ID', $sid);
		$query = $this->db->get();
		//echo $this->db->last_query(); die();
		return $query->result();
	}
	function getprnreceipt($invid){

		$this->db->select('receipt_ID');
		$this->db->from('fee_receipt');
		$this->db->where('invoice_ID', $invid);
		$this->db->order_by('receipt_ID','desc');
		$this->db->limit(1,0);
		$query = $this->db->get();
		//echo $this->db->last_query(); die();
		if($query->num_rows()!=0){
			$k = $query->row();
			$rid = $k->receipt_ID;
		} else {
			$rid='x';
		}
		return $rid;
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
	function generatereceipt(){
		$invoice_ID = $this->input->post('invoiceid_');
		$s_ID = $this->input->post('stdid_');
		$paid_amount = $this->input->post('paid_amount');
		$fine = $this->input->post('_fine_');
		$mode = $this->input->post('PaymentMode');
		$c_no = $this->input->post('txtno');
		$c_date = $this->input->post('txtdate');
		$desc = $this->input->post('txtDesc');
		$invoice = $this->getstudentInvoice($invoice_ID);
		
		
			$actual_amount=$invoice->actual_Amount;
		
		$data['discount'] = $this->getdiscount1($s_ID);
				$d_id='';
				$d_amount=0;
				foreach ($data['discount'] as $item)
				{
					if($d_id == '')
					{
						$d_id=$item->discount_ID;
					}
					else
					{
			 		$d_id=$d_id.','.$item->discount_ID;
			 		}
			 		if($d_amount == 0)
					{
						$d_amount=$item->discount_Amount;
					}
					else
					{
			 			$d_amount=$d_amount + $item->discount_Amount;
			 		}
				}
		$session='2018-19';
		$data_ = array(
			'invoice_ID'=>$invoice_ID,
			'student_ID'=>$s_ID,
			'discount_ID'=>$d_id,
			'discount_Status'=>1,
			'discount_Amount'=>	$d_amount,
			'description'=>$desc,
			'actual_paid_Amount'=>$actual_amount,
			'paid'=>$paid_amount,
			'fine'=>$fine,
			'type_ID'=>11,
			'fee_Mode'=>$mode,
			'bank_Name'=>'SBI',
			'cheque_No'=>$c_no,
			'cheque_Date'=>$c_date,
			'date_of_Entry'=>2019-4-12,
			'session_ID'=>$session,
			'username'=>'fms',
			'date'=>2019-4-12,		
		);
		//print_r($data_);
		$data['bool']=$this->db->insert('fee_receipt', $data_);
		$data['recptid'] = $this->db->insert_id();
	return $data;
	}

}