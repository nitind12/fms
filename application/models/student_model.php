<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class student_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}

	function submission(){
		$frstnme_ = $this->input->post('txtfrstnme');
		$lstnme_ = $this->input->post('txtlstnme');
		$fnme_ = $this->input->post('txtfnme');
		$mnme_ = $this->input->post('txtmnme');
		$ctgry_ = $this->input->post('txtctgry');
		$gndr_ = $this->input->post('txtfmle');
		$gndr_ = $this->input->post('txtmle');
		$ntlty_ = $this->input->post('txtntnlty');
		$dob_ = $this->input->post('txtdte');
		$bgrp_ = $this->input->post('txtbgrp');
		$stts_ = $this->input->post('txtstts');
		$usrnme_ = $this->input->post('txtusrnme');
		$cntct_ = $this->input-> post('txtcntct');
		$email_ = $this->input-> post('txtemail');
		$area_=$this->input->post('txtarea');
		$city_=$this->input->post('txtcity');
		$dstrct_=$this->input->post('txtdstrct');
		$state_=$this->input->post('txtstate');
		$pincode_=$this->input->post('txtpincode');
		$addr_=$this->input->post('txtaddr');
		$sidold = $this->input->post('txtstid');
		$doa_ = $this->input->post('txtdoa'); 
		$sib_ = $this->input->post('txtsibling');
		$dis_ = $this->input->post('disc');
		$txtdisc_ = $this->input->post('txtdisc');






		

		$this->db->where('student_ID', $sidold);
		$query = $this->db->get('student_details');

		if($query->num_rows()!=0){
			$data1 = array(
				'first_Name' => $frstnme_,
				'last_Name' => $lstnme_,
				'fathers_Name' => $fnme_,
				'mothers_Name' => $mnme_,
				'category' => $ctgry_,
				'gender' => $gndr_,
				'nationality' => $ntlty_,
				'dob' => $dob_,
				'blood_Group' => $bgrp_,
				'status' => $stts_,
				'username' => $usrnme_,

				
			);
			$this->db->where('student_ID',$sidold);
			$this->db->update('student_details', $data1);




			$data2= array(
				'student_ID' =>$sidold,
				'contact' => $cntct_,
				'date' =>$doa_,
			);
			$this->db->where('student_ID',$sidold);
			$this->db->update('student_contact_details',$data2);

			$data3= array(
				'student_ID' =>$sidold,
				'email' => $email_,
				'date' =>$doa_,
			);
			$this->db->where('student_ID',$sidold);
			$this->db->update('student_email_details',$data3);

			$data4= array(
				'student_Id'=> $sidold,
				'address'=> $addr_,
				'area'=> $area_,
				'district'=> $dstrct_,
				'city'=> $city_,
				'state'=> $state_,
				'pincode'=> $pincode_,
			);
			$this->db->where('student_ID',$sidold);
			$this->db->update('student_address_details',$data4);

			$data5= array(
				'student_ID'=>$sidold,
				'siblings'=>$sib_,
			);
			$this->db->where('student_ID',$sidold);
			$this->db->update('siblings',$data5);

			$data6= array(
				'student_ID' =>$sidold,
				'discount_offered' => $txtdisc_,
				'discount_on' => $dis_,
			);
			$this->db->where('student_ID',$sidold);
			$this->db->update('discount',$data6);

			$bool_ = array(
				'res' => false,
				'msg' => '<b class="text-success">Record successfully updated!!</b>'
			);
		} else {

			$data1 = array(
				'first_Name' => $frstnme_,
				'last_Name' => $lstnme_,
				'fathers_Name' => $fnme_,
				'mothers_Name' => $mnme_,
				'category' => $ctgry_,
				'gender' => $gndr_,
				'nationality' => $ntlty_,
				'dob' => $dob_,
				'blood_Group' => $bgrp_,
				'status' => $stts_,
				'username' => $usrnme_,

				
			);

			$this->db->insert('student_details', $data1);

			$sid=$this->db->insert_id();



			$data2= array(
				'student_ID' =>$sid,
				'contact' => $cntct_,
				'date' =>$doa_,
			);
			$this->db->insert('student_contact_details',$data2);

			$data3= array(
				'student_ID' =>$sid,
				'email' => $email_,
				'date' =>$doa_,
			);
			$this->db->insert('student_email_details',$data3);

			$data4= array(
				'student_Id'=> $sid,
				'address'=> $addr_,
				'area'=> $area_,
				'district'=> $dstrct_,
				'city'=> $city_,
				'state'=> $state_,
				'pincode'=> $pincode_,
			);
			$this->db->insert('student_address_details',$data4);

			$data5= array(
				'student_ID'=>$sid,
				'siblings'=>$sib_,
			);
			$this->db->insert('siblings',$data5);

			$data6= array(
				'student_ID' => $sid,
				'discount_offered' => $txtdisc_,
				'discount_on' => $dis_,
			);
			$this->db->insert('discount',$data6);


			$bool_ = array(
				'res' => true,
				'msg' => '<b class="text-success">Record successfully inserted...</b>'
			);
		}

	return $bool_;
	}
	function getStudents($stdid=''){
		if($stdid!=''){
			$this->db->where('a.student_ID', $stdid);
		}
		//$this->db->select('a.*,b.contact,c.email,c.date,d.address,d.area,d.city,d.pincode,d.state,d.district,e.siblings,f.discount_offered,f.discount_on,h.course, h.course_ID,j.sem_ID,j.section');
		$this->db->from('student_details a');
		$this->db->join('student_contact_details b', 'a.student_ID=b.student_ID');
		$this->db->join('student_email_details c', 'a.student_ID=c.student_ID');
		$this->db->join('student_address_details d' , 'a.student_ID=d.student_ID');
		$this->db->join('siblings e', 'a.student_ID=e.student_ID');
		$this->db->join('discount f', 'a.student_ID=f.student_ID');
		$this->db->join('student_academic_details g', 'a.student_ID=g.student_ID');
		$this->db->join('course_details h', 'g.course_ID=h.course_ID');
		$this->db->join('student_in_session i', 'g.student_ID=i.student_ID');
		$this->db->join('class j','j.class_ID=i.class_ID');
		$query = $this->db->get();
		//echo $this->db->last_query();
		if($stdid!=''){
			return $query->row();
		} else {
			return $query->result();
		}
	}

	function getStudentsCoursewise($crsid){
		$this->db->where('class_ID', $crsid);
		$this->db->from('student_details a');
		$this->db->join('student_in_session b', 'a.student_ID=b.student_ID');

		$query=$this->db->get();
		return $query->result();
	}
	function getCourse(){
		$this->db->select('course_ID, course');
		$query = $this->db->get('course_details');
		return $query->result();
	}
	



}