<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Author_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function insertAuthor($object)
	{
		return $this->db->insert('author', $object);
	}

	public function getAuthorByID($id)
	{
		$this->db->select('*');
		$this->db->where('ID', $id);
		$result = $this->db->get('author');
		$result = $result->result_array();
		return $result;
	}

	public function updateAuthorByID($id,$object)
	{
		$this->db->where('ID', $id);
		return $this->db->update('author', $object);
	}

	public function deleteAuthorByID($id)
	{
		$this->db->where('ID', $id);
		return $this->db->delete('author');
	}

	public function get3Author()
	{
		$this->db->select('*');
		$result = $this->db->get('author', 3);
		$result = $result->result_array();
		return $result;
	}

}

/* End of file Author_model.php */
/* Location: ./application/models/Author_model.php */