<?php 


class Pengurus extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('Pengurus_model');
		$this->load->helper('url');
		$this->load->helper('form');

	}

	function index(){
		$data['user'] = $this->Pengurus_model->tampil_data();
		$this->load->view('all_pengurus',$data);
	}

	function tambah(){
		$data = array(
			'periodes' => $this->Pengurus_model->getPeriode(),
			'page' => 'register',
			);

		
		$this->load->view('register',$data);

		//
	}

	function profil(){
		$this->load->view('user_profil');
	}

	function tambah_data(){
		
		/*$config['upload_path']          = './assets/avatar/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 100000;
		$config['max_width']            = 100000;
		$config['max_height']           = 100000;*/

		/*$this->load->library('upload', $config);
/*		print_r($_POST);
		print_r($_FILES);
*/
		/*if(!$this->upload->do_upload('user_picture'))
		{
			echo 'Gagal upload, resolusi atau ukuran foto melebihi batas!';

		}
		else
		{*/
			//$img = $this->upload->data();
			//$user_picture = $img['file_name'];
			//$user_id= $this->input->post('user_id', true);
			$user_name = $this->input->post('user_name');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$type = $this->input->post('type');
			$user_gender = $this->input->post('user_gender');
			$user_phone = $this->input->post('user_phone');
			$user_address = $this->input->post('user_address');
			$periode_id = $this->input->post('periode_id');

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
				'periode_id' => $periode_id
				);
			$this->Pengurus_model->input_data($data,'user');
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

	

}