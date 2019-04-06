<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fleximodel extends CI_Model {
	function flexiblehead_submit(){
		$flexi_id = $this->input->post('txtflexiid');
		$flexi_amount = $this->input->post('txtflexiamount');
		$query = $this->db->get('fee_flexible_head');

		if($query->num_rows()!=0){
			$bool_ = array(
				'res' => false,
				'msg' => '<b class="text-danger">This id already exists. Please try again !!</b>'
			);
		} else {

			$data = array(
				'flexible_head_ID' => $flexi_id,
				'amount' => $flexi_amount,
			);
			$this->db->insert('fee_flexible_head', $data);

			$bool_ = array(
				'res' => true,
				'msg' => '<b class="text-success">Record successfully inserted...</b>'
			);
		}

	return $bool_;
	}
}