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

    function update_active_periode($periode_id) {
        $this->db->where('periode_id',$periode_id);
        $this->db->update('periode', array('periode_status'=> 'active'));
    }

    function update_deactive_periode($periode_id) {
        $this->db->where('periode_id',$periode_id);
        $this->db->update('periode', array('periode_status'=> 'deactive'));
    }

    function update_deactivate_user($periode_id){
        $this->db->where('periode_id', $periode_id);
        $this->db->update('user', array('user_status'=>'deactive'));
    }

    function update_activate_user($periode_id){
        $this->db->where('periode_id', $periode_id);
        $this->db->update('user', array('user_status' => 'active'));
    }

}



?>
