<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class session_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}

	function submission(){
		//$sid_ = $this->input->post('txtsid');
		$start_ = $this->input->post('txtstart');
		$send_=$this->input->post('txtsend');
		$dte_=$this->input->post('txtdte');

		//$this->db->where('session_ID', $sid_);
		$query = $this->db->get('session_master');

		if($query->num_rows()!=0){
			$bool_ = array(
				'res' => false,
				'msg' => '<b class="text-danger">This id already exists. Please try again !!</b>'
			);
		} else {
			$sid_= $start_."-".$send_;
			$data = array(
				'session_ID' => $sid_,
				'session_Start' => $start_,
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

	function classsubmission(){
		$c_sess_id_ = $this->input->post('txtc_sess_id');
		$sid_ = $this->input->post('txtsid');
		$class_=$this->input->post('txclass');

		$this->db->where('class_sess_ID', $c_sess_id_);
		$query = $this->db->get('class_in_session');

		if($query->num_rows()!=0){
			$bool_ = array(
				'res' => false,
				'msg' => '<b class="text-danger">This id already exists. Please try again !!</b>'
			);
		} else {

			$data = array(
				'class_in_session' => $c_sess_id_,
				'session_ID' => $sid_,
				'class' => $class_,
			);
			$this->db->insert('class_in_session', $data);

			$bool_ = array(
				'res' => true,
				'msg' => '<b class="text-success">Record successfully inserted...</b>'
			);
		}

	return $bool_;
	}
	function deletion($sid){
		
		$this->db->where('session_ID', $sid);
		$query=$this->db->delete('session_master');
		
		}

	/*function getsessions(){
			$this->db->select('*');
			//$this->db->where('fhead_ID',$str);
			//$this->db->delete('manage_flexible_head');
			$query=$this->db->get('session_master');
			return $query->result();
		}*/
		/*function deleteflexiheads($str){
			//$this->db->select('fhead_ID,New_Flexible_Head,Amount,How_Many_Times');
			$this->db->where('fhead_ID',$str);
			$query=$this->db->delete('manage_flexible_head');
			//$query=$this->db->get('manage_flexible_head');
			//return $query->row();
		}*/


	function getsessions(){
		$this->db->select('session_ID,session_Start,session_End,date');

		$query=$this->db->get('session_master');
		return $query->result();


		$query= $this->db->get('session_master');
		return $query->result();

	}
}