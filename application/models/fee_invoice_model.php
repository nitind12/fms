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

	function generateInvoice($sid){
		$cls=$this->input->get('cmbClass');
		$yrf=$this->input->get('cmbYearf');
		$monf=$this->input->get('cmbMonthf');
		$yrt=$this->input->get('cmbYeart');
		$mont=$this->input->get('cmbMontht');
		
		$data['static_heads'] = $this->get_static_head_classwise($cls);

			$s_heads='';
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
			$d_amount=0;
			foreach ($data['discount'] as $item3)
			{
				if($d_amount == 0)
				{
					$d_amount = $item3->discount_Amount;
				}
				else 
				{
					$d_amount = $discount + $item3->discount_Amount;
				}

			}
		$session = '2018-19';
			
		$total_amount=0;
		$total_amount=$s_amount+$f_amount;
		$app_discount=$total_amount-$d_amount;
		

		$data_ = array(
			'receipt_ID'=>1,
			'invoice_ID'=>1,
			'student_ID'=>1000,
			'discount_ID'=>10,
			'discount_Status'=>1,
			'discount_Amount'=>	100,
			'description'=>
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
		$bool=$this->db->insert('fee_invoice', $data_);
	return $bool;
	}
}

