<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html

	  public function all_staff(){ 
    $data =  array(
      'page' => 'dashboard/manajer/all_staff',
      'result' => $this->staff_model->ambil_user(),
    );

    $this->load->view('home',$data);
  }
	 */

	function __construct(){
		parent::__construct();
		    $this->load->model('pengurus_model');
		
	}

	public function home()
	{
		$this->load->view('home');
	}

	public function all_pengurus()
	{ $data = array(
		'result' => $this->pengurus_model->tampil_data(),
		'page' => 'all_pengurus',
		);

		$this->load->view('all_pengurus', $data);
	}

	public function all_proker()
	{
		$this->load->view('all_proker');
	}

	public function add_proker()
	{
		$this->load->view('input_proker');
	}


	public function input_proker()
	{
		$this->load->view('input_proker');
	}

	public function input_activity()
	{
		$this->load->view('add_activity');
	}
		
	public function all_todo()
	{
		$this->load->view('all_todo');
	}

	public function input_todo()
	{
		$this->load->view('add_todo');
	}
	public function all_activity()
	{
		$this->load->view('all_activity');
	}

	public function timeline()
	{
		$this->load->view('timeline');
	}
	 public function login()
	{
		$this->load->view('loginAdmin');
	}
	 public function add_pengurus()
	{
		$this->load->view('register');
	}

}
