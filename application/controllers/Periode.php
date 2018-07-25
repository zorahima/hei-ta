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
		$this->load->view('Admin/all_periode',$data);
	}
 
	function tambah(){
		$this->load->view('add_periode');
	}

	function tambah_data(){
		$periode = $this->input->post('periode');
		$periode_tahun = $this->input->post('periode_tahun');
		
 
		$data = array(
			'periode' => $periode,
			'periode_tahun' => $periode_tahun,
			
			);
		$this->Periode_model->input_data($data,'periode');
		$this->session->set_flashdata('success', 'Data berhasil ditambah');	
		redirect('Periode/index');
	}


	function update_active_periode($periode_id){
		$result= $this->Periode_model->update_active_periode($periode_id);
		$result2= $this->Periode_model->update_activate_user($periode_id);
		redirect('Periode/index');
	}
 

	function update_deactive_periode($periode_id){
		$result= $this->Periode_model->update_deactive_periode($periode_id);
		$result2= $this->Periode_model->update_deactivate_user($periode_id);
		redirect('Periode/index');
	}

		function updatePeriode() {
		$periode_id= $this->input->post('periode_id');
		$periode= $this->input->post('periode');
		$periode_tahun= $this->input->post('periode_tahun');
	
		$periodes = array(
			
			"periode" => $periode,
			"periode_tahun" => $periode_tahun,
	
			);
		$this->db-> where('periode_id', $periode_id);
		$this->db-> update('periode', $periodes);
		redirect('Periode/index');
	}
 
}