<?php 
require APPPATH. '/libraries/BaseController.php'; 
 
class Admin extends BaseController{
 

	function __construct(){
		parent::__construct();
		$this->isLoggedIn();
		$this->load->model('login_m');
		 
	}
 	
	function index(){
		$this->load->view('dasboard');
	}
 
}