<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TopBanner_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getDataTopBanner()
	{
		$this->db->select('*');
		$this->db->where('Name', 'top_banner');
		$result = $this->db->get('homepageattr');

		$result = $result->result_array();
		foreach ($result as $key => $value) {
			$tmp = $value['Content'];
		}
		return $tmp;
	}

	public function updateDataTopBanner($data)
	{
		$object = array(
			'Name' => 'top_banner',
			'Content' =>$data 
		);
		$this->db->where('Name', 'top_banner');
		return $this->db->update('homepageattr', $object);
	}

}

/* End of file TopBanner_model.php */
/* Location: ./application/models/TopBanner_model.php */