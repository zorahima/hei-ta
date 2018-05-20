<?php 
 
 
class Invitation extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('Invitation_model');
		$this->load->helper('url');
 
	}
 	
	function index(){
		$data['invitation'] = $this->Invitation_model->tampil_data();
		$this->load->view('all_invitation',$data);
	}
 
	function tambah(){
		$this->load->view('add_invitation');
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
	function update_accept_invitation($invitation_id){
		$result= $this->Invitation_model->update_accept_invitation($invitation_id);
		redirect('Invitation/index');
	}

	function update_decline_invitation($invitation_id){
		$result= $this->Invitation_model->update_decline_invitation($invitation_id);
		redirect('Invitation/index');
	}
 
}