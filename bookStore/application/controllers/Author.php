<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include 'UploadHandler.php';

class Author extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Author_model');
	}

	public function index()
	{
		
	}

	public function loadViewAddAuthor()
	{
		$this->load->view('/Author/AddAuthor_view');
	}

	public function uploadFile()
	{
		$uploadfile = new UploadHandler();
	}

	public function insertData()
	{
		$ID = $this->input->post('id');
		$Name = $this->input->post('name');
		$Birthday = $this->input->post('birthday');
		$Info = $this->input->post('info');
		$Image = $this->input->post('imageAvatar');

		$data = array(
			'ID' => $ID, 
			'Name' => $Name, 
			'Birthday' => $Birthday, 
			'Info' => $Info, 
			'Image' => $Image 
		);

		if($this->Author_model->insertAuthor($data)){
			echo 1;
		}
		else
		{
			echo 0;
		}

	}

	public function loadAuthorByID($id)
	{
		$data = $this->Author_model->getAuthorByID($id);
		$data = array('author' => $data );
		$this->load->view('/Author/DetailAuthor_view', $data, FALSE);
	}

	public function loadViewEditAuthor($id)
	{
		$data = $this->Author_model->getAuthorByID($id);
		$data = array('author' => $data );
		$this->load->view('/Author/EditAuthor_view', $data, FALSE);
	}

	public function updateAuthor($id)
	{
		$ID = $this->input->post('id');
		$Name = $this->input->post('name');
		$Birthday = $this->input->post('birthday');
		$Info = $this->input->post('info');
		$Image = $this->input->post('image');

		$data = array(
			'ID' => $ID, 
			'Name' => $Name, 
			'Birthday' => $Birthday, 
			'Info' => $Info, 
			'Image' => $Image 
		);

		if($this->Author_model->updateAuthorByID($ID,$data))
		{
			echo 1;
		}
		else
		{
			echo 0;
		}
	}
	public function deleteAuthor($id)
	{
		if($this->Author_model->deleteAuthorByID($id)){
			$this->load->model('Book_model');
			$result = $this->Book_model->showDataAuthor();
			$result = array('author' => $result );
			$this->load->view('ListAuthor_view',$result);
		}
	}

}

/* End of file Author.php */
/* Location: ./application/controllers/Author.php */