<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('contacts_model');
	
	}

	public function index()
	{
		$data['contacts'] = $this->contacts_model->get_all();
		$data['contents'] = $this->load->view('admin/contacts/index', $data, TRUE);
		$this->load->view('admin/index', $data);
	}
	public function add()
	{
		 print_r($this->input->post());
		 //$data['contacts'] = $this->load->view('user/contact', '', TRUE);
		 //print_r($data);
		// die();
		 $data['contents'] = $this->load->view('user/home', '', TRUE);
		//$this->load->view('user/index', $data);
		

		if ($this->input->post())
		{
			 $d=mktime(11, 14, 54, 8, 12, 2014);
		 	$time=date("Y-m-d h:i:sa", $d);
				$insert = array('name' => $this->input->post('name'),
			 					'email' => $this->input->post('email'),
			 					'subject' => $this->input->post('subject'),
			 					'message' => $this->input->post('message'),
			 					'created_at' => $time,
			 					'updated_at' => $time);
			//	print_r($insert);

				 $this->session->set_flashdata('success', 'Record Updated Successfully.');
				 $this->contacts_model->insert($insert);

				 redirect('home');
			}
			else
			{
				$this->session->set_flashdata('error', 'Error Update.');
			}
		
	}


	
}
