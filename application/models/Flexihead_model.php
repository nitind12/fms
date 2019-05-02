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

	function deletion(){
		$ffh_ = $this->input->post('txtffh');
		$ffhamt_ = $this->input->post('txtffhamt');
		$hmt_ = $this->input->post('txthmt');
		$fidold=$this->db->insert_id();

		$data = array(
				'New_Flexible_Head' => $ffh_,
				'Amount'=> $ffhamt_,
				'How_Many_Times'=>$hmt_,
			);

				$this->db->where('fhead_ID', $fidold);
				$this->db->delete('manage_flexible_head',$data);
		}

	function getflexiheads(){
			$this->db->select('fhead_ID,New_Flexible_Head,Amount,How_Many_Times');
			//$this->db->where('fhead_ID',$str);
			//$this->db->delete('manage_flexible_head');
			$query=$this->db->get('manage_flexible_head');
			return $query->result();
		}
		/*function deleteflexiheads($str){
			//$this->db->select('fhead_ID,New_Flexible_Head,Amount,How_Many_Times');
			$this->db->where('fhead_ID',$str);
			$query=$this->db->delete('manage_flexible_head');
			//$query=$this->db->get('manage_flexible_head');
			//return $query->row();
		}*/

}