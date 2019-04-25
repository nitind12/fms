<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_test_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}

	function submission(){
		$name_ = $this->input->post('txtName');
		$hby_ = $this->input->post('txtHobby');

		$this->db->where('name', $name_);
		$query = $this->db->get('testing');

		if($query->num_rows()!=0){
			$bool_ = array(
				'res' => false,
				'msg' => '<b class="text-danger">This name is already exists. Please try again !!</b>'
			);
		} else {

			$data = array(
				'name' => $name_,
				'hobby'=> $hby_
			);
			$this->db->insert('testing', $data);

			$bool_ = array(
				'res' => true,
				'msg' => '<b class="text-success">Record successfully inserted...</b>'
			);
		}

	return $bool_;
	}
}