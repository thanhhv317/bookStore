<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kind_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getKindByID($id)
	{
		$this->db->select('*');
		$this->db->where('ID', $id);
		$result = $this->db->get('kind');
		$result = $result->result_array();
		return $result;
	}
	
	public function updateKindByID($object,$id)
	{
		$this->db->where('ID', $id);
		return $this->db->update('kind', $object);
	}

	public function deleteKindByID($id)
	{
		$this->db->where('ID', $id);
		return $this->db->delete('kind');
	}
	public function insertKind($object)
	{
		return $this->db->insert('kind', $object);
	}

}

/* End of file Kind_model.php */
/* Location: ./application/models/Kind_model.php */