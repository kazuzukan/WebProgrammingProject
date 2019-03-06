<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class m_event extends CI_Model
{
	
	private $table = "event";

	//attribute event
	public $Event_id;
	public $Event_nama;
	public $Event_tanggal;
	public $Event_start;
	public $Event_stop;
	Public $Person_Id;

	public function save($Person_Id){
		$post = $this->input->post();
		$this->Event_id = uniqid();
		$this->Event_nama = $post["Event_nama"];
		$this->Event_tanggal = $post["Event_tanggal"];
		$this->Event_start = $post["Event_start"];
		$this->Event_stop = $post["Event_stop"];
		$this->Person_Id = $Person_Id;

		$this->db->insert($this->table, $this); 
	}

	public function update($Person_Id){
		$post = $this->input->post();
		$this->Event_id = $post["id"];
		$this->Event_nama = $post["Event_nama"];
		$this->Event_tanggal = $post["Event_tanggal"];
		$this->Event_start = $post["Event_start"];
		$this->Event_stop = $post["Event_stop"];
		$this->Person_Id = $Person_Id;

		$this->db->update($this->table, $this, array('Event_id' => $post['id']));
	}

	public function getAll(){
        return $this->db->get($this->table)->result();
    }

    public function getById($Person_Id)
    {
        return $this->db->get_where($this->table, ["Person_Id" => $Person_Id])->result();
    }

    public function delete($id) {
        return $this->db->delete($this->table, array("Event_id" => $id));
    }
}
 ?>