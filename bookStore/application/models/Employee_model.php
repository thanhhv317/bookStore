<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getAllData()
	{
		$this->db->select('*');
		$this->db->where('ID_Type_User', 'EMP');
		$result = $this->db->get('user');
		$result = $result->result_array();
		return $result;
	}

	public function insertData($object)
	{
		return $this->db->insert('user', $object);
	}

	public function getDataByID($id)
	{
		$this->db->select('*');
		$this->db->where('ID_Type_User', 'EMP');
		$this->db->where('ID', $id);
		$result = $this->db->get('user');
		$result = $result->result_array();
		return $result;
	}

	public function updateData($id,$object)
	{
		$this->db->where('ID', $id);
		$this->db->where('ID_Type_User', 'EMP');
		return $this->db->update('user', $object);
	}

	public function deleteData($id)
	{
		$this->db->where('ID', $id);
		$this->db->where('ID_Type_User', 'EMP');
		return $this->db->delete('user');
	}

}

/* End of file Employee_model.php */
/* Location: ./application/models/Employee_model.php */