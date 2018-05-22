<?php if ( !defined('BASEPATH')) exit('No direct script access allowed');	
class Auth_m extends CI_Model
{	
	 private $table_name = 'user';	
	 function __construct()	
	 {	
	 	 parent :: __construct();	
	 	 //$this->load->model(array('Encrypt_m'));	
	 }	
	 function process_login($login_array_input = NULL)	{	
	 	 if(!isset($login_array_input) OR count($login_array_input) != 2)	
	 	 	 return	false;
	 	 	 //set	its	variable	
	 	 	 $email = $login_array_input[0];	
	 	 	 $password = $login_array_input[1];	
	 	 	 //	select	data	from	database	to	check	user	exist	or	not?	
	 	 	
	 	 	 $this->db->select('*') ;
	 	 	 $this->db->from($this->table_name) ;
	 	 	 $query = $this->db->get() ;

	 	 	 if	($query->num_rows() == 1) {	
	 	 	 	 $row = $query->row();	
	 	 	 	 $user_id = $row->id_user;
	 	 	 	 $id_bidang = $row->id_bidang;
	 	 	 	 $nama_bidang = $row->nama_bidang ;
	 	 	 	 $email = $row->email ;
	 	 	 	 $user_pass = $row->password;	
	 	 	 	 $user_salt = $row->salt;
	 	 	 	 $id_ktp = $id_ktp.''; // id_ktp jadikan string 
	 	 	 	 
	 	 	 	 if($this->Encrypt_m->encryptUserPwd($password, $user_salt) === $user_pass)	{	
		 	 	 	 $this->session->set_userdata('logged_user', $user_id);	
	 	 	 	 	 $this->session->set_userdata('id_ktp', $id_ktp);	
	 	 	 	 	 $this->session->set_userdata('email', $email);
	 	 	 	 	 $this->session->set_userdata('id_bidang', $id_bidang);
	 	 	 	 	 $this->session->set_userdata('nama_bidang', $nama_bidang) ;
	 	 	 	 	
	 	 	 	 	 return	true;	
	 	 	 	 }	
	 	 	 	 return	false;	
	 	 	 }	
	 	 return	false;	
	 }	
	 function check_logged(){	
	 	 return	($this->session->userdata('logged_user'))? TRUE:FALSE;	
	 }	
	 function logged_id(){
		 return	($this->check_logged())? $this->session->userdata('logged_user'):'';	
	 }	
}	