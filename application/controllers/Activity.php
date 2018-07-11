<?php 
 
 
class Activity extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('Activity_model');
		$this->load->model('Pengurus_model');
		$this->load->helper('url');
 
	}
 	
	function index(){
		$id = $this->session->userdata('user_id');
		if($this->session->userdata('type') == 'pengurus'){
			$activity = $this->Activity_model->tampil_data($id);
		}elseif ($this->session->userdata('type') == 'admin') {
			$activity = $this->Activity_model->tampil_data_admin();
		}
		$data = array (
			'activity' => $activity,	
			);

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
		$activity_loc = $this->input->post('activity_loc');
		$tamu_undangan = $this->input->post('user_id') ;
		$user_id = $this->session->userdata('user_id');
		$data = array(
			'activity_name' => $activity_name,
			'activity_date' => date('Y-m-d',strtotime($activity_date)),
			'activity_times' => $activity_times,
			'activity_desc' => $activity_desc,
			'activity_loc' => $activity_loc,
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
		$getEmail = $this->Activity_model->getEmail($tamu);
		 $config = Array(  
                  'protocol' => 'smtp',  
                  'smtp_host' => 'ssl://smtp.googlemail.com',  
                  'smtp_port' => 465,  
                  'smtp_user' => 'eventhimakomsi@gmail.com',   
                  'smtp_pass' => '@himakomsi',   
                  'mailtype' => 'html',   
                  'charset' => 'iso-8859-1'  
                  );  
                   $this->load->library('email', $config);  
                   $this->email->set_newline("\r\n");  
                   $this->email->from('eventhimakomsi@gmail.com', 'Events Himakomsi');   
                   $this->email->to($getEmail->email);   
                   $this->email->subject('Undangan Kegiatan');   
                   $this->email->message('Hai '.$getEmail->user_name.' kamu diundang dalam '.$activity_name.' '.$activity_date.' '.$activity_times.' '.$activity_loc.' , silahkan check undangan pada aplikasi ini ');  
                   if (!$this->email->send()) {  
                    show_error($this->email->print_debugger());   
                  }else{  
                    echo 'Success to send email';   
                  }  
                  
                }
		 

	
			$this->session->set_flashdata('success', 'Data berhasil ditambah');	
		redirect('Activity/index');
	}
 
}