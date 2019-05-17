<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Publisher extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Publisher_model');
	}

	public function index()
	{
		
	}

	public function viewPublisher($id_publisher)
	{
		$id = $id_publisher;
		$data = $this->Publisher_model->getPublisherByID($id);
		$data = array('publisher' => $data );
		$this->load->view('/Publisher/DetailPublisher_view', $data, FALSE);

	}

	public function loadViewEdit($id_publisher)
	{
		$id = $id_publisher;
		$data = $this->Publisher_model->getPublisherByID($id);
		$data = array('publisher' => $data );
		$this->load->view('/Publisher/EditPublisher_view', $data, FALSE);
	}

	public function updateData()
	{
		$ID = $this->input->post('id');
		$Name = $this->input->post('name'); 
		$Address = $this->input->post('address'); 
		$Phone = $this->input->post('phone'); 
		$Info = $this->input->post('info');

		$publisher = array(
			'ID' => $ID, 
			'Name' => $Name, 
			'Address' => $Address, 
			'Phone' => $Phone, 
			'Info' => $Info 
		);
		if($this->Publisher_model->updateDataByID($publisher,$ID)){
			echo 1;
		}
		else{
			echo 0;
		}
	}

	public function loadViewAdd()
	{
		$this->load->view('/Publisher/AddPublisher_view');
	}

	public function insertData()
	{
		$ID = $this->input->post('id');
		$Name = $this->input->post('name'); 
		$Address = $this->input->post('address'); 
		$Phone = $this->input->post('phone'); 
		$Info = $this->input->post('info');

		$publisher = array(
			'ID' => $ID, 
			'Name' => $Name, 
			'Address' => $Address, 
			'Phone' => $Phone, 
			'Info' => $Info 
		);
		if($this->Publisher_model->insertPublisher($publisher)){
			echo 1;
		}
		else{
			echo 0;
		}
	}

	public function deleteData($id)
	{
		if($this->Publisher_model->deletePublisher($id)){
			$this->load->model('Book_model');
			$result = $this->Book_model->showDataPublisher();
			$result = array('publisher' => $result );
			$this->load->view('/Publisher/ListPublisher_view',$result);
		}
	}

}

/* End of file Publisher.php */
/* Location: ./application/controllers/Publisher.php */