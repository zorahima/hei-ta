<?php 
 
 
class Activity extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('Activity_model');
		$this->load->model('Pengurus_model');
		$this->load->helper('url');
 
	}
 	
	function index(){
		$data['activity'] = $this->Activity_model->tampil_data();
		$this->load->view('all_activity',$data);
	}
 

	/*function tambah(){
		$data = array(
		'users' => $this->Activity_model->getUser(),
		'page' => 'add_activity',
		);
		$this->load->view('add_activity');
	}*/

	function tambah(){
		$data = array(
		'users' => $this->Activity_model->getUser(),
		'page' => 'add_activity',
		);

		
		$this->load->view('add_activity',$data);

		//
	}

	function tambah_data(){
		$activity_name = $this->input->post('activity_name');
		$activity_date = $this->input->post('activity_date');
		$activity_times = $this->input->post('activity_times');
		$activity_desc = $this->input->post('activity_desc');
		$tamu_undangan = $this->input->post('user_id') ;
		$user_id = 1;
 
		$data = array(
			'activity_name' => $activity_name,
			'activity_date' => $activity_date,
			'activity_times' => $activity_times,
			'activity_desc' => $activity_desc,
			'user_id' =>$user_id
			);
		
		$activity_id = $this->Activity_model->input_data($data,'activity');
		foreach ($tamu_undangan as $tamu) 
		{
			$data2 = array(
			'activity_id' => $activity_id,
			'user_id' => $tamu

			);
		$this->Activity_model->input_data($data2,'invitation');
		 }




		

		redirect('Activity/index');
	}
 
}