<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Customer_model');
	}

	public function index()
	{
		
	}

	public function loadData()
	{
		$data = $this->Customer_model->getAllData();
		$data = array('customer' => $data );
		$this->load->view('/Customer/ListCustomer_view', $data, FALSE);
	}

	public function loadViewAdd()
	{
		$this->load->view('/Customer/AddCustomer_view');
	}

	public function insertCustomer()
	{
		$ID = $this->input->post('id');
		$Username = $this->input->post('username');
		$Password = $this->input->post('password');
		$Name = $this->input->post('name');
		$Address = $this->input->post('address');
		$Phone = $this->input->post('phone');
		$Mail = $this->input->post('mail');
		$Birthday = $this->input->post('birthday');
		$Image = $this->input->post('imageAvatar');

		$data = array(
			'ID' => $ID, 
			'Username' => $Username, 
			'Password' => $Password, 
			'Name' => $Name, 
			'Address' => $Address, 
			'Phone' => $Phone, 
			'Mail' => $Mail, 
			'Birthday' => $Birthday, 
			'ID_Type_User' => 'CUS', 
			'Image' => $Image 
		);

		if($this->Customer_model->insertData($data)){
			echo 1;
		}
		else{
			echo 0;
		}

	}

	public function viewCustomerById($id)
	{
		$data = $this->Customer_model->getDataByID($id);
		$data = array('customer' => $data );
		$this->load->view('/Customer/DetailCustomer_view', $data, FALSE);
	}
	public function loadViewEdit($id)
	{
		$data = $this->Customer_model->getDataByID($id);
		$data = array('customer' => $data );
		$this->load->view('/Customer/EditCustomer_view', $data, FALSE);
	}
	public function updateData($id)
	{
		$ID = $this->input->post('id');
		$Username = $this->input->post('username');
		$Password = $this->input->post('password');
		$Name = $this->input->post('name');
		$Address = $this->input->post('address');
		$Phone = $this->input->post('phone');
		$Mail = $this->input->post('mail');
		$Birthday = $this->input->post('birthday');
		$Image = $this->input->post('imageAvatar');

		$data = array(
			'ID' => $ID, 
			'Username' => $Username, 
			'Password' => $Password, 
			'Name' => $Name, 
			'Address' => $Address, 
			'Phone' => $Phone, 
			'Mail' => $Mail, 
			'Birthday' => $Birthday, 
			'ID_Type_User' => 'CUS', 
			'Image' => $Image 
		);

		if($this->Customer_model->updateData($id,$data)){
			echo 1;
		}
		else{
			echo 0;
		}
	}

	public function deleteData($id)
	{
		if($this->Customer_model->deleteData($id)){
			$this->loadData();
		}
	}

}

/* End of file Customer.php */
/* Location: ./application/controllers/Customer.php */