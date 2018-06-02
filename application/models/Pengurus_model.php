<?php
if(!defined('BASEPATH')) exit('No direct script allowed') ;
 
class Pengurus_model extends CI_Model{
    function tampil_data(){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('periode', 'periode.periode_id = user.periode_id');
        
        $query = $this->db->get();
        return $query->result();
        //'user', 'proker.user_id = user.user_id'
    }
 
    function input_data($data,$table){
        $this->db->insert($table,$data);
    }

      function getPeriode() {
        $this->db->select('*');
        $this->db->from('periode');
        //$this->db->where('type = pengurus');

        $query =$this->db->get();
        return $query->result();
    } 

        function getUserData($id){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('periode', 'periode.periode_id = user.periode_id');
        $this->db->where('user.user_id', $id);
        
        $query = $this->db->get();
        return $query->result();
        
    }

       function update_user($id,$data){
        $this->db->where('user_id', $id);
        $this->db->update('user', $data);
    }

    function update_active_user($user_id) {
        $this->db->where('user_id',$user_id);
        $this->db->update('user', array('user_status'=> 'active'));
    }

    function update_deactive_user($user_id) {
        $this->db->where('user_id',$user_id);
        $this->db->update('user', array('user_status'=> 'deactive'));
    }


 
}



?>
