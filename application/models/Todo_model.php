<?php
if(!defined('BASEPATH')) exit('No direct script allowed') ;
 
class Todo_model extends CI_Model{
    function tampil_data(){
        $this->db->select('todo_name, todo_deadline, proker_name,user_name ');
        $this->db->from('todo');
        $this->db->join('proker', 'todo.proker_id = proker.proker_id');
        $this->db->join('user', 'todo.user_id = user.user_id');
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
    function getProker() {
        $this->db->select('*');
        $this->db->from('proker');
        //$this->db->where('type = pengurus');

        $query =$this->db->get();
        return $query->result();
    } 
}



?>
