<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model("m_report");
		$this->load->model("m_activity");
		$this->load->model("m_admin");

		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function index(){ 

		$id_activity = $this->uri->segment(3);
		$data = '';
		$data['id_activity']=$id_activity;
		$data['report']='';
		$this->load->database();
		$jumlah_data = $this->m_report->jumlah_data($id_activity); 
		$dataList = $this->m_report->data($id_activity); 

		if ($dataList->num_rows()>0) {
			foreach($dataList->result_array() as $dt)
			{  
				$data_history = $this->m_report->history($dt['id']);
				$data['report'][] = array('id'=>$dt['id'],'activity'=>$dt['activity'],'budget'=>$dt['budget'],'tgl'=>$dt['tgl'],'progress'=>$dt['progress'],'history'=>$data_history->result_array());
			}
		} 

		$this->load->view('v_report', $data);
	}

	public function add(){
		$data['op'] = 'tambah';

		$id = $this->uri->segment(3);
		$data['nama'] = $this->m_activity->detail($id);
		$this->load->view('f_report',$data);	
	}

	public function simpan(){
		$op = $this->input->post('op');
		$id = $this->input->post('id');
		$activity = $this->input->post('activity');
		$budget = $this->input->post('budget');
		$progress = $this->input->post('progress');
		$report = $this->input->post('report');
		$tgl = $this->input->post('tgl');
		$parent=$this->input->post('parent_id');

		$data = array(
			
			'activity' => $activity,
			'budget' => $budget,
			'progress' => $progress,
			'report' => $report,
			'tgl'=>date('Y-m-d-h-i-s'),
			'parent_id'=>0,

			);
		if($op=="tambah"){
			$this->m_report->simpan($data);
		}
		else{
			$this->m_report->update($id,$data);
		}
		redirect('report/index/'.$id);
	}

	public function edit($id){

		$id = $this->input->post('id');
		$parent=$this->input->post('parent_id');
		$activity_post = $this->input->post('activity');
		$budget_post = $this->input->post('budget');
		$progress_post = $this->input->post('progress');
		$report_post = $this->input->post('report');

		$detail = $this->m_report->detail($id,$parent);
		if($detail->num_rows()){

			$data_detail = $detail->row();
			$activity = $data_detail->activity.','.$activity_post;

			$data2 = array(
				'parent_id'=>$data_detail->id,
				'activity' =>$data_detail->activity,
				'budget' =>$data_detail->budget,
				'progress' =>$data_detail->progress,
				'report' =>$data_detail->report,
				'tgl'=>date('Y-m-d-H-i-s'),
				);
			$this->m_report->simpan($data2);

			$data = array(
				'activity'=>$activity_post,
				'budget'=>$budget_post,
				'progress'=>$progress_post,
				'report'=>$report_post,
				); 
			$this->m_report->update($id,$data); 
		}
		redirect('admin');
	}
	
	public function report(){ 

		$data['op'] = 'edit';
		$id=$this->uri->segment('3');
		if($id){

			$datane = $this->m_report->detail($id); 
			if($datane->num_rows()){
				$data['detail'] = $datane;
			}else{ 
				redirect('report'); 
			}
		}else{ 
			redirect('report'); 
		} 
		$this->load->view('report', $data);

	}
}

/* End of file activity.php */
/* Location: ./application/controllers/activity.php */