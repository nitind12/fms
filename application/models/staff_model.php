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
		$sfid=$this->input->post('txtsfid');
		$doa_=$this->input->post('txtdte');
		$area_=$this->input->post('txtarea');
		$city_=$this->input->post('txtcity');
		$dstrct_=$this->input->post('txtdstrct');
		$state_=$this->input->post('txtstate');
		$pincode_=$this->input->post('txtpincode');
		$addr_=$this->input->post('txtaddr');
		$email_=$this->input->post('txtemail');

		


		

		$this->db->where('staff_ID', $sfid);
		$query = $this->db->get('staff_details');

		if($query->num_rows()!=0){
			$data1 = array(
				'first_Name' => $frstnme_,
				'last_Name' => $lstnme_,
				'category' => $ctgry_,
				'gender' => $gndr_,
				'nationality' => $ntlty_,
				'dob' => $dob_,
				'blood_Group' => $bgrp_,
				'status' => $stts_,
				'username' => $usrnme_,

				
			);
			$this->db->where('staff_ID',$sfid);
			$this->db->update('staff_details', $data1);




			$data2= array(
				'staff_ID' =>$sfid,
				'contact' => $cntct_,
				'date' =>$doa_,
			);
			$this->db->where('staff_ID',$sfid);
			$this->db->update('staff_contact_details',$data2);



			$bool_ = array(
				'res' => false,
				'msg' => '<b class="text-success">Record successfully updated!!</b>'
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
	function getStaffs($sfid=''){
		if($sfid!=''){
			$this->db->where('a.staff_ID', $sfid);
		}
		$this->db->select('a.*, b.contact,c.address,c.area,c.pincode,c.district,c.city,c.state,d.email');
		$this->db->from('staff_details a');
		$this->db->join('staff_contact_details b', 'a.staff_ID=b.staff_ID');
		$this->db->join('staff_address_details c', 'a.staff_ID=c.staff_ID');
		$this->db->join('staff_email_details d', 'a.staff_ID=d.staff_ID');
		
		$query = $this->db->get('');
		if($sfid!=''){
			return $query->row();
		} else {
			return $query->result();
		}
	}
	
}
