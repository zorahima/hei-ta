<?php 
require APPPATH. '/libraries/BaseController.php'; 


class Pengurus extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('Pengurus_model');
		$this->load->model('Activity_model');
		$this->load->model('Proker_model');
		$this->load->model('Todo_model');
		$this->load->helper('url');
		$this->load->helper('form');

	}

	function index(){
		$data['user'] = $this->Pengurus_model->tampil_data();
		$this->load->view('all_pengurus',$data);
	}

	function profil() {
		$id = $this->session->userdata('user_id');
		$data = array (
			'tugas' => $this->Todo_model->tampil_data_todo($id),
			'bio'  => $this->Pengurus_model->getUserData($id),
			'user' => $this->Proker_model->getUser(),	
			'prokers'  => $this->Todo_model->getProker(),
			'activity'  => $this->Activity_model->tampil_data($id),
			'countAct' => $this->Pengurus_model->getCountActivity($id),
			'countPresent' => $this->Pengurus_model->getCountPresent($id),
			'countAbsent' => $this->Pengurus_model->getCountAbsent($id)
			/*'user' => $this->Invitation_model->getInvite()	*/
			);

		$this->load->view('user_profil',$data);
		
	}

	function tambah(){
		$data = array(
			'periodes' => $this->Pengurus_model->getPeriode(),
			'divisis' => $this->Pengurus_model->getDivisi(),
			'page' => 'register',
			);

		$this->load->view('register',$data);
	}

	function tambah_data(){

			$user_name = $this->input->post('user_name');
			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));
			$type = $this->input->post('type');
			$user_gender = $this->input->post('user_gender');
			$user_phone = $this->input->post('user_phone');
			$user_address = $this->input->post('user_address');
			$periode_id = $this->input->post('periode_id');
			$divisi_id = $this->input->post('divisi_id');

			$data = array(
				//'user_id' =>$user_id,	
				'user_name' => $user_name,
				'email' => $email,
				'password' => $password,
				'type' => $type,
				'user_gender' => $user_gender,
				'user_phone' => $user_phone,
				'user_address' => $user_address,
				//'user_picture' => $user_picture,
				'periode_id' => $periode_id,
				'divisi_id' => $divisi_id
				);
			$this->Pengurus_model->input_data($data,'user');
			$this->session->set_flashdata('success', 'Data berhasil ditambah');	
			redirect('Pengurus/index');
		}


		public function ubah_data()
		{
			$user_name = $this->input->post('user_name');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$type = $this->input->post('type');
			$user_gender = $this->input->post('user_gender');
			$user_phone = $this->input->post('user_phone');
			$user_address = $this->input->post('user_address');
			$periode_id = $this->input->post('periode_id');

			$data = array(

				'user_name' => $user_name,
				'email' => $email,
				'password' => $password,
				'type' => $type,
				'user_gender' => $user_gender,
				'user_phone' => $user_phone,
				'user_address' => $user_address,
				'periode_id' => $periode_id,
				);
			$this->Pengurus_model->input_data($data,'user');
			redirect('Pengurus/index');


		}

		function updateBio() {

		$config['upload_path']="./assets/avatar"; //path folder file upload
        $config['allowed_types']='gif|jpg|png'; //type file yang boleh di upload
        $config['encrypt_name'] = TRUE; //enkripsi file name upload

			$user_id= $this->input->post('user_id');
			$user_name= $this->input->post('user_name');
			$email= $this->input->post('email');
			$user_gender= $this->input->post('user_gender');
			$user_phone= $this->input->post('user_phone');
			$periode_id= $this->input->post('periode_id');
			$divisi_id = $this->input->post('divisi_id');

			
			var_dump($divisi_id);exit;
			$user = array(
			//"type" => 'pengurus',
				"user_name" => $user_name,
				"email" => $email,
				"user_gender" => $user_gender,
				"user_phone" => $user_phone,
				"periode_id" => $periode_id,
				"divisi_id" => $divisi_id,


				);
			$this->db-> where('user_id', $user_id);
			$this->db-> update('user', $user);
			redirect('Pengurus/profil');
		}

		function update_active_user($user_id){
			$result= $this->Pengurus_model->update_active_user($user_id);
			redirect('Pengurus/index');
		}


		function update_deactive_user($user_id){
			$result= $this->Pengurus_model->update_deactive_user($user_id);
			redirect('Pengurus/index');
		}



	}
