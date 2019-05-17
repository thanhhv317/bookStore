<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include 'UploadHandler.php';

class Page extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('TopBanner_model');
	}

	public function index()
	{
		
	}

	public function loadTopBanner()
	{
		$result = $this->TopBanner_model->getDataTopBanner();

		$result =json_decode($result,true);
		$result = array('data' => $result );
		$this->load->view('/TopBanner/TopBanner_view',$result);
	}

	public function addTopBanner()
	{
		$this->load->view('/TopBanner/AddTopBanner_view');
	}

	public function insertTopBanner()
	{
		// get data from model because data is json not table => insert == update ( 1 row)
		
		$result = $this->TopBanner_model->getDataTopBanner();
		//data receive is json => endcode
		$result =json_decode($result,true);

		if($result==null){
			$result = array(); // data must be array => push 
		}


		$id = $this->input->post('id');
		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$linkbtn = $this->input->post('linkbtn');
		$textbtn = $this->input->post('textbtn');
		$image = $this->input->post('image');
		$data = array(
			'id' => $id,
			'title' => $title, 
			'description' => $description, 
			'linkbtn' => $linkbtn, 
			'textbtn' => $textbtn, 
			'image' => $image, 
		);
		
		array_push($result, $data);
		// converting data to json for update database
		$result = json_encode($result);

		if($this->TopBanner_model->updateDataTopBanner($result))
		{
			echo 1;
		}
		else
		{
			echo 0;
		}
	}
	
	public function uploadFile()
	{
		$uploadfile = new UploadHandler();
	}

	public function LoadVieweditTopBanner()
	{
		$result = $this->TopBanner_model->getDataTopBanner();

		$result =json_decode($result,true);
		$result = array('data' => $result );
		$this->load->view('/TopBanner/EditTopBanner_view',$result);
	}

	public function editTopBanner()
	{
		$data = $this->input->post('data');
		
		// echo "<pre>";
		// var_dump($data);
		// echo "</pre>";
		// view send data : serializeAraay() => using loop for get data
		$Banner = array();

		$Banners = array();
		for ($i=0; $i <count($data) ; $i++) { 
			$Banner[$data[$i]['name']]=$data[$i]['value'];
			if($i>0 && (($i+1)%6==0)){
				array_push($Banners, $Banner);
			}
		}
		$Banners =json_encode($Banners);

		
		if($this->TopBanner_model->updateDataTopBanner($Banners)){
			echo 1;
		}
		else{
			echo 0;
		}
	}

	public function deleteTopBanner($idReceive)
	{
		$id = $idReceive;
		
		$result = $this->TopBanner_model->getDataTopBanner();
		

		// default is false => object ->
		// true => array []
		$result = json_decode($result,true);

	
		foreach ($result as $key => $value) {
			if($value['id'] == $id){
				unset($result[$key]);
			}
			
		}

		$result =json_encode($result);

		if($this->TopBanner_model->updateDataTopBanner($result))
		{
			echo '1';
		}
		else{
			echo '0';
		}
	}

	public function getDataToUpdate($idReceive)
	{
		$id= $idReceive;
		$result = $this->TopBanner_model->getDataTopBanner();

		$result = json_decode($result,true);

		foreach ($result as $key => $value) {
			if($value['id'] == $id){
				$data = $result[$key];
			}
		}

		$data = array('banner' => $data );
		$this->load->view('/TopBanner/EditOneTopBanner_view', $data);
		
	}

	public function updateOneTopBanner()
	{
		$id = $this->input->post('id');
		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$linkbtn = $this->input->post('linkbtn');
		$textbtn = $this->input->post('textbtn');
		$image = $this->input->post('image');

		$data = array(
			'id' => $id, 
			'title' => $title, 
			'description' => $description, 
			'linkbtn' => $linkbtn, 
			'textbtn' => $textbtn, 
			'image' => $image
		);
		
		$result = $this->TopBanner_model->getDataTopBanner();

		$result = json_decode($result,true);

		foreach ($result as $key => $value) {
			if($value['id'] == $id){
				$result[$key]=$data;
			}
		}
		
		$result = json_encode($result);
		if($this->TopBanner_model->updateDataTopBanner($result)){
			echo 1;
		}
		else{
			echo 0;
		}

	}

}

/* End of file Page.php */
/* Location: ./application/controllers/Page.php */