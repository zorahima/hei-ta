<?php 
require APPPATH. '/libraries/BaseController.php'; 

class Timeline extends CI_Controller{

	function __construct(){
		parent::__construct();		


	}

	function index(){
		$data['calendar']= $this->db->get('activity')->result();
		$data['proker']= $this->db->get('proker')->result();

		$this->load->view('timeline', $data);
	}



}
