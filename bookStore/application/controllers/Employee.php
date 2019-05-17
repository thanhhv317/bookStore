<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Employee_model');
	}

	public function index()
	{
		
	}
	public function loadData()
	{
		$data = $this->Employee_model->getAllData();
		$data = array('employee' => $data );
		$this->load->view('/Employee/ListEmployee_view', $data, FALSE);
	}

	public function loadViewAdd()
	{
		$this->load->view('/Employee/AddEmployee_view');
	}

	public function insertEmployee()
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
			'ID_Type_User' => 'EMP', 
			'Image' => $Image 
		);

		if($this->Employee_model->insertData($data)){
			echo 1;
		}
		else{
			echo 0;
		}

	}

	public function viewEmployeeByID($id)
	{
		$data = $this->Employee_model->getDataByID($id);
		$data = array('employee' => $data );
		$this->load->view('/Employee/DetailEmployee_view', $data, FALSE);
	}
	public function loadViewEdit($id)
	{
		$data = $this->Employee_model->getDataByID($id);
		$data = array('employee' => $data );
		$this->load->view('/Employee/EditEmployee_view', $data, FALSE);
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
			'ID_Type_User' => 'EMP', 
			'Image' => $Image 
		);

		if($this->Employee_model->updateData($id,$data)){
			echo 1;
		}
		else{
			echo 0;
		}
	}

	public function deleteData($id)
	{
		if($this->Employee_model->deleteData($id)){
			$this->loadData();
		}
	}

}

/* End of file Employee.php */
/* Location: ./application/controllers/Employee.php */