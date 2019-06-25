.<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website_info extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		//Load Model
		$this->load->model('websiteinfo_model');
	}

	public function index()
	{
		$data['website_info'] = $this->websiteinfo_model->get_all();
		$data['contents']     = $this->load->view('admin/website_info/index', $data, TRUE);
		$this->load->view('admin/index', $data);
	}

	/**
	 * @param $id
	 */
	public function update($id)
	{
		$data['website_info'] = $this->websiteinfo_model->get($id);
		$data['contents'] = $this->load->view('admin/website_info/edit', $data, TRUE);
		$this->load->view('admin/index', $data);

		if ($this->input->post())
		{
			$update = array('address' => $this->input->post('address'),
				'phone'          => $this->input->post('phone'),
				'email'          => $this->input->post('email'),
				'website'          => $this->input->post('website'),
				'description'          => $this->input->post('description'),
				'twitter_url'          => $this->input->post('twitter_url'),
				'facebook_url'          => $this->input->post('facebook_url'),
				'instagram_url'          => $this->input->post('instagram_url')
			);

			$this->websiteinfo_model->update($id, $update);
			$this->session->set_flashdata('success', 'Record Updated Successfully.');

			// $this->actor->update($id, $update);
			redirect('admin/website_info');
		}
		else
		{
			$this->session->set_flashdata('error', 'Error Update.');
		}
	}
}
