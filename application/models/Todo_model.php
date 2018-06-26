<?php
if(!defined('BASEPATH')) exit('No direct script allowed') ;
 
class Todo_model extends CI_Model{
    function tampil_data($id){
        $this->db->select('todo.*,proker.*,user.*,x.user_name as sender1');
        $this->db->select('todo.sender_id as sender');
        $this->db->from('todo');
        $this->db->where('todo.user_id', $id);
        $this->db->join('proker', 'todo.proker_id = proker.proker_id');
        $this->db->join('user', 'todo.user_id = user.user_id');
        $this->db->join('user x', 'todo.sender_id = x.user_id');
        $query = $this->db->get();
        // print_r($this->db->last_query()); exit();
        return $query->result();
    }

    function tampil_data_admin(){
        $this->db->select('*');
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
        $this->db->where('type = "pengurus"');

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

    public function hapus_data($id) 
    { 
        $this->db->where('todo_id', $id);
        $delete = $this->db->delete('todo');
        return $delete; 
    }

    function update_finish_todo($todo_id) {
        $this->db->where('todo_id',$todo_id);
        $this->db->update('todo', array('todo_status'=> 'finish'));
    }

     function update_todo($id,$data){
        $this->db->where('todo_id', $id);
        $this->db->update('todo', $data);
    }
 
}



?>
