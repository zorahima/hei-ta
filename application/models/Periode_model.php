<?php
if(!defined('BASEPATH')) exit('No direct script allowed') ;
 
class Periode_model extends CI_Model{
    function tampil_data(){
        $this->db->select('count(user.user_id) AS banyak,periode,periode_tahun,periode_status,periode.periode_id');
        $this->db->from('periode'); 
        $this->db->join('user', 'periode.periode_id = user.periode_id', 'left');
        
        $this->db->GROUP_BY('periode.periode_id');
        
        $query = $this->db->get();
        return $query->result();
        //'user', 'proker.user_id = user.user_id'
    }
 
    function input_data($data,$table){
        $this->db->insert($table,$data);
    }

    function getPeriode() {
        $this->db->select('periode');
        $this->db->from('periode');
        //$this->db->where('type = pengurus');

        $query =$this->db->get();
        return $query->result();
    } 
}



?>
