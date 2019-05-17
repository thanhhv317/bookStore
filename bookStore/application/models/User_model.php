<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function checkAccount($user,$pass)
	{
		$this->db->select('*');
		$this->db->where('Username', $user);
		$this->db->where('Password', $pass);
		$result = $this->db->get('user');
		$result = $result->result_array();
		return $result;
	}

	public function updateUser($id,$type,$object)
	{
		$this->db->where('ID', $id);
		$this->db->where('ID_Type_User', $type);
		return $this->db->update('user', $object);
	}

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */