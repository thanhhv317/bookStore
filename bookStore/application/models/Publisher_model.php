<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Publisher_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getPublisherByID($id)
	{
		$this->db->select('*');
		$this->db->where('ID', $id);
		$data = $this->db->get('publisher');
		$data = $data->result_array();
		return $data;
	}

	public function updateDataByID($data,$id)
	{
		$this->db->where('ID', $id);
		return $this->db->update('publisher', $data);
	}

	public function insertPublisher($data)
	{
		return $this->db->insert('publisher', $data);
	}

	public function deletePublisher($id)
	{
		$this->db->where('ID', $id);
		return $this->db->delete('publisher');
	}

}

/* End of file Publisher_model.php */
/* Location: ./application/models/Publisher_model.php */