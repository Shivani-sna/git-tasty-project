<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class chefs extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		//Load Model
		$this->load->model('chefs_model');
	}

	public function index()
	{
		$data['chefs']    = $this->chefs_model->get_all();
		$data['contents'] = $this->load->view('admin/chefs/index', $data, TRUE);
		$this->load->view('admin/index', $data);
	}

	
	public function add()
	{
		$data['contents'] = $this->load->view('admin/chefs/create', '', TRUE);
		$this->load->view('admin/index', $data);

		if ($this->input->post())
		{
			$config['upload_path']    = 'uploads/';
			$config['allowed_types']  = 'jpg|jpeg|png|gif|jifi';
			echo $config['file_name'] = $_FILES['image']['name'];

			//Load upload library and initialize configuration
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if ($this->upload->do_upload('image'))
			{
				$uploadData = $this->upload->data();
				$image      = $uploadData['file_name'];

				// $sql = $this->blogs->insert($blogs);
				$insert = array('name' => $this->input->post('name'),
					'image'                => $image,
					'designation'          => $this->input->post('designation'));

				$this->session->set_flashdata('success', 'Record Updated Successfully.');
				$this->chefs_model->insert($insert);

				redirect('admin/chefs');
			}
			else
			{
				$this->session->set_flashdata('error', 'Error Update.');
			}
		}
	}

	/**
	 * @param $id
	 */
	public function update($id)
	{
		$data['chefs'] = $this->chefs_model->get($id);
		$data['contents'] = $this->load->view('admin/chefs/edit', $data, TRUE);
		$this->load->view('admin/index', $data);
		if ($this->input->post())
		{
			$config['upload_path']    = 'uploads/';
			$config['allowed_types']  = 'jpg|jpeg|png|gif|jifi';
			echo $config['file_name'] = $_FILES['image']['name'];

			//Load upload library and initialize configuration
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if ($this->upload->do_upload('image'))
			{
				$uploadData = $this->upload->data();
				$image      = $uploadData['file_name'];

				$update = array('name' => $this->input->post('name'),
					'image'                => $image,
					'designation'          => $this->input->post('designation'));

				$this->chefs_model->update($id, $update);
				$this->session->set_flashdata('success', 'Record Updated Successfully.');

				// $this->actor->update($id, $update);
				redirect('admin/chefs');
			}
			else
			{
				$this->session->set_flashdata('error', 'Error Update.');
			}
		}
	}
	
	/**
	 * @param $id
	 */
	public function delete($id)
	{
		//echo $id;
		$delete = $this->chefs_model->delete($id);

		if ($delete)
		{
			$this->session->set_flashdata('error', 'Record Deleted Successfully.');

			return redirect('admin/chefs');
		}
		else
		{
			echo "Not Deleted";
		}
	}

}
