<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reservations extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('reservations_model');
	
	}

	public function index()
	{

		$data['reservations'] = $this->reservations_model->get_all();
		$data['contents'] = $this->load->view('admin/reservations/index', $data, TRUE);
		$this->load->view('admin/index', $data);
	}
	public function add()
	{
		 //print_r($this->input->post());
		// $data['specialities'] = $this->load->view('user/specialities', '', TRUE);
		 // print_r($data);
		//die();
		 //$data['contents'] = $this->load->view('user/home', '', TRUE);
		// $this->load->view('user/index', $data);

		if ($this->input->post())
		{
				$d=mktime(11, 14, 54, 8, 12, 2014);
		 		$time=date("Y-m-d h:i:sa", $d);
				$insert = array('name' => $this->input->post('name'),
			 					'phone' => $this->input->post('phone'),
			 					'email' => $this->input->post('email'),
			 					'date' => $this->input->post('date'),
			 					'time' => $this->input->post('time'),
								'person' => $this->input->post('person'),
								'created_at' => $time,
			 					'updated_at' => $time);
				//print_r($insert);

				$this->session->set_flashdata('success', 'Record Updated Successfully.');
				$this->reservations_model->insert($insert);

				 redirect('home');
			}
			else
			{
				$this->session->set_flashdata('error', 'Error Update.');
			}
		
	}


	
}
