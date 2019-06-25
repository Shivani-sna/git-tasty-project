<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class subscriptions extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		//Load Model
		$this->load->model('subscriptions_model');
	}

	public function index()
	{

			$data['subscriptions'] = $this->subscriptions_model->get_all();
			$data['contents'] = $this->load->view('admin/subscriptions/index', $data, TRUE);
			$this->load->view('admin/index', $data);
	}
	public function add()
	{

			print_r($this->input->post());
		if ($this->input->post())
		{
				$d=mktime(11, 14, 54, 8, 12, 2014);
		 		$time=date("Y-m-d h:i:sa", $d);
				$insert = array('email' => $this->input->post('email'),
								'created_at' => $time,
			 					'updated_at' => $time);
				print_r($insert);

			//	$this->session->set_flashdata('success', 'Record Updated Successfully.');
				$this->subscriptions_model->insert($insert);

				 //redirect('home');
			}
			else
			{
				$this->session->set_flashdata('error', 'Error Update.');
			}
	}

	
}
