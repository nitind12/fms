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

		$this->db->where('fee_Head', $ffh);
		$query = $this->db->get('fee_flexible_head');

		if($query->num_rows()!=0){
			$data = array(
				'fee_Head' => $ffh_,
				'amount'=> $ffhamt_,
				'how_many_Times'=>$hmt_,
			);
			$this->db->where('flexible_head_ID',$fidold);
			$this->db->update('fee_flexible_head', $data);


			$bool_ = array(
				'res' => false,
				'msg' => '<b class="text-success">Record successfully updated...</b>'
			);
		} else {

			$data = array(
				'Fee_Head' => $ffh_,
				'amount'=> $ffhamt_,
				'how_many_Times'=>$hmt_,
			);
			$this->db->insert('fee_flexible_head', $data);

			$bool_ = array(
				'res' => true,
				'msg' => '<b class="text-success">Record successfully inserted...</b>'
			);
		}
	return $bool_;
	}

	function deletion($fhid){
		
		$this->db->where('fhead_ID', $fhid);
		$query=$this->db->delete('manage_flexible_head');
		
		}

	function getflexiheads(){
			$this->db->select('flexible_head_ID,fee_Head,amount,how_many_Times');
			//$this->db->join('flexible_fee_associate_class b','a.flexible_head_ID = b.flexible_head_ID');
			$query=$this->db->get('fee_flexible_head');
			return $query->result();
		}
		function getflexiheads_data($str){
			//$this->db->select('flexible_head_ a');
			//$this->db->join('flexible_fee_associate_class b','a.flexible_head_ID = b.flexible_head_ID');
			$this->db->where('flexible_head_ID',$str);
			$query=$this->db->get('fee_flexible_head');
			return $query->result();
		}

		/*function deleteflexiheads($str){
			//$this->db->select('fhead_ID,New_Flexible_Head,Amount,How_Many_Times');
			$this->db->where('fhead_ID',$str);
			$query=$this->db->delete('manage_flexible_head');
			//$query=$this->db->get('manage_flexible_head');
			//return $query->row();
		}*/
	function getflexihead_students(){
		$flxhead =  $this->input->post('flex_head');
		$students = $this->input->post('std');
		//echo count($students) . "  ";
		for($i=0; $i<count($students); $i++){
			$data = array(
				'student_ID'=> $students[$i], 
				'fee_Head'=>$flxhead,
				'username'=>'fms',

			);
		}
			$this->db->insert('flexible_fee_associate_class', $data);
	}}