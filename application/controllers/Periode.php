<?php 
require APPPATH. '/libraries/BaseController.php'; 
 
 
class Periode extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('Periode_model');
		$this->load->helper('url');
 
	}
 	
	function index(){
		$data['periode'] = $this->Periode_model->tampil_data();
		$this->load->view('all_periode',$data);
	}
 
	function tambah(){
		$this->load->view('add_periode');
	}

	function dasboard(){
		$this->load->view('dasboard');
	}

	function tambah_data(){
		$periode = $this->input->post('periode');
		$periode_tahun = $this->input->post('periode_tahun');
		
 
		$data = array(
			'periode' => $periode,
			'periode_tahun' => $periode_tahun,
			
			);
		$this->Periode_model->input_data($data,'periode');
		redirect('Periode/index');
	}

	function update_deactive_periode($periode_id){
		$result= $this->Periode_model->update_deactive_periode($periode_id);
		redirect('Periode/index');
	}
 
}