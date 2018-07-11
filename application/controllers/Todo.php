<?php 
require APPPATH. '/libraries/BaseController.php'; 

class Todo extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('Todo_model');
		$this->load->model('Proker_model');
		$this->load->helper('url');

	}

	function index(){
		$id = $this->session->userdata('user_id');
		if($this->session->userdata('type') == 'pengurus'){
			$todo = $this->Todo_model->tampil_data($id);
		}elseif ($this->session->userdata('type') == 'admin') {
			$todo = $this->Todo_model->tampil_data_admin();
		}
		$data = array (
			'user' => $this->Proker_model->getUser(),	
			'prokers'  => $this->Todo_model->getProker(),
			'todo' => $todo,	
			);

		$this->load->view('all_todo',$data);
	}

	function tambah(){
		$data = array(
			'users' => $this->Todo_model->getUser(),
			'prokers' => $this->Todo_model->getProker(),
			'page' => 'add_todo',

			);

		
		$this->load->view('add_todo',$data);

		//
	}

	function tambah_data(){
		$todo_name = $this->input->post('todo_name');
		$todo_desc = $this->input->post('todo_desc');
		$todo_deadline = $this->input->post('todo_deadline');
		$proker_id = $this->input->post('proker_id');
		$user_id = $this->input->post('user_id');
		$sender_id = $this->session->userdata('user_id');

		$data = array(
			'todo_name' => $todo_name,
			'todo_desc' => $todo_desc,
			'todo_deadline' => $todo_deadline,
			'proker_id' => $proker_id,
			'user_id' => $user_id,
			'sender_id' => $sender_id

			);
		$this->Todo_model->input_data($data,'todo');
		redirect('Todo/index');
	}

	function updateTodo() {
		$todo_id= $this->input->post('todo_id');
		$todo_name= $this->input->post('todo_name');
		$todo_deadline= $this->input->post('todo_deadline');
		$proker_id= $this->input->post('proker_id');
		$user_id= $this->input->post('user_id');

		$todo = array(
			//"type" => 'pengurus',
			"todo_name" => $todo_name,
			"todo_deadline" => $todo_deadline,
			"proker_id" => $proker_id,
			"user_id" => $user_id
			);
		$this->db-> where('todo_id', $todo_id);
		$this->db-> update('todo', $todo);
		redirect('Todo/index');
	}

	public function hapus($id) 
	{ 
		$this->Todo_model->hapus_data($id); 
		redirect('Todo/index'); 
	}

	function update_finish_todo($todo_id){
		$result= $this->Todo_model->update_finish_todo($todo_id);
		redirect('Todo/index');
	}

}