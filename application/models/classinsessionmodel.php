<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class classinsessionmodel extends CI_Model {
	function __construct(){
		parent::__construct();
	}

	function submission(){
		$csid = $this->input->post('txtcsid');
		$sid = $this->input->post('txtsid');
		$clss = $this->input->post('txtclass');

		$this->db->where('class_sess_ID', $csid);
		$query = $this->db->get('class_in_session');

		if($query->num_rows()!=0){
			$bool_ = array(
				'res' => false,
				'msg' => '<strong>The name already exists. Please try again !!</strong>'
			);
		} else {

			$data = array(
				'class_sess_ID' => $csid,
				'session_ID'=> $sid,
				'class' => $clss
			);
			$this->db->insert('class_in_session', $data);

			$bool_ = array(
				'res' => true,
				'msg' => '<strong class="text-success">Record successfully inserted...</strong>'
			);
		}

	return $bool_;
	}
}