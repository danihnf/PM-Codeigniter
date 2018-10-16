<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Activity extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model("m_activity");
		$this->load->model("m_admin");
		$this->load->model("m_member");

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	function index(){

		$this->load->database();
		$jumlah_data = $this->m_activity->jumlah_data();
		$this->load->library('pagination');

		$config['base_url'] = base_url().'index.php/activity/index/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 20;

		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';

		$config['first_tag_open'] = '<li>';
		$config['last_tag_open'] = '<li>';

		$config['next_tag_open'] = '<li>';
		$config['prev_tag_open'] = '<li>';

		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		$config['first_tag_close'] = '</li>';
		$config['last_tag_close'] = '</li>';

		$config['next_tag_close'] = '</li>';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = "<li class=\"active\"><span><b>";
		$config['cur_tag_close'] = "</b></span></li>";

		$this->pagination->initialize($config);

		$program_id = $this->uri->segment(3);
		$from = $this->uri->segment(4);
		$this->pagination->initialize($config);		
		$data['activity'] = $this->m_activity->data($config['per_page'],$from,$program_id);
		
		$this->load->view('v_activity', $data);
		
	}

	public function add(){
	$data['op'] = 'tambah';

	$data['program'] = $this->m_admin->daftar();
	$data['member'] = $this->m_member->daftarmember();
	$this->load->view('f_activity',$data);
	}

	public function simpan(){
		$op = $this->input->post('op');
		$id = $this->input->post('id');
		$program = $this->input->post('program');
		$activity = $this->input->post('activity');
		$start = $this->input->post('start');
		$stop = $this->input->post('stop');
		$budget = $this->input->post('budget');
		$member = $this->input->post('member');
		$progress = $this->input->post('progress');

		$data = array(
			
			'program' => $program,
			'activity' => $activity,
			'start' => $start,
			'stop' => $stop,
			'budget' => $budget,
			'member' => $member,
			'progress' => $progress,
			);
		if($op=="tambah"){
			$this->m_activity->simpan($data);
		}
		else{
			$this->m_activity->update($id,$data);
		}
		redirect('activity/index/'.$program);
	}

	public function hapus($id){
		$this->m_activity->hapus($id);
		redirect('admin');
	}

	public function edit($id){
		$data['op'] = 'edit';
		$data['sql'] = $this->m_activity->edit($id);

		$this->load->view('e_activity',$data);
	}

}

/* End of file activity.php */
/* Location: ./application/controllers/activity.php */