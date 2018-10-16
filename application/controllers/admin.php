<?php 

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model("m_admin");
		$this->load->model("m_member");
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	function index(){

		$this->load->database();
		$jumlah_data = $this->m_admin->jumlah_data();
		$this->load->library('pagination');

		$config['base_url'] = base_url().'index.php/admin/index/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 5;

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

		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$data['program'] = $this->m_admin->data($config['per_page'],$from);
		$this->load->view('tabel');
		$this->load->view('isi', $data);
		$this->load->view('footer');
	}

	public function add(){
		$data['op'] = 'tambah';
		
		$data['member'] = $this->m_member->daftarmember();
		$this->load->view('form',$data);	
	}

	public function simpan(){
		$op = $this->input->post('op');
		$id = $this->input->post('id');
		$program = $this->input->post('program');
		$deskripsi = $this->input->post('deskripsi');
		$start = $this->input->post('start');
		$stop = $this->input->post('stop');
		$budget = $this->input->post('budget');
		$member = $this->input->post('member');
		$progress = $this->input->post('progress');

		$data = array(
			'program' => $program,
			'deskripsi' => $deskripsi,
			'start' => $start,
			'stop' => $stop,
			'budget' => $budget,
			'member' => $member,
			'progress' => $progress,
			);
		if($op=="tambah"){
			$this->m_admin->simpan($data);
		}
		else{
			$this->m_admin->update($id,$data);
		}
		redirect('admin');
	}

	public function hapus($id){
		$this->m_admin->hapus($id);
		redirect('admin');
	}

	public function edit($id){
		$data['op'] = 'edit';
		$data['sql'] = $this->m_admin->edit($id);

		$this->load->view('formedit',$data);	
	}

}