<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Working_hours extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		//Load Model
		$this->load->model('workinghours_model');
	}

	public function index()
	{
		$data['working_hours'] = $this->workinghours_model->get_all();
		$data['contents']     = $this->load->view('admin/working_hours/index', $data, TRUE);
		$this->load->view('admin/index', $data);
	}
}
