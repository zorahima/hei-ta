<?php 
require APPPATH. '/libraries/BaseController.php'; 
 
 
class Invitation extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('Invitation_model');
		$this->load->helper('url');
 
	}
 	
	function index(){
		$id = $this->session->userdata('user_id');
		if($this->session->userdata('type') == 'pengurus'){
			$invitation = $this->Invitation_model->tampil_data($id);
		}elseif ($this->session->userdata('type') == 'admin') {
			$invitation = $this->Invitation_model->tampil_data_admin();
		}
		$data = array (
			'invitation' => $invitation,	
			);
		$this->load->view('all_invitation',$data);
	}

	//Index Confirmation
	function index_confirmation() {
		$id = $this->session->userdata('user_id');
		$data = array (
			'confirmation'  => $this->Invitation_model->tampil_data_confirmation($id),
			'user' => $this->Invitation_model->getInvite()	
			);

		$this->load->view('all_confirmation',$data);
		
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

	function update_present_invitation($invitation_id){
		$result= $this->Invitation_model->update_present_invitation($invitation_id);
		redirect('Invitation/index_confirmation');
	}

	function update_absent_invitation($invitation_id){
		$result= $this->Invitation_model->update_absent_invitation($invitation_id);
		redirect('Invitation/index_confirmation');
	}
 
}