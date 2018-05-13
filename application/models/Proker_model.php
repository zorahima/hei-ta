<?php
if(!defined('BASEPATH')) exit('No direct script allowed') ;

class Proker_model extends CI_Model{
    function tampil_data(){
        $this->db->select('*');
        $this->db->from('proker');
        $this->db->join('user', 'proker.user_id = user.user_id');
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

    public function hapus_data($id) 
    { 
        $this->db->where('proker_id', $id);
        $delete = $this->db->delete('proker');
        return $delete; 
    }





}




?>
