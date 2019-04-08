<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class staff_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}

	function submission(){
		$frstnme_ = $this->input->post('txtfrstnme');
		$lstnme_ = $this->input->post('txtlstnme');
		$ctgry_ = $this->input->post('txtctgry');
		$gndr_ = $this->input->post('txtfmle');
		$gndr_ = $this->input->post('txtmle');
		$ntlty_ = $this->input->post('txtntnlty');
		$dob_ = $this->input->post('txtdte');
		$bgrp_ = $this->input->post('txtbgrp');
		$stts_ = $this->input->post('txtstts');
		$usrnme_ = $this->input->post('txtusrnme');
		$dsgntn_=$this->input->post('txtdsgntn');
		$cntct_=$this->input->post('txtcntct');


		

		$this->db->where('first_Name', $frstnme_);
		$query = $this->db->get('staff_details');

		if($query->num_rows()!=0){
			$bool_ = array(
				'res' => false,
				'msg' => '<b class="text-danger">This name already exists. Please try again !!</b>'
			);
		} else {

			$data = array(
				'first_Name' => $frstnme_,
				'last_Name' => $lstnme_,
				'category' => $ctgry_,
				'gender' => $gndr_,
				'nationality' => $ntlty_,
				'dob' => $dob_,
				'blood_Group' => $bgrp_,
				'status' => $stts_,
				'username' => $usrnme_,
				'designation'=>$dsgntn_,

				
			);	
			$this->db->insert('staff_details', $data);
			$sid = $this->db->insert_id();

			$data2=array(
				'staff_ID' => $sid,
				'contact'=> $cntct_,
			);
			$this->db->insert('staff_contact_details',$data2);
			
			

			


			$bool_ = array(
				'res' => true,
				'msg' => '<b class="text-success">Record successfully inserted...</b>'
			);
		}

	return $bool_;
	}
	
}
