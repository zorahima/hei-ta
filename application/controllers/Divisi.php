<?php 
require APPPATH. '/libraries/BaseController.php'; 
 
 
class Divisi extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('Divisi_model');
		$this->load->helper('url');
 
	}
 	
	function index(){
		$data['divisi'] = $this->Divisi_model->tampil_data();
		$this->load->view('all_divisi',$data);
	}
 
	function tambah(){
		$this->load->view('add_divisi');
	}

	function dasboard(){
		$this->load->view('dasboard');
	}

	function tambah_data(){
		$divisi_name = $this->input->post('divisi_name');
		$data = array(
			'divisi_name' => $divisi_name,
			);
		$this->Divisi_model->input_data($data,'divisi');
		redirect('Divisi/index');
	}

		function updateDivisi() {
		$divisi_id= $this->input->post('divisi_id');
		$divisi_name= $this->input->post('divisi_name');

		$divisi = array(
			"divisi_name" => $divisi_name,
			);
		$this->db-> where('divisi_id', $divisi_id);
		$this->db-> update('divisi', $divisi);
		redirect('Divisi/index');
	} 

}