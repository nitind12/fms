<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_model extends CI_Model {
	function authenticate(){
		$usr = $this->input->post('txtUsr');
		$pwd = $this->input->post('txtPassword');

		$this->db->where('a.username', $usr);
		$this->db->where('a.password', $pwd);
		$this->db->from('login_details a');
		$this->db->join('status_details b', 'b.status_ID=a.status_ID');
		$query = $this->db->get();
		
		if($query->num_rows()!=0){
			$bool = true;
			$r = $query->row();
			$this->session->set_userdata('user_', $r->username);
			$this->session->set_userdata('status_', $r->name);
		} else {
			$bool = false;
		}

		return $bool;
	}

	/*function submitSession(){
		$st = $this->input->post('txtStartSession');
		$end_ = $this->input->post('txtEndSession');
		$dt = $this->input->post('txtDate_');
		$id = '2026-27';
		$query = "insert into session_master (session_ID, session_Start, session_End, date) values ('$id', '$st',  '$end_', '$dt')";
		$this->db->query($query);
	}

	function getSessions(){
		$query = $this->db->query('select * from session_master');
		return $query->result();
	}*/
	/*function submitCourse(){
		$c = $this->input->post('txtCourse');
		$u = $this->input->post('txtUniversity');
		$c_id = 'mca';
		$query = "insert into course_details (course_ID,course,university) values ('$c_id','$c','$u')";
		$this->db->query($query);
	}

	function getCourse(){
		$query = $this->db->query('select * from course_details');
		return $query->result();
	}
}*/
	/*function submitstatus(){
		$nme=$this->input->post('txtname');
		$sts=$this->input->post('txtstatus');
		$stid=4;
		$query="insert into status_details(status_id,name,status) values ('$stid','$nme','$sts')";
		$this->db->query($query);
	}

	function getstatus(){
		$query = $this->db->query('select * from status_details');
		return $query->result();
	}
}*/
	
	/*function submitlogin(){
		$usr=$this->input->post('txtusername');
		$psw=$this->input->post('txtpassword');
		$dt=$this->input->post('txtdt');
		$stts=$this->input->post('txtstatus');
		$stid=$this->input->post('txtst');
		$query="insert into login_details(username,password,date,status,status_ID) values('$usr','$psw','$dt','$stts','$stid')";
		$this->db->query($query);
	}

	function getlogin(){
		$query = $this->db->query('select * from login_details');
		return $query->result();
	}
*/


		/*function submitstudentdetails(){
		$stdid='s104';
		$frstnme=$this->input->post('txtfrstnme');
		$lstnme=$this->input->post('txtlstnme');
		$fnme=$this->input->post('txtfnme');
		$mnme=$this->input->post('txtmnme');
		$ctgry=$this->input->post('txtctgry');
		$gndr=$this->input->post('txtgndr');
		$ntnlty=$this->input->post('txtntnlty');
		$dte=$this->input->post('txtdte');
		$bgrp=$this->input->post('txtbgrp');
		$stts=$this->input->post('txtstts');
		$usrnme=$this->input->post('txtusrnme');
		$query="insert into student_details(student_ID,first_Name,last_Name,fathers_Name,mothers_Name,category,gender,nationality,dob,blood_Group,status,username) values('$stdid','$frstnme','$lstnme','$fnme','$mnme','$ctgry','$gndr','$ntnlty','$dte','$bgrp','$stts','$usrnme')";
		$this->db->query($query);
	}

	function getstudentdetails(){
		$query = $this->db->query('select * from student_details');
		return $query->result();
	}*/
	/*function submitstudentaddress(){
		$add_id=$this->input->post('txtaddress_id');
		$st_id=$this->input->post('txtstudent_id');
		$add=$this->input->post('txtaddress');
		$date=$this->input->post('txtdate');
		$st=$this->input->post('txtstatus');
		$query="insert into student_address_details
		(address_ID,student_ID,address,date,status) values 
		('$add_id','$st_id','$add','$date','$st')";
		$this->db->query($query);
	}

	function getstudentaddress(){
		$query = $this->db->query('select * from student_address_details');
		return $query->result();
	}

}*/

	/*function submitsemdetails(){
		$sid=$this->input->post('txtsemid');
		$cid=$this->input->post('txtcid');
		$sem=$this->input->post('txtsem');
		$query="insert into semester_details
		(sem_ID,Course_ID,sem) values 
		('$sid','$cid','$sem')";
		$this->db->query($query);
	}

	function getsemdetails(){
		$query = $this->db->query('select * from semester_details');
		return $query->result();
	}

}*/


/*function submitdiscount(){
		$did=$this->input->post('txtdiscid');
		$dtype=$this->input->post('txtdisctype');
		$damnt=$this->input->post('txtdiscamnt');
		$unit=$this->input->post('txtunit');
		$ctgry=$this->input->post('txtctgry');
		$stts=$this->input->post('txtstts');
		$query="insert into discount_details
		(discount_ID,discount_Type,discount_Amount,unit,category,status) values 
		('$did','$dtype','$damnt','$unit','$ctgry','$stts')";
		$this->db->query($query);
	}

	function getdiscount(){
		$query = $this->db->query('select * from discount_details');
		return $query->result();
	}*/
	/*function submit_s_r_d()
	{
		$sid=$this->input->post('txtstudentid');
		$did=$this->input->post('txtdiscid');
		$off=$this->input->post('txtoffered');
		$date=$this->input->post('txtdate');
		$user=$this->input->post('txtusername');
		$stts=$this->input->post('txtstts');
		$query="insert into student_register_discount
		(student_ID,discount_ID,discount_Offered,date,username,status) values 
		('$sid','$did','$off','$date','$user','$stts')";
		$this->db->query($query);
	}

	function get_s_r_d(){
		$query = $this->db->query('select * from student_register_discount');
		return $query->result();
	}*/
	/*function submit_flexible_head()
	{
		$fid=$this->input->post('txtfid');
		$fee=$this->input->post('txtfeehead');
		$amount=$this->input->post('txtamount');
		$username=$this->input->post('txtusername');
		$date=$this->input->post('txtdate');
		$query="insert into fee_flexible_head
		(flexible_head_ID,fee_Head,amount,username,date) values 
		('$fid','$fee','$amount','$username','$date')";
		$this->db->query($query);
	}

	function get_flexible_head(){
		$query = $this->db->query('select * from fee_flexible_head');
		return $query->result();
	}*/
	/*function submit_static_head()
	{
		$sid=$this->input->post('txtsid');
		$fee=$this->input->post('txtfeehead');
		$username=$this->input->post('txtusername');
		$date=$this->input->post('txtdate');
		$amount=$this->input->post('txtamount');
		$d_app=$this->input->post('txt_d_app');
		$query="insert into fee_static_head
		(static_head_ID,fee_Head,username,date,amount,discount_Applicable) values 
		('$sid','$fee','$username','$date','$amount','$d_app')";
		$this->db->query($query);
	}

	function get_static_head(){
		$query = $this->db->query('select * from fee_static_head');
		return $query->result();
	}*/
	/*function submit_fee_type()
	{
		$tid=$this->input->post('txttid');
		$type=$this->input->post('txttype');
		$username=$this->input->post('txtusername');
		$date=$this->input->post('txtdate');
		$query="insert into fee_type
		(type_ID,type,username,date) values 
		('$tid','$type','$username','$date')";
		$this->db->query($query);
	}

	function get_fee_type(){
		$query = $this->db->query('select * from fee_type');
		return $query->result();
	}*/
	/*function submit_static_associate_fee()
	{
		$c_fee_id=$this->input->post('txt_classfeeid');
		$sess_id=$this->input->post('txt_sessid');
		$t_fee=$this->input->post('txt_tfee');
		$username=$this->input->post('txtusername');
		$date=$this->input->post('txtdate');
		$query="insert into static_fee_associate_class
		(class_fee_ID,session_ID,total_Fee,username,date) values 
		('$c_fee_id','$sess_id','$t_fee','$username','$date')";
		$this->db->query($query);
	}

	function get_static_associate_fee(){
		$query = $this->db->query('select * from static_fee_associate_class');
		return $query->result();
	}*/
}