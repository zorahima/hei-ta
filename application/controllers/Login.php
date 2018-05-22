<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
	
	class Login extends CI_Controller
	{
    /**
			* This is default constructor of the class
		*/
    public function __construct()
    {
			parent::__construct();
			$this->load->model('Login_m');
		}
		
    /**
			* Index Page for this controller.
		*/
    public function index()
    {
			$this->isLoggedIn();
		}
    
    /**
			* This function used to check the user is logged in or not
		*/
    function isLoggedIn()
    {
			$isLoggedIn = $this->session->userdata('isLoggedIn');
			
			if(!isset($isLoggedIn) || $isLoggedIn != TRUE)
			{
				$this->load->view('login');
			}
			else
			{
				redirect('dashboard');
			}
		}
    
    
    /**
			* This function used to logged in user
		*/
    public function loginMe()
    {
			$this->load->library('form_validation');
			
			$this->form_validation->set_rules('email', 'email', 'required|trim');
			$this->form_validation->set_rules('password', 'password', 'required');
			
			if($this->form_validation->run() == FALSE)
			{
				$this->index();
			}
			else
			{
				$username = $this->input->post('email');
				$password = $this->input->post('password');
				
				$result = $this->Login_m->loginMe($username, $password);
				
				if(count($result) > 0)
				{
					foreach ($result as $res)
					{
						$sessionArray = array(
						'user_id'=>$res->user_id,
						'email'=>$res->email,
						'isLoggedIn' => TRUE
						);
						
						$this->session->set_userdata($sessionArray);
						
						redirect('admin');
					}
				}
				else
				{
					$this->session->set_flashdata('error', 'Email or password mismatch');
					
					redirect('admin');
				}
			}
		}
		
		public function logout() {
			$this->session->sess_destroy();
			
			redirect('login');
		}
	}
	
?>
