<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class invoice_Model extends CI_Model {

	function submit_Invoice(){
		$invoice_id=$this->input->post('txtinvoice_id');
		$sess_id=$this->input->post('txtsess_id');
		$c_sess_id=$this->input->post('txtc_sess_id');
		$yearf=$this->input->post('txtyear_f');
		$month_f=$this->input->post('txtmonth_f');
		$year_to=$this->input->post('txtyear_to');
		$month_to=$this->input->post('txtmonth_to');
		$no_of_month=$this->input->post('txtnoof_month');
		$desc=$this->input->post('txtdesc');
		$student_id=$this->input->post('txtstudent_id');
		$static_id=$this->input->post('txtstatic_id');
		$static_amount=$this->input->post('txtstatic_amount');
		$flexible_id=$this->input->post('txtflexible_id');
		$flexible_amount=$this->input->post('txtflexible_amount');
		$actual_amount=$this->input->post('txtactual_amount');
		$app_disc_amount=$this->input->post('txtapp_disc_amount');
		$actual_due_amount=$this->input->post('txtactual_due_amount');
		$previous_due_amount=$this->input->post('txtprevious_due_amount');
		$due_amount=$this->input->post('txtdue_amount');
		$query="insert into fee_invoice(invoice_ID,session_ID,class_sess_ID,year_From,month_From,year_To,month_To,
		no_of_Month,description,student_ID,static_head_ID,static_head_Amount,flexible_head_ID,flexible_head_Amount,
		actual_Amount,applicable_discount_Amount,actual_due_Amount,previous_due_Amount,due_Amount)
		 values
		 ('$invoice_id','$sess_id','$c_sess_id','$yearf','$month_f','$year_to','$month_to','$no_of_month','$desc',
		 '$student_id','$static_id','$static_amount','$flexible_id','$flexible_amount','$actual_amount',
		 '$app_disc_amount','$actual_due_amount','$previous_due_amount','$due_amount')";
		$this->db->query($query);
	}

	function get_Invoice(){
		$query = $this->db->query('select * from fee_invoice');
		return $query->result();
	}
}