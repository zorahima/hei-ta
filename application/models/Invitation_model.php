<?php
if(!defined('BASEPATH')) exit('No direct script allowed') ;

class Invitation_model extends CI_Model{
    function tampil_data($id){
        $this->db->select('*');
        $this->db->from('invitation');
        $this->db->join('activity', 'invitation.activity_id = activity.activity_id ');
        $this->db->join('user', 'invitation.user_id = user.user_id ');
        $this->db->where('invitation.user_id', $id);
        $query = $this->db->get();
        return $query->result();
    }

    function tampil_data_admin(){
        $this->db->select('*');
        $this->db->from('invitation');
        $this->db->join('activity', 'invitation.activity_id = activity.activity_id ');
        $this->db->join('user', 'invitation.user_id = user.user_id ');
        $query = $this->db->get();
        return $query->result();
    }

    function tampil_data_confirmation($id){
        $this->db->select('*');
        $this->db->select('user.user_name as invited');
        $this->db->select('count(*) AS banyak');
        $this->db->from('invitation');
        $this->db->join('activity', 'invitation.activity_id = activity.activity_id ');
        $this->db->join('user', 'invitation.user_id = user.user_id ');
        $this->db->where('activity.user_id', $id);
        $this->db->group_by('invitation.activity_id');
        //$this->db->group_by('activity.activity_id');
        $query = $this->db->get();
        return $query->result();
    }

    function tampil_data_confirmation_admin(){
        $this->db->select('*');
        $this->db->select('user.user_name as invited');
        $this->db->select('count(*) AS banyak');
        $this->db->from('invitation');
        $this->db->join('activity', 'invitation.activity_id = activity.activity_id ');
        $this->db->join('user', 'invitation.user_id = user.user_id ');
        $this->db->group_by('invitation.activity_id');
        $query = $this->db->get();
        return $query->result();
    }

    function getInvite() {
        $this->db->select('* ');
        $this->db->from('invitation');
        $this->db->join('user', 'invitation.user_id = user.user_id ');
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
    function update_accept_invitation($invitation_id) {
        $this->db->where('invitation_id',$invitation_id);
        return $this->db->update('invitation', array('invitation_status'=> 'accept'));
    }

    function update_decline_invitation($invitation_id) {
        $this->db->where('invitation_id',$invitation_id);
        return $this->db->update('invitation', array('invitation_status'=> 'decline'));
    }

    function update_present_invitation($invitation_id) {
        $this->db->where('invitation_id',$invitation_id);
        $this->db->update('invitation', array('invitation_confirmation'=> 'present'));
    }

    function update_absent_invitation($invitation_id) {
        $this->db->where('invitation_id',$invitation_id);
        $this->db->update('invitation', array('invitation_confirmation'=> 'absent'));
    }
    public function modelGet($id)
    {
        //Kodingan mirip kayak query biasa 
        return $this->db->join('user','user.user_id=invitation.user_id')->where('activity_id',$id)->get('invitation')->result();

    }

    function update_cancelation($invitation_id, $data) {
        $this->db->where('invitation_id',$invitation_id);
        $this->db->update('invitation', $data );
    }
}



?>
