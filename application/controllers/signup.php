<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model("m_activity");
		$this->load->model("m_admin");
		$this->load->model("m_member");

	}

	public function index()
	{
		$this->load->view('v_signup');
	}

	public function simpan(){
		$op = $this->input->post('op');
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$data = array(
			
			'name' => $name,
			'username' => $username,
			'email' => $email,
			'password' => md5($password),

			);

		if($op=="tambah"){
			$this->m_member->simpan($data);
		}
		else{
			$this->m_member->update($id,$data);
		}
		redirect('login');
	}

}

/* End of file signup.php */
/* Location: ./application/controllers/signup.php */