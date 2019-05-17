<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SendEmail extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
	}
	public function send_mail()
	{
		$from_email = "thanhhv317@gmail.com"; 
		$to_email = $this->input->post('email'); 

		//Load email library 
		$this->load->library('email'); 

		$this->email->from($from_email, 'Thanh hoang'); 
		$this->email->to($to_email);
		$this->email->subject('Email Test'); 
		$this->email->message('Testing the email class.'); 

		//Send mail 
		if($this->email->send()) 
			echo 'gui mail thanh cong'; 
		else 
			echo 'that bai roi';
	}

}

/* End of file SendEmail.php */
/* Location: ./application/controllers/SendEmail.php */