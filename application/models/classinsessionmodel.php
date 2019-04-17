<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class classinsessionmodel extends CI_Model {
	function __construct(){
		parent::__construct();
	}

	function submission(){
		$csid = $this->input->post('txtcsid');
		$sid_ = $this->input->post('txtsid');
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
			);
			$this->db->insert('class_in_session', $data);
            $sid= $this->db->insert_id();
            $data2= array(
            	'class_sess_ID' =>$sid,
                'session_ID'=>$sid_,
           );
                $this->db->insert('session_master',$data2);

                $data3=array(
                	'class_sess_ID' =>$sid,
                	'class_ID'=>$clss,

                );
                	$this->db->insert('class',$data3);

			$bool_ = array(
				'res' => true,
				'msg' => '<strong class="text-success">Record successfully inserted...</strong>'
			);
		}

	return $bool_;
}

	function getclassinsessions(){
		$this->db->select('class_sess_ID,session_ID,class_ID');
		$query= $this->db->get('class_in_session');
		return $query->result();
	
	}
}