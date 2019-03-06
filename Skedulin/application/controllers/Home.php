<?php
class Home extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model("m_event");
		$this->load->model("m_register");
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}
	}
 
	function index(){
		
		$this->load->view('v_home');
	}

	function MySchedule(){
		redirect(base_url('index.php/MySchedule'));
	}

	public function addEvent(){
		$event = $this->m_event;

		$event->save();
		$this->session->set_flashdata('success', 'Event disimpan');

		$this->load->view('v_home');
	}
}
?>