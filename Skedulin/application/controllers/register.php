<?php
class Register extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model("m_register");
		$this->load->library('form_validation');
	}

	function index($username){
		$data["user"] = $this->m_register->getById($username);
		$this->load->view('v_options', $data);
	}

	public function addUser(){
		$user = $this->m_register;
		
		$user->addperson();	
		$this->session->set_flashdata('success', 'User disimpan');

		$this->load->view('v_login');
	}

	public function editUser($username=null)
	{
		$user = $this->m_register;

		$user->updateperson();
		$this->session->set_flashdata('success', 'Berhasil disimpan');

		$this->load->view('v_home');
	}



}

?>