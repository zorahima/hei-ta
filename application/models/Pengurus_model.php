<?php
if(!defined('BASEPATH')) exit('No direct script allowed') ;
 
class Pengurus_model extends CI_Model{
    function tampil_data(){
        $this->db->select('user_name,email,user_address,user_gender,user_phone, user_picture, periode');
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
}



?>