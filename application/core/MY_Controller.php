<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
 {
	public function __construct()
	{
		parent::__construct();
		//Load Model
		$this->load->model('login_model'); 

		if($this->session->userdata('login')==false)
         {  
         	redirect('admin/login/check_login');
    	 } 
    	 
    	else
    	{

    	}

	}

public function check_session()
	{
		

	}
}