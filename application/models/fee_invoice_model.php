<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fee_invoice_model extends CI_Model {
	function get_discount_studentwise($studid){
		$this->db->from('student_register_discount a');
		$this->db->join('discount_details b', 'a.discount_ID=b.discount_ID');
		$this->db->where('a.student_ID', $studid);
		$query = $this->db->get();
		//echo $this->db->last_query(); die();
		return $query->result();
	}
	function get_session_studentwise($studid){
		$this->db->from('session_master a');
		$this->db->join('student_in_session b', 'a.session_ID=b.session_ID');
		$this->db->where('b.student_ID', $studid);
		$query = $this->db->get();
		return $query->result();
	}
	function get_static_head_classwise($classid){
		$this->db->from('fee_static_head a');
		$this->db->join('static_fee_associate_class b', 'a.static_head_ID=b.static_head_ID');
		$this->db->where('b.class_sess_ID', $classid);
		$query = $this->db->get();
		//echo $this->db->last_query(); die();
		return $query->result();
	}
	function get_flexible_head_studentwise($studid){
		$this->db->from('fee_flexible_head a');
		$this->db->join('flexible_fee_associate_class b', 'a.flexible_head_ID=b.flexible_head_ID');
		$this->db->where('b.student_ID', $studid);
		$query = $this->db->get();
		//echo $this->db->last_query(); die();
		return $query->result();
	}

	/*function deleteInvoice($invid, $stdid){
		$this->db->select('student_ID,invoice_ID');
		$this->db->where('student_ID', $stdid);
		$this->db->where('invoice_ID', $invid);
		$query = $this->db->get('fee_invoice');
		$this->db->delete('fee_invoice',);
		//echo $this->db->last_query(); die();
		//return $query->row();
	}*/
	function generateInvoice($sid){
		$cls=$this->input->get('cmbClass');
		$yrf=$this->input->get('cmbYearf');
		$monf=$this->input->get('cmbMonthf');
		$yrt=$this->input->get('cmbYeart');
		$mont=$this->input->get('cmbMontht');
		
		$data['static_heads'] = $this->get_static_head_classwise($cls);

			$s_heads='';
			$s_amount_head=0;
			$s_amount=0;
			foreach ($data['static_heads'] as $item1)
			{
				if($s_heads == '')
				{
					$s_heads=$item1->fee_Head;
				}
				else {
					$s_heads=$s_heads.','.$item1->fee_Head;
				}

				if($s_amount_head == 0)
				{
					$s_amount_head=$item1->amount;
				}
				else{
					$s_amount_head=$s_amount_head.','.$item1->amount;
				}
				if($s_amount == 0)
				{
					$s_amount=$item1->amount;
				}
				else{
					$s_amount=$s_amount + $item1->amount;
				}

			}
		$data['flexible_heads'] = $this->get_flexible_head_studentwise($sid);
			$f_heads='';
			$f_amount_head=0;
			$f_amount=0;
			foreach ($data['flexible_heads'] as $item2)
			{
				if($f_heads == '')
				{
					$f_heads=$item2->fee_Head;
				}
				else
				{
			 	$f_heads=$f_heads.','.$item2->fee_Head;
				}
				if($f_amount_head == 0)
				{
					$f_amount_head=$item2->amount;
				}
				else 
				{
					$f_amount_head=$f_amount_head.','.$item2->amount;
				}

				if($f_amount == 0)
				{
					$f_amount=$item2->amount;
				}
				else 
				{
					$f_amount=$f_amount + $item2->amount;
				}

			}

		$data['discount'] = $this->get_discount_studentwise($sid);
			$d_amount='';
			foreach ($data['discount'] as $item3)
			{
				if($d_amount == '')
				{
					$d_amount = $item3->discount_Amount;
				}
				else 
				{
					$d_amount = $d_amount + $item3->discount_Amount;
				}

			}
		$session = '2018-19';
			
		$total_amount=0;
		$total_amount=$s_amount+$f_amount;
		//$app_discount=$total_amount-$d_amount;
		

		$data_ = array(
			'invoice_ID'=>null,
			'session_ID'=>$session, 
			'class_sess_ID'=>$cls, 
			'year_From'=>$yrf, 
			'month_From'=>$monf, 
			'year_To'=>$yrt, 
			'month_To'=>$mont, 
			'no_of_Month'=>1, 
			'description'=>'x', 
			'student_ID'=>$sid, 
			'static_head_ID'=>$s_heads,
			'static_head_Amount'=>$s_amount_head, 
			'flexible_head_ID'=>$f_heads, 
			'flexible_head_Amount'=>$f_amount_head, 
			'actual_Amount'=>$total_amount, 
			'applicable_discount_Amount'=>$d_amount,
			'actual_due_Amount'=>30,
			'previous_due_Amount'=>0,
			'due_Amount'=>0,
		);
		$res=$this->db->insert('fee_invoice', $data_);
		if($res == true){
			$bool = array('res'=>$res, 'newinvid'=>$this->db->insert_id());
		} else {
			$bool = array('res'=>$res, 'newinvid'=>'x');
		}
	return $bool;
	}
}

