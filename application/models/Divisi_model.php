<?php
if(!defined('BASEPATH')) exit('No direct script allowed') ;
 
class Divisi_model extends CI_Model{
    function tampil_data(){
          $this->db->select('*');
        $this->db->from('divisi');
        $query = $this->db->get();
        return $query->result();
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

    function update_active_periode($periode_id) {
        $this->db->where('periode_id',$periode_id);
        $this->db->update('periode', array('periode_status'=> 'active'));
    }

    function update_deactive_periode($periode_id) {
        $this->db->where('periode_id',$periode_id);
        $this->db->update('periode', array('periode_status'=> 'deactive'));
    }

}



?>
