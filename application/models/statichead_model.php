<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class statichead_model extends CI_Model {
	

	function submission(){
		$sth_ = $this->input->post('txtsth');
		$sthamt_ = $this->input->post('txtsthamt');
		$hmt_ = $this->input->post('txthmt');

		$sthid=$this->db->insert_id();

		$this->db->where('fee_Head', $sth_);
		$query = $this->db->get('fee_static_head');

		if($query->num_rows()!=0){
			$data = array(
				'fee_Head' => $sth_,
				'amount'=> $sthamt_,
				'how_many_Times'=>$hmt_,
			);
			$this->db->where('static_head_ID',$sthid);
			$this->db->update('fee_static_head', $data);


			$bool_ = array(
				'res' => false,
				'msg' => '<b class="text-success">Record successfully updated...</b>'
			);
		} else {

			$data = array(
				'fee_Head' => $sth_,
				'amount'=> $sthamt_,
				'how_many_Times'=>$hmt_,
			);
			$this->db->insert('fee_static_head', $data);

			$bool_ = array(
				'res' => true,
				'msg' => '<b class="text-success">Record successfully inserted...</b>'
			);
		}
	return $bool_;
	}
		function getstatichead(){
			//$this->db->select('flexible_head_ a');
			//$this->db->join('flexible_fee_associate_class b','a.flexible_head_ID = b.flexible_head_ID');
			$this->db->select('static_head_ID,fee_Head,amount,how_many_Times');
			$query=$this->db->get('fee_static_head');
			return $query->result();
		}
		function getstatichead_data($str){
			//$this->db->select('flexible_head_ a');
			//$this->db->join('flexible_fee_associate_class b','a.flexible_head_ID = b.flexible_head_ID');
			$this->db->where('static_head_ID',$str);
			$query=$this->db->get('fee_static_head');
			return $query->result();
		}
		function deletion($shid){
		$this->db->where('static_head_ID', $shid);
		$query=$this->db->delete('fee_static_head');
		
		}
		function getclasses(){
			//$this->db->select('flexible_head_ a');
			//$this->db->join('flexible_fee_associate_class b','a.flexible_head_ID = b.flexible_head_ID');
			$this->db->from('class a');
			$this->db->join('class_in_session b','a.class_ID=b.class_ID');
			$query=$this->db->get();

			return $query->result();
		}
		function getstatichead_classwise(){
			$statichead =  $this->input->post('static_head');
		//print_r($statichead);
		$class = $this->input->post('classes');
		//print_r($class);
		
		//for($i=0; $i<count($classes); $i++){
			$data = array(
				'static_head_ID	'=>$statichead,
				'username'=>'fms',
				'class_sess_ID'=>$class,

			);
			$this->db->insert('static_fee_associate_class', $data);
	}
	function getstatichead_details(){
		$this->db->select('class_sess_ID,static_head_ID');
		$query=$this->db->get('static_fee_associate_class');
		//echo $this->db->last_query(); 
		return $query->result();
	}
	function updatestaticheads_data($str)
		{

		$fhead = $this->input->post('txtffh');
		$amnt=$this->input->post('txtffhamt');
		$hmt=$this->input->post('txthmt');

		//$cid = $this->db->insert_id();
		//$this->db->where('flexible_head_ID', $str);
		/*$query = $this->db->get('fee_flexible_head');

		if($query->num_rows()!=0){
			$bool_ = array(
				'res' => false,
				'msg' => '<b class="text-danger">This id already exists. Please try again !!</b>'
			);
		} else {*/

			$data=array(
				'fee_Head' => $fhead,
				'amount'=> $amnt,
				'how_many_Times'=>$hmt,
			);
			$this->db->where('static_head_ID',$str);
			$this->db->update('fee_static_head',$data);
		

			$bool_ = array(
				'res' => true,
				'msg' => '<b class="text-success">Record successfully inserted...</b>'
			);
		return $bool_;

		}
}