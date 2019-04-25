<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class static_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}

	function submission(){
		$shead_ = $this->input->post('txtshead');
		$usrnme_ = $this->input->post('txtusr');
		$dte_ = $this->input->post('txtdte');
		$amnt_ = $this->input->post('txtamnt');
		$dbap_ = $this->input->post('txtdap');

		$sid=$this->db->insert_id();

		$this->db->where('static_head_ID', $sid);
		$query = $this->db->get('fee_static_head');

		if($query->num_rows()!=0){
			$bool_ = array(
				'res' => false,
				'msg' => '<b class="text-danger">This id already exists. Please try again !!</b>'
			);
		} else {

			$data = array(
				'fee_Head' => $shead_,
				'amount' => $amnt_,
				'username' => $usrnme_,
				'date' => $dte_,
				'discount_Applicable' => $dbap_,

			);
			$this->db->insert('fee_static_head', $data);

			$bool_ = array(
				'res' => true,
				'msg' => '<b class="text-success">Record successfully inserted...</b>'
			);
		}

	return $bool_;
	}

function getstaticheads(){
		$this->db->select('fee_Head,username,amount,date,discount_Applicable');

		$query=$this->db->get('fee_static_head');
		return $query->result();


		$query= $this->db->get('fee_static_head');
		return $query->result();

	}
}

