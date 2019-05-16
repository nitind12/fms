<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class class_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}

	function submission(){
		
		$Course_ = $this->input->post('txtClss');
		$Semester_=$this->input->post('txtSemester');
		$Section_=$this->input->post('txtSection');

		$cid = $this->db->insert_id();
		$this->db->where('course_ID', $cid);
		$query = $this->db->get('course_details');

		if($query->num_rows()!=0){
			$bool_ = array(
				'res' => false,
				'msg' => '<b class="text-danger">This id already exists. Please try again !!</b>'
			);
		} else {

			$data = array(
				
				'course' => $Course_,
			);
			$this->db->insert('course_details', $data);

			$csid=$this->db->insert_id();

			$data1=array(
				'course_ID' => $csid,
				'sem_ID'=> $Semester_,
				'section' => $Section_,
			);
			$this->db->insert('class',$data1);
		

			$bool_ = array(
				'res' => true,
				'msg' => '<b class="text-success">Record successfully inserted...</b>'
			);
		}
	return $bool_;

	}
		function deletion($cid){
		
		$this->db->where('class_ID', $cid);
		$query=$this->db->delete('class');
		
		}

		function updation($clid){
			$this->db->where('class_ID',$clid);
			$query=$this->db->update('class');
		}

	/*function getclasses(){
			$this->db->select('*');
			//$this->db->where('fhead_ID',$str);
			//$this->db->delete('manage_flexible_head');
			$query=$this->db->get('class');
			return $query->result();
		}*/
		/*function deleteflexiheads($str){
			//$this->db->select('fhead_ID,New_Flexible_Head,Amount,How_Many_Times');
			$this->db->where('fhead_ID',$str);
			$query=$this->db->delete('manage_flexible_head');
			//$query=$this->db->get('manage_flexible_head');
			//return $query->row();
		}*/


		function getclasses(){
			$this->db->from('class a');
			$this->db->join('course_details b', 'a.course_ID=b.course_ID');
			//$this->db->join('student_in_session c', 'a.class_ID=c.class_ID');
			$query= $this->db->get();
			return $query->result();
		}

		function getClassesStudentwise(){
			$this->db->select('a.*, b.course, count(c.student_ID) as totalStudents');
			$this->db->from('class a');
			$this->db->join('course_details b', 'a.course_ID=b.course_ID');
			$this->db->join('student_in_session c', 'a.class_ID=c.class_ID');
			
			$this->db->group_by('c.class_ID');

			$query= $this->db->get();

			return $query->result();
		}
		function getclass_sess($str){
			$this->db->from('class a');
			$this->db->join('course_details b', 'a.course_ID=b.course_ID');
			$this->db->join('class_in_session c', 'a.class_ID=c.class_ID');
			$this->db->where('a.class_ID',$str);
			$query= $this->db->get();
			//echo  $query ;die();
			return $query->result();
		}

		function getCourse(){
			$this->db->select('course_ID,course');
			$query= $this->db->get('course_details');
			return $query->result();
		}
		function getclass_sesswise(){
			$this->db->from('class a');
			$this->db->join('class_in_session b', 'a.class_ID=b.class_ID');

			$query= $this->db->get();

			return $query->result();
		}
		function class_update($str)
		{
		$Course_ = $this->input->post('txtEditClass_');

		$Semester_=$this->input->post('txtEditSemester_');

		$Section_=$this->input->post('txtSection_');

		//$cid = $this->db->insert_id();
		$this->db->where('course_ID', $str);
		$query = $this->db->get('course_details');

		if($query->num_rows()!=0){
			$bool_ = array(
				'res' => false,
				'msg' => '<b class="text-danger">This id already exists. Please try again !!</b>'
			);
		} else {

			$data = array(
				
				'course' => $Course_,

			);
			$this->db->insert('course_details', $data);

			$csid=$this->db->insert_id();

			$data1=array(
				'course_ID' => $csid,
				'sem_ID'=> $Semester_,
				'section'=>$Section_,
			);
			$this->db->where('class_ID',$str);
			$this->db->insert('class',$data1);
		

			$bool_ = array(
				'res' => true,
				'msg' => '<b class="text-success">Record successfully inserted...</b>'
			);
		}
	return $bool_;

		}

	}
		