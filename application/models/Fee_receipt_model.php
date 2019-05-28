	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fee_receipt_model extends CI_Model {

	function getclass(){
		$this->db->where('session_ID', $this->session->userdata('SESS_'));
		$query=$this->db->get('class_in_session');
		//echo $this->db->last_query(); die();
		return $query->result();
	}
	function getclassinsession($session){
		$this->db->where('session_ID', $session);
		$query=$this->db->get('class_in_session');
		//echo $this->db->last_query(); die();
		return $query->result();
	}
	function getstudent(){
		$cls=$this->input->get('cmbClass');
		$this->db->from('student_details a');
		$this->db->join('student_in_session b', 'a.student_ID=b.student_ID');
		$this->db->where('b.class_sess_ID', $cls);
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
	function getstaticfee(){
		$cls=$this->input->get('cmbClass');
		$this->db->from('fee_static_head a');
		$this->db->join('static_fee_associate_class b', 'a.static_head_ID=b.static_head_ID');
		$this->db->where('b.class_sess_ID', $cls);
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
	function getreceiptdata($str){
		$newstr = str_replace('%20', ' ', $str);
		$this->db->from('student_details a');
		$this->db->join('fee_receipt b', 'a.student_ID=b.student_ID');
		$this->db->join('student_in_session c', 'a.student_ID=c.student_ID');
		$this->db->where('c.class_sess_ID',$newstr);
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
	
	function getstudentreceiptdata($invid,$stdid){
		$this->db->from('student_details a');
		$this->db->join('fee_invoice b','a.student_ID=b.student_ID');
		$this->db->where('a.student_ID', $stdid);
		$this->db->where('b.invoice_ID', $invid);
		$query = $this->db->get();
		//echo $this->db->last_query(); die();
		return $query->row();
	}

	function getstudentInvoicedata($invid){
		$this->db->from('student_details a');
		$this->db->join('fee_invoice b','a.student_ID=b.student_ID');
		$this->db->where('b.invoice_ID', $invid);
		$query = $this->db->get();
		//echo $this->db->last_query(); die();
		return $query->result();
	}
	function getstudentdiscount($stdid,$invid){
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

	function print_receipt($recptid){
		$this->db->from('class a');
		$this->db->join('course_details b','a.course_ID=b.course_ID');
		$this->db->from('student_details e');
		$this->db->join('student_in_session c','a.class_ID=c.class_ID');
		$this->db->join('fee_receipt d', 'e.student_ID=d.student_ID');
		$this->db->join('discount_details f', 'f.discount_ID=d.discount_ID');
		$this->db->where('d.receipt_ID', $recptid);
		$query = $this->db->get(); 
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
	function generatereceipt(){
		$invoice_ID = $this->input->post('invoiceid_');
		$s_ID = $this->input->post('stdid_');
		$paid_amount = $this->input->post('paid_amount');
		$fine = $this->input->post('_fine_');
		$mode = $this->input->post('PaymentMode');
		$c_no = $this->input->post('txtCCDDNumber');
		$c_date = $this->input->post('txtCCDDDate');
		$desc = $this->input->post('txtDesc');
		$date = $this->input->post('date_');
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
			'date_of_Entry'=>$date,
			'session_ID'=>$session,
			'username'=>'fms',
			'date'=>$date,		
		);
		//print_r($data_);
		$data['bool']=$this->db->insert('fee_receipt', $data_);
		$data['recptid'] = $this->db->insert_id();
		
		$this->db->where('invoice_ID', $invoice_ID);
		$query=$this->db->get('fee_invoice');
		$r=$query->row();

		$new_due = $r->due_Amount - $paid_amount + $fine;

		$this->db->where('invoice_ID', $invoice_ID);
		$data2 = array(
			'due_Amount'=>$new_due
		);
			$this->db->update('fee_invoice',$data2);
		return $data;

	}
}