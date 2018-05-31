<?php
if(!defined('BASEPATH')) exit('No direct script allowed') ;
 
class activity_model extends CI_Model{
    function tampil_data($id){
        $this->db->select('*');
        $this->db->from('activity');
         $this->db->where('activity.user_id', $id);
         $this->db->join('user', 'activity.user_id = user.user_id');
        $query = $this->db->get();
        return $query->result();
    }
 
    function input_data($data,$table){
        //
        $this->db->trans_start();
        $this->db->insert($table,$data);
        $id=$this->db->insert_id(); //get id yang barusan dibuat yang membuat act
        $this->db->trans_complete();
        return $id;
    }
     function getUser() {
        $this->db->select('*');
        $this->db->from('user');
        //$this->db->where('type = pengurus');

        $query =$this->db->get();
        return $query->result();
    } 

    function getTamu()
    {
        $this->db->select_count('*');
        $this->db->from('invitation');
        $this->db->order_by('activity_id');

        return $query->result();


    }

    function modelGet($id)
    {
        //Kodingan mirip kayak query biasa 
        return $this->db->join('user','user.user_id=invitation.user_id')->where('activity_id',$id)->get('invitation')->result();
        



    }
}



?>
