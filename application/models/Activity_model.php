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

    function tampil_data_admin(){
        $this->db->select('*');
        $this->db->from('activity');
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
        $this->db->where('type = "pengurus"');

        $query =$this->db->get();
        return $query->result();
    } 

    function getEmail($user_id) {
        $this->db->where('user_id', $user_id);
        return $this->db->get('user')->row();
    }

    function getTamu()
    {
        $this->db->select_count('*');
        $this->db->from('invitation');
        $this->db->order_by('activity_id');

        return $query->result();
    }

     public function modelGet($id)
    {
        return 
            $this->db
            ->join('user','user.user_id=invitation.user_id')
            ->where('activity_id',$id)
            ->get('invitation')
            ->result();
        
    }
         function getDivisi() {
        $this->db->select('*');
        $this->db->from('divisi');

        $query =$this->db->get();
        return $query->result();
    }

    public function getUserByDivisi($id){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('divisi_id', $id);
        $query = $this->db->get();

        return $query->result();
    }
    

}



?>
