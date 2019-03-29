<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class receipt_model  extends CI_Model {

function getclasses_sessionwise($session){
 $this->db->where('session_id',$session);
 $query=$this->db->get('class_in_session');
 echo $this->db->last_query();
}
}