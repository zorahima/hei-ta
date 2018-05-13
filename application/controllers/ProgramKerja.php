<?php 


class ProgramKerja extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('Proker_model');
		$this->load->model('Pengurus_model');
		$this->load->helper('url');

	}

	function index(){
		$data = array (
			'proker'  => $this->Proker_model->tampil_data(),
			'user' => $this->Proker_model->getUser()	
			);

		$this->load->view('all_proker',$data);
	}

	function tambah(){
		$data = array(
			'users' => $this->Proker_model->getUser(),
			'page' => 'add_proker',
			);

		
		$this->load->view('add_proker',$data);

	}

	function update($id) {
		// $this->load->helper('url');
		// $data = array(
		// // 'user' => $this->Proker_model->getUser(),
		// // 'page' => 'all_proker',
		// 'proker_name' => $this->input->post('proker_name'),
		// 'proker_date' => $this->input->post('proker_date'),
		// //$users = $this->Proker_model->getUser();
		// 'proker_id' => $this->input->post('proker_id'),
		// 'user_id' => $this->input->post('user_id')
		// );
		// $proker_id = $this->input->post('proker_id');
		// $this->db->where('proker_id', $proker_id);
		// $update = $this->db->update('proker', $data);
		
		// $this->load->view('all_proker',$data);
		$data = array (
			'proker_name' => $this->input->post('proker_name'),
			'proker_date' => $this->input->post('proker_date'),
			'user_id' => $this->input->post('user_id')
			);
		$proker_date = $this->input->post('proker_id');
		$this->db->where('proker_id', $proker_id);
		$update = $this->db->update('proker', $data);
		echo json_encode(array("status" => true));

	}

	function detail_proker($id){
		$this->db->where('proker_id', $id);
		$query = $this->db->get('penerbit')->row();
		if($query){
			echo json_encode(array('data'=>$query, 'status' =>true));
		}
	}
	function tambah_data(){
		$this->load->helper('url');
		$data = array (
			'proker_name' => $this->input->post('proker_name'),
			'proker_date' => $this->input->post('proker_date'),
		//$users = $this->Proker_model->getUser();
			'user_id' => $this->input->post('user_id')
			); 
		// $data = array(
		// 	'proker_name' => $proker_name,
		// 	'proker_date' => $proker_date,
		// 	'user_id' => $user_id
		// 	//'users' => $user_id

		// 	);
		//$this->Proker_model->input_data($data,'proker');
		$this->db->insert('proker', $data);
		// return view
		redirect('ProgramKerja/index');
	}

	// Function to Delete selected record from database.
	function delete_proker() {
		$id = $this->uri->segment(3);
		$this->Proker_model->delete_proker($id);
		$this->show_student_id();
	}


}