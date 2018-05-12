<?php

//session_start(); //we need to start session in order to access it through CI

Class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Login_m');

// Load form helper library
		$this->load->helper('form');

// Load form validation library
		$this->load->library('form_validation');

// Load session library
		$this->load->library('session');

// Load database
		//$this->load->model('Login_Database');
		if($this->session->userdata('type') == 'admin' || $this->session->userdata('type') == 'pengurus') {
			redirect('Profil/home');
		}
	}


// Show login page
	public function index() {
		$this->load->view('login');
	}

// Show registration page
	public function user_registration_show() {
		$this->load->view('registration_form');
	}

// Validate and store registration data in database

	public function login()
	{
		if(isset($_POST['login'])){
			$user = $this->input->post('email', true);
			$pass = $this->input->post('password', true);
			$cek = $this->Login_m->prosesLogin($user,md5($pass));
			$hasil = count($cek);
			if($hasil > 0){
				$this->db->where('email',$user);
				$this->db->where('password',md5($pass));
				$pelogin = $this->db->get('user')->row();
				$data = array('logged_in' => true, 'logger' => $pelogin->nama, 'SistemInformasiPerpusJenarwetan' => $pelogin->user_id, 'JenarwetanSatuPwr' => $pelogin->email, 'type' => $pelogin->type );
				$this->session->set_userdata($data);
				if($pelogin->type == 'admin' || $pelogin->type == 'pengurus'){
					redirect('Profil/home');
				} 
			}else{
				$this->session->set_flashdata('err',"<div style='color:red;'>Username atau password salah !</div>");
				redirect('login');
			} 
		}
	}

// Check for user login process
	public function user_login_process() {

		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

		if ($this->form_validation->run() == FALSE) {
			if(isset($this->session->userdata['logged_in'])){
				$this->load->view('home');
			}else{
				$this->load->view('login_form');
			}
		} else {
			$data = array(
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password')
				);
			$result = $this->login_database->login($data);
			if ($result == TRUE) {

				$email = $this->input->post('email');
				$result = $this->login_database->read_user_information($email);
				if ($result != false) {
					$session_data = array(
						'email' => $result[0]->user_name,
						'email' => $result[0]->user_email,
						);
// Add user data in session
					$this->session->set_userdata('logged_in', $session_data);
					$this->load->view('home');
				}
			} else {
				$data = array(
					'error_message' => 'Invalid email or Password'
					);
				$this->load->view('login_form', $data);
			}
		}
	}

// Logout from admin page
	public function logout() {

// Removing session data
		$sess_array = array(
			'email' => ''
			);
		$this->session->unset_userdata('logged_in', $sess_array);
		$data['message_display'] = 'Successfully Logout';
		$this->load->view('login_form', $data);
	}

}

?>