<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Flexihead_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}

	function submission(){
		$ffh_ = $this->input->post('txtffh');
		$ffhamt_ = $this->input->post('txtffhamt');
		$hmt_ = $this->input->post('txthmt');

		$this->db->where('New_Flexible_Head', $ffh_);
		$query = $this->db->get('manage_flexible_head');

		if($query->num_rows()!=0){
			$bool_ = array(
				'res' => false,
				'msg' => '<b class="text-danger">This name is already exists. Please try again !!</b>'
			);
		} else {

			$data = array(
				'New_Flexible_Head' => $ffh_,
				'Amount'=> $ffhamt_,
				'How_Many_Times'=>$hmt_,
			);
			$this->db->insert('manage_flexible_head', $data);

			$bool_ = array(
				'res' => true,
				'msg' => '<b class="text-success">Record successfully inserted...</b>'
			);
		}

		

	return $bool_;
	}
	function getflexiheads(){
			$this->db->select('New_Flexible_Head,Amount,How_Many_Times');
			$query=$this->db->get('manage_flexible_head');
			return $query->result();
		}

}