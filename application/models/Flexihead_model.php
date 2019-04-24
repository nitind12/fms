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

		$fidold=$this->db->insert_id();

		$this->db->where('New_Flexible_Head', $ffh);
		$query = $this->db->get('manage_flexible_head');

		if($query->num_rows()!=0){
			$data = array(
				'New_Flexible_Head' => $ffh_,
				'Amount'=> $ffhamt_,
				'How_Many_Times'=>$hmt_,
			);
			$this->db->where('fhead_ID',$fidold);
			$this->db->update('manage_flexible_head', $data);


			$bool_ = array(
				'res' => false,
				'msg' => '<b class="text-success">Record successfully updated...</b>'
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