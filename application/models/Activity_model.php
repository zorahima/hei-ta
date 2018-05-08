<?php
if(!defined('BASEPATH')) exit('No direct script allowed') ;
 
class activity_model extends CI_Model{
    function tampil_data(){
        $this->db->select('activity_name,activity_time,activity_desc');
        $this->db->from('activity');
        $query = $this->db->get();
        return $query->result();
    }
 
    function input_data($data,$table){
        $this->db->insert($table,$data);
    }
     function getUser() {
        $this->db->select('*');
        $this->db->from('user');
        //$this->db->where('type = pengurus');

        $query =$this->db->get();
        return $query->result();
    } 
}



?>
