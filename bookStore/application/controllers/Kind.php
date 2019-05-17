<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kind extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kind_model');
	}

	public function index()
	{
		
	}

	public function loadViewEdit($id)
	{
		$data = $this->Kind_model->getKindByID($id);
		$data= array('kind' => $data );
			
		$this->load->view('/Kind/EditKind_view', $data, FALSE);
	}

	public function updateData($id)
	{
		$ID = $this->input->post('id');
		$Name = $this->input->post('name');
		$data = array(
			'ID' => $ID, 
			'Name' => $Name 
		);
		if($this->Kind_model->updateKindByID($data,$id)){
			echo 1;
		}
		else
		{
			echo 0;
		}
	}
	public function deleteData($id)
	{
		$this->Kind_model->deleteKindByID($id);
		$this->load->model('Book_model');
		$result = $this->Book_model->showDataKindBook();
		$result = array('kind' => $result );
		$this->load->view('/Kind/ListKindOfBook_view',$result);
	}
	public function loadViewAdd()
	{
		$this->load->view('/Kind/AddKind_view');
	}
	public function insertData()
	{
		$ID = $this->input->post('id');
		$Name = $this->input->post('name');
		$data = array(
			'ID' => $ID, 
			'Name' => $Name 
		);
		if($this->Kind_model->insertKind($data))
		{
			echo 1;
		}
		else
		{
			echo 0;
		}
	}
}

/* End of file Kind.php */
/* Location: ./application/controllers/Kind.php */