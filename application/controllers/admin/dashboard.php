<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}

	public function index()
	{
		$data['contents'] = $this->load->view('admin/dashboard', '', TRUE);
		$this->load->view('admin/index', $data);
	}
}
