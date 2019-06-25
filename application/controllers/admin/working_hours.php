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
	public function update()
	{
		$id = $this->input->post('id');
		

		$data['working_hours'] = $this->workinghours_model->get($id);
		$data['contents']     = $this->load->view('admin/working_hours/index', $data, TRUE);
		$this->load->view('admin/index', $data);
	
			echo $start_time =$this->input->post('start');
		echo $end_time =$this->input->post('end');
				$d=mktime(11, 14, 54, 8, 12, 2014);
		 		$time=date("Y-m-d h:i:sa", $d);
				$update = array('start_time' => $start_time,
					'end_time' => $end_time,
					'created_at' => $time,
			 		'updated_at' => $time);

				$this->workinghours_model->update($id, $update);
				$this->session->set_flashdata('success', 'Record Updated Successfully.');

				
				
		}
	}

