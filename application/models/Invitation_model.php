<?php
if(!defined('BASEPATH')) exit('No direct script allowed') ;
 
class Invitation_model extends CI_Model{
    function tampil_data(){
        $this->db->select('activity_name,invitation_status');
        $this->db->from('invitation');
        $this->db->join('activity', 'invitation.activity_id = activity.activity_id ');
        $query = $this->db->get();
        return $query->result();
    }
 
    function input_data($data,$table){
        $this->db->insert($table,$data);
    }

/*   function getUser() {
    $this->db->select('user_id');
    $this->db->from('user');
    $this->db->where('type = pengurus');

    $query =$this->db->get();
    return $query->result();
   } */
         function getUser() {
        $this->db->select('*');
        $this->db->from('user');
        //$this->db->where('type = pengurus');

        $query =$this->db->get();
        return $query->result();
    } 
}



?>
