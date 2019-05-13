<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class classinsessionmodel extends CI_Model {
	function __construct(){
		parent::__construct();
	}

	function submission(){
		$csid = $this->input->post('classes');
		$classes_in_text = $this->input->post('classes_in_text');
		$sess = '2018-19';
		for ($i=0; $i<count($csid); $i++){
			$this->db->where('class_ID', $csid[$i]);
			$this->db->where('session_ID', $sess);
			$query = $this->db->get('class_in_session');

			if($query->num_rows()!=0){

			} else {
				$xx = explode("_", $csid[$i]);
				$ii = $xx[0]; 
				$csid__ = $classes_in_text[$ii-1]."-".$sess;
				$data = array(
					'class_sess_ID'=>$csid__,
					'class_ID' => $xx[1],
					'session_ID'=>$sess
				);
				$this->db->insert('class_in_session', $data);
				echo $this->db->last_query();
				$bool_ = array(
					'res' => true,
					'msg' => '<strong class="text-success">Record successfully inserted...</strong>'
				);
			}
		}
		//die();
	return $bool_;
}

	function getclassinsession($str){
		$this->db->from('class a');
		$this->db->join('class_in_session b','a.class_ID=b.class_ID');
		$this->db->where('session_ID',$str);
		$query= $this->db->get();
		return $query->result();
	}
}