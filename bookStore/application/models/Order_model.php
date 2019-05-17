<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function insertData($array,$user,$customer,$id_user)
	{
		$data = $array;
		$data2 = $user;
		$data3 = $customer;
		$id = $id_user;

		if($data2!=null){
			$this->db->insert('user', $data2);
		}
		if($data3!=null){
			$this->db->where('ID', $id);
			$this->db->update('user', $data3);
		}

		foreach ($data as $key => $value) {
			$this->db->insert('the_order', $value);
		}
		return $this->db->insert_id();
		
	}

}

/* End of file Order_model.php */
/* Location: ./application/models/Order_model.php */