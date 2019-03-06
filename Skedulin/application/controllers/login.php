<?php 
 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
		$this->load->model("m_register");
		$this->load->library('form_validation');
 
	}
 
	function index(){	
		$this->load->view('v_login');	
	}
 
	function aksi_login(){
		
		$this->form_validation->set_rules('name','Username','required');
		$this->form_validation->set_rules('password','Password','required');

		if ($this->form_validation->run() != false ){
			
			$this->load->view('v_login');
		}
		// Create connection
		$conn = new mysqli('localhost','root','', 'skedulindb');

		// Check connection
		if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
    		$post_display = mysqli_real_escape_string($conn, $_POST['displayname']);
    	}
    	
		$username = $this->input->post('name');
		$password = $this->input->post('password');
		$query = "SELECT * FROM person WHERE Person_nama='$username'";

		$where = array(
			'Person_nama' => $username,
			'password' => $password,
		);

		$cek = $this->m_login->cek_login("person",$where)->num_rows();
			if($cek > 0){
 
			$data_session = array(
				'name' => $username,
				'status' => "login",
				'display' => $rec
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("index.php/Home"));
 
			}
			
			else{
				$this->load->view('v_login');
				$message = "Wrong Password Or Username";
				echo "<script type='text/javascript'> alert ('$message'); </script>";


			}
		}

		function edit($id){
			$where = array('Person_Id' => $id);
			$data['person'] = $this->m_login->edit_data($where, 'person')->result();
			$this->load->view('v_options', $data);
		}
		
		function logout(){
			$this->session->sess_destroy();
			redirect(base_url("index.php/login"));
		}

}
?>