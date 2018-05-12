<?php 
 
 
class ProgramKerja extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('Proker_model');
		$this->load->model('Pengurus_model');
		$this->load->helper('url');
 
	}
 	
	function index(){
		$data['proker'] = $this->Proker_model->tampil_data();
		$this->load->view('all_proker',$data);
	}
 
	function tambah(){
		$data = array(
		'users' => $this->Proker_model->getUser(),
		'page' => 'add_proker',
		);

		
		$this->load->view('add_proker',$data);

		//
	}



	function tambah_data(){
		$proker_name = $this->input->post('proker_name');
		$proker_date = $this->input->post('proker_date');
		//$users = $this->Proker_model->getUser();
		$user_id = $this->input->post('user_id');
 
		$data = array(
			'proker_name' => $proker_name,
			'proker_date' => $proker_date,
			'user_id' => $user_id
			//'users' => $user_id

			);
		$this->Proker_model->input_data($data,'proker');
		// return view
		 redirect('ProgramKerja/index');
	}
 
}