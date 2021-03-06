<?php 
require APPPATH. '/libraries/BaseController.php'; 
 
 
class Invitation extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('Invitation_model');
		$this->load->model('activity_model');
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
		if($this->session->userdata('type') == 'pengurus'){
			$confirmation = $this->Invitation_model->tampil_data_confirmation($id);
		}elseif ($this->session->userdata('type') == 'admin') {
			$confirmation = $this->Invitation_model->tampil_data_confirmation_admin();
		}
		$data = array (
			'confirmation'  => $confirmation,
			'user' => $this->Invitation_model->getInvite(),
			'activity_model' => $this->activity_model
		);

		$this->load->view('all_confirmation',$data);
		
	}

	//Index Confirmation Detail
		function index_confirmation_detail($id) {
		$id_u = $this->session->userdata('user_id');
		if($this->session->userdata('type') == 'pengurus'){
			$confirmation = $this->db->query("SELECT * FROM invitation i , activity a,user u WHERE i.activity_id = a.activity_id AND a.user_id=$id_u AND i.activity_id = $id AND u.user_id = i.user_id")->result();
		}elseif ($this->session->userdata('type') == 'admin') {
			$confirmation = $this->Invitation_model->tampil_data_confirmation_admin();
		}

		$data = array (
			'confirmation'  => $confirmation,
			'user' => $this->Invitation_model->getInvite(),
			'activity_model' => $this->activity_model
		);

		$this->load->view('confirmation_detail',$data);
		
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
		$this->session->set_flashdata('success', 'Anda bersedia hadir dalam undangan kegiatan ini ');	
		redirect('Invitation/index');
		
	}

	function update_decline_invitation($invitation_id){
		$result= $this->Invitation_model->update_decline_invitation($invitation_id);
		redirect('Invitation/index_confirmation/');
	}

	function update_present_invitation($invitation_id, $id){
		$result= $this->Invitation_model->update_present_invitation($invitation_id);
		redirect('Invitation/index_confirmation_detail/'.$id);
	}

	function update_absent_invitation($invitation_id, $id){
		$result= $this->Invitation_model->update_absent_invitation($invitation_id);
		redirect('Invitation/index_confirmation_detail/'.$id);
	}
 	
 	function get_data_invitation($id) {
 		$data = $this->Invitation_model->tampil_data_confirmation($id);
 		
 		echo json_encode($data);
 	}

 	function decline_detail() {

 		$invitation_id = $this->input->post('invitation_id');
 		$status = $this->input->post('status');
		$invitation_cancelation = $this->input->post('invitation_cancelation');
		
 
		$data = array(
			'invitation_status' => $status,
			'invitation_cancelation' => $invitation_cancelation,
			
			);
		$this->Invitation_model->update_cancelation($invitation_id,$data);
		$this->session->set_flashdata('decline', 'Anda mengkonfirmasi tidak hadir undangan kegiatan ini ');	
		redirect('Invitation/index');
 	}
}