<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class flexmodel extends CI_Model {
	function __construct(){
		parent::__construct();
	}

	function submission(){
		$fhead_ = $this->input->post('txtfhead');
		$usrnme_ = $this->input->post('txtuser');
		$dte_ = $this->input->post('txtdte');
		$amnt_ = $this->input->post('txtamnt');

		$fid=$this->db->insert_id();

		$this->db->where('flexible_head_ID', $fid);
		$query = $this->db->get('fee_flexible_head');

		if($query->num_rows()!=0){
			$bool_ = array(
				'res' => false,
				'msg' => '<b class="text-danger">This id already exists. Please try again !!</b>'
			);
		} else {

			$data = array(
				'fee_Head' => $fhead_,
				'amount' => $amnt_,
				'username' => $usrnme_,
				'date' => $dte_,

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