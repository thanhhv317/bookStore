<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include 'UploadHandler.php';

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Book_model');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->model('TopBanner_model');
		$data = $this->TopBanner_model->getDataTopBanner();
		$data = json_decode($data,true);

		$book = $this->Book_model->show6DataBook();
		$this->load->model('Author_model');
		$author = $this->Author_model->get3Author();
		
		$result= array();
		array_push($result, $data);
		array_push($result, $book);
		array_push($result, $author);

		$result = array(
			'result' => $result
		);
		$this->load->view('/Page/HomePage_view',$result);
	}

	public function work($value='')
	{
		$data = $this->Book_model->loadMoreBook(12,0);
		$countbook = $this->Book_model->getCountBook();
		$data = array('book' => $data , 'countbook'=> $countbook);
		$this->load->view('/Page/WorkPage_view',$data);
	}

	public function blog($id='')
	{
		$name=$id;
		$name= array('name' => $name );
		if($id==""){
			$this->load->view('/Page/BlogPage_view');
		}
		else{
			$this->load->view('/Page/blog_Single_view',$name);
		}
	}

	public function about($value='')
	{
		$this->load->view('/Page/AboutPage_view');
	}

	public function contact($value='')
	{
		$this->load->view('/Page/ContactPage_view');
	}

	public function cart()
	{
		$this->load->view('/Page/Cart_view');
	}

	public function checkout()
	{
		$this->load->view('/Page/Checkout_view');
	}

	// list book by kind =>
	public function getListBookByKind($kind)
	{
		$data = $this->Book_model->getBookByKind($kind);
		$data = array('book' => $data );
		$this->load->view('/Page/kind_view', $data, FALSE);
	}

	public function loadMoreBook($offset='')
	{
		//$result = $this->Book_model->getCountBook();

		$result = $this->Book_model->loadMoreBook(10,$offset);
		$result = array('book' => $result );
		$this->load->view('/Page/LoadMoreBook_view', $result, FALSE);
	}

	public function searchBook($name='')
	{
		$result = $this->Book_model->showDataBookByName($name);
		$result = array('book' => $result );
		$this->load->view('/Page/Abook_view.php', $result, FALSE);
	}

	public function orderBook()
	{
		$ID_Customer = $this->input->post('id');

		$Name = $this->input->post('name');
		$Phone = $this->input->post('phone');
		$Address = $this->input->post('address');
		$Mail = $this->input->post('mail');
		$data = $this->input->post('data');
		$ID_Order = "".rand(10,100).rand(10,100).rand(10,100);

		$user = array();
		$cus = array();

		// new customer => add new
		if($ID_Customer=='anonymous'){
			$ID_Customer = "".rand(10,100).rand(10,100).rand(10,100);
			$Username = "".rand(10,100).rand(10,100).rand(10,100);
			$Password = $Username;
			$user = array(
				'ID' => $ID_Customer, 
				'Username' => $Username, 
				'Password' => $Password, 
				'Name' => $Name, 
				'Address' => $Address, 
				'Phone' => $Phone,
				'Mail' => $Mail,
				'Birthday' => '',
				'ID_Type_User' => 'CUS'

			);
		}
		else{
			// update address
			$tmp = $this->session->userdata('user');

			$cus = array(
				'ID' => $ID_Customer, 
				'Username' => $tmp['Username'], 
				'Password' => $tmp['Password'], 
				'Name' => $Name, 
				'Address' => $Address, 
				'Phone' => $Phone,
				'Mail' => $Mail,
				'Birthday' => $tmp['Birthday'],
				'ID_Type_User' => $tmp['ID_Type_User'],
				'Image' => $tmp['Image']
			);

		}

		$object = array();
		foreach ($data as $key => $value) {
			$result = json_decode($value,true);
			$Price = $result['quantity'] * $result['price']	;
			$order = array( 
				'ID_Order' => $ID_Order, 
				'ID_Customer' => $ID_Customer, 
				'ID_Book' => $result['id'], 
				'Quantity' => $result['quantity'], 
				'Price' => $Price
			);	
			array_push($object, $order);		
		}

		$this->load->model('Order_model');
		if($Name!="" && $Address!="" && $Phone!=""){
			if($this->Order_model->insertData($object,$user,$cus,$ID_Customer)!=0){
				echo 1;
			}else{
				echo 0;
			}
		}else{
			echo -1;
		}
		

	}

	public function updateUser()
	{
		$user = $this->session->userdata('user');
        //$user = json_decode($user,true);
        	
		$Name = $this->input->post('Name');
		$Birthday = $this->input->post('Birthday');
		$Phone = $this->input->post('Phone');
		$Mail = $this->input->post('Mail');
		$Address = $this->input->post('Address');
		$Image = $this->input->post('Image');
		$Username = $user['Username'];
		$Password = $user['Password'];
		$ID = $user['ID'];
		$ID_Type_User = $user['ID_Type_User'];


		$result = array(
			'ID' => $ID, 
			'Username' => $Username, 
			'Password' => $Password, 
			'Name' => $Name, 
			'Address' => $Address, 
			'Phone' => $Phone, 
			'Mail' => $Mail, 
			'Birthday' => $Birthday, 
			'ID_Type_User' => $ID_Type_User, 
			'Image' => $Image 
		);

		$this->load->model('User_model');
		if($this->User_model->updateUser($ID,$ID_Type_User,$result)){
			// update new session for page account
			//$result= json_encode($result);
			
			$this->session->set_userdata('user',$result);
			echo '1';
		}
		else{
			echo 0;
		}


	}

	//===============================


	public function login()
	{
		$this->load->view('/Page/Login_view');
	}

	public function user()
	{
		$this->load->view('/Page/AccountPage_view');
	}

	public function logout()
	{
		//delete session
		$this->session->unset_userdata('user');
		$this->index();
	}

	public function checkAccount()
	{
		$username = $this->input->post('username');
		$password =$this->input->post('password');
		$this->load->model('User_model');
		$data = $this->User_model->checkAccount($username,$password);
		foreach ($data as $key => $value) {
			$result = $value;
		}
		if(isset($result) && $result){
			//$data = json_encode($data);
			$this->session->set_userdata('user',$result);
			echo '1';
		}
		else{
			echo '0';
		}
	}

	public function admin($link='')
	{
		// $content= array('action' => '' );;
		// if($link =='addBook'){
		// 	$content = array('action' => 'addBook' );
		// }
		$this->load->view('HomeContent_view');
	}
	public function LoadListBook()
	{
		$result = $this->Book_model->showDataBook();
		$result = array('book' => $result );
		$this->load->view('/Book/ListBook_view',$result);
	}
	public function LoadKindOfBook()
	{
		
		$result = $this->Book_model->showDataKindBook();
		$result = array('kind' => $result );
		$this->load->view('/Kind/ListKindOfBook_view',$result);
	}
	public function loadPublisher()
	{
		
		$result = $this->Book_model->showDataPublisher();
		$result = array('publisher' => $result );
		$this->load->view('/Publisher/ListPublisher_view',$result);
	}
	public function loadAuthor()
	{
		
		$result = $this->Book_model->showDataAuthor();
		$result = array('author' => $result );
		$this->load->view('/Author/ListAuthor_view',$result);
	}
	public function detailBook($id)
	{
		
		$result = $this->Book_model->detailBookByID($id);
		$result = array('book' => $result );
		$this->load->view('/Book/DetailBook_view', $result, FALSE);
	}
	public function editBook($id)
	{
		
		$result = $this->Book_model->detailBookByID($id);
		$result2 = $this->Book_model->showDataAuthor();
		$result3 = $this->Book_model->showDataKindBook();
		$result4 = $this->Book_model->showDataPublisher();
		$result = array(
			'book' => $result,
			'author' => $result2,
			'kind' => $result3,
			'publisher' =>$result4
		);
			
		$this->load->view('/Book/EditBook_view',$result, FALSE);
	}
	public function updateBook($idBook)
	{
		// test và đã lấy dữ liệu thành công
		
		$ID = $idBook;
		$Name = $this->input->post('name');
		$Price = $this->input->post('price');
		$Quantity = $this->input->post('quantity');
		$Publishing_Year = $this->input->post('publish_year');
		$Description = $this->input->post('description');
		$ID_Kind = $this->input->post('kind');
		$ID_Author = $this->input->post('author');
		$ID_Publisher = $this->input->post('publisher');
		$Image = $this->input->post('image');
		$Image_old = $this->input->post('image_old');

		
		if($ID!="" && $Name!="" && $Price!="" && $Quantity!="" && $Publishing_Year!="" && $Description!="" && $ID_Kind!="" && $ID_Author!="" && $ID_Publisher!="" )
		{
			$book = array(
				'ID' => $ID, 
				'Name' => $Name, 
				'Description' => $Description, 
				'ID_Author' => $ID_Author, 
				'ID_Kind' => $ID_Kind, 
				'Publishing_Year' => $Publishing_Year, 
				'Price' => $Price, 
				'Quantity' => $Quantity, 
				'ID_Publisher' => $ID_Publisher, 
				'Image' => $Image 
			);

			echo $this->Book_model->updateBook($book,$ID);
		}
		else{
			echo '0';
		}


	}
	public function addBook()
	{
		$result2 = $this->Book_model->showDataAuthor();
		$result3 = $this->Book_model->showDataKindBook();
		$result4 = $this->Book_model->showDataPublisher();
		$result = array(
			'author' => $result2,
			'kind' => $result3,
			'publisher' =>$result4
		);
			
		$this->load->view('/Book/AddBook_view',$result);
	}
	public function insertBookToDatabase()
	{
		$ID = $this->input->post('id');
		$Name = $this->input->post('name');
		$Price = $this->input->post('price');
		$Quantity = $this->input->post('quantity');
		$Publishing_Year = $this->input->post('publish_year');
		$Description = $this->input->post('description');
		$ID_Kind = $this->input->post('kind');
		$ID_Author = $this->input->post('author');
		$ID_Publisher = $this->input->post('publisher');
		$Image = $this->input->post('imageAvatar');

		if($ID!="" && $Name!="" && $Price!="" && $Quantity!="" && $Publishing_Year!="" && $Description!="" && $ID_Kind!="" && $ID_Author!="" && $ID_Publisher!="" && $Image!="")
		{
			$book = array(
				'ID' => $ID, 
				'Name' => $Name, 
				'Description' => $Description, 
				'ID_Author' => $ID_Author, 
				'ID_Kind' => $ID_Kind, 
				'Publishing_Year' => $Publishing_Year, 
				'Price' => $Price, 
				'Quantity' => $Quantity, 
				'ID_Publisher' => $ID_Publisher, 
				'Image' => $Image 
			);

			echo $this->Book_model->insertBook($book);
		}
		else{
			echo '0';
		}
	}

	public function uploadFile()
	{
		$uploadfile = new UploadHandler();
	}

	public function deleteBook($id)
	{
		$idBook = $id;
		if($this->Book_model->deleteBook($idBook)){
			$this->LoadListBook();
		}

	}


}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */