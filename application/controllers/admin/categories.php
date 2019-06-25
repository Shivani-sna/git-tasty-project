<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class categories extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		//Load Model
		$this->load->model('categories_model');
	}

	public function index()
	{
		$data['categories'] = $this->categories_model->get_all();
		$data['contents'] = $this->load->view('admin/categories/index', $data, TRUE);
		$this->load->view('admin/index', $data);
	}
	public function add()
	{
		$data['contents'] = $this->load->view('admin/categories/create', '', TRUE);
		$this->load->view('admin/index', $data);
		if ($this->input->post())
		{
				$insert = array('name' => $this->input->post('name'),
					'icon'                => $this->input->post('icon'),
					'status'          => $this->input->post('status'));

				$this->session->set_flashdata('success', 'Record added Successfully.');
				$this->categories_model->insert($insert);

				redirect('admin/categories');
			}
			else
			{
				$this->session->set_flashdata('error', 'Error Update.');
			}
		}

	/**
	 * @param $id
	 */
	public function update($id)
	{

		$data['categories'] = $this->categories_model->get($id);
		$data['contents'] = $this->load->view('admin/categories/edit', $data, TRUE);
		$this->load->view('admin/index', $data);
		if ($this->input->post())
		{
		
		$update = array('name' => $this->input->post('name'),
			'icon'            => $this->input->post('icon'),
			'status'          => $this->input->post('status'));

		$this->categories_model->update($id, $update);
		//echo print_r($update);
		$this->session->set_flashdata('success', 'Record Updated Successfully.');
		redirect('admin/categories');

			}
			else
			{
				$this->session->set_flashdata('error', 'Error Update.');
			}
	}
			
	
}
