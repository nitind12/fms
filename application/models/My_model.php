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

			if($this->input->post('remember')){
				if(!isset($_COOKIE['user_'])) {
					$cookie_name = 'user_';
					$cookie_value = $r->username;
					setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
					$cookie_name = 'pwd_';
					$cookie_value = $pwd;
					setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
				}
			}
		} else {
			$bool = false;
		}

		return $bool;
	}
	function getStudents($stdid=''){
		if($stdid!=''){
			$this->db->where('student_ID', $stdid);
		}
		
		$query = $this->db->get('student_details');
		if($stdid!=''){
			return $query->row();
		} else {
			return $query->result();
		}
	}
	function getCourse(){
		$this->db->select('course_ID, course');
		$query = $this->db->get('course_details');
		return $query->result();
	}

	function totalStudents(){
		$this->db->select('COUNT(student_ID) AS TOTAL_');
		$query = $this->db->get('student_details');
		return $query->row();
		
	}
	
	function totalClasses(){
		$this->db->select('COUNT(class_ID) AS total');
		$query = $this->db->get('class');
		return $query->row();
		
	}
	function gettotalinvoice(){
		$this->db->select('COUNT(invoice_ID) AS TOTAL_I');
		$query = $this->db->get('fee_invoice');
		return $query->row();
	}
	function gettotalreceipt(){
		$this->db->select('COUNT(receipt_ID) AS TOTAL_R');
		$query = $this->db->get('fee_receipt');
		return $query->row();
	}
	function gettotalamount(){
		$this->db->select('SUM(paid) AS TOTAL_AMOUNT');
		$query = $this->db->get('fee_receipt');
		return $query->row();
	}
	function gettotaldues(){
		$this->db->select('SUM(due_Amount) AS TOTAL_DUE');
		$query = $this->db->get('fee_invoice');
		return $query->row();
	}
	function get_currentamount($str){
		$this->db->select('date,paid');
		$this->db->where('date',$str);
		$this->db->select('SUM(paid) AS TOTAL_AMOUNT');
		$query = $this->db->get('fee_receipt');
		return $query->row();
	}
	function get_currentreceipt($str){
		$this->db->from('student_in_session a');
		$this->db->join('fee_receipt b','a.student_ID = b.student_ID');
		$this->db->where('b.date',$str);
		$query = $this->db->get();
		return $query->result();
	}

}