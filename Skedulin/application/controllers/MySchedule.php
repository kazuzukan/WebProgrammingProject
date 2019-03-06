<?php
class MySchedule extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model("m_event");

		if($this->session->userdata('status') != "login"){
			redirect(base_url("index.php/login"));
		}
	}
 
	function index(){
		$Person_Id = $this->uri->segment(3); 
		$data["events"] = $this->m_event->getById($Person_Id);
		$this->load->view('v_MySchedule', $data);
	}

	public function addEvent($Person_Id){
		$event = $this->m_event;

		$event->save($Person_Id);
		$this->session->set_flashdata('success', 'Event disimpan');

		redirect(site_url('MySchedule/index/'.$Person_Id));
	}

	public function edit()
	{
		$id= $this->uri->segment(3); 
		$Person_Id = $this->uri->segment(4);
		$event = $this->m_event;

		$event->update($Person_Id);
		$this->session->set_flashdata('success', 'Berhasil disimpan');
		
		redirect(site_url('MySchedule/index/'.$Person_Id));

	}

	public function delete($id=null) {
		$Person_Id = $this->uri->segment(4);
        if (!isset($id)) show_404();
        
        if ($this->m_event->delete($id)) {
            redirect(site_url('MySchedule/index/'.$Person_Id));
        }
    }
}
?>