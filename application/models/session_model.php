<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class session_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}

	function submission(){
		$sid_ = $this->input->post('txtsid');
		$sstart_ = $this->input->post('txtsstart');
		$send_=$this->input->post('txtsend');
		$dte_=$this->input->post('txtdte');

		$this->db->where('session_ID', $sid_);
		$query = $this->db->get('session_master');

		if($query->num_rows()!=0){
			$bool_ = array(
				'res' => false,
				'msg' => '<b class="text-danger">This id already exists. Please try again !!</b>'
			);
		} else {

			$data = array(
				'session_ID' => $sid_,
				'session_Start' => $sstart_,
				'session_End' => $send_,
				'date'=> $dte_
			);
			$this->db->insert('session_master', $data);

			$bool_ = array(
				'res' => true,
				'msg' => '<b class="text-success">Record successfully inserted...</b>'
			);
		}

	return $bool_;
	}

	function getsessions(){
		$this->db->select('session_ID,session_Start,session_End,date');
		$query= $this->db->get('session_master');
		return $query->result();
	}
}