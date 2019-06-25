<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Specialities extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		//Load Model
		$this->load->model('specialities_model');
	}

	public function index()
	{
// print_r($this->session->userdata('email'));

// die();
		
			// $model = $this->actors_model->actors_list();
			$data['specialities'] = $this->specialities_model->get_all();

// echo "<pre>";
			// print_r($data['specialities']);

			$data['contents'] = $this->load->view('admin/specialities/index', $data, TRUE);
			$this->load->view('admin/index', $data);
	

		//echo "string";
	}

	public function upload_file()
	{
	}

	public function add()
	{

		$data['contents'] = $this->load->view('admin/specialities/create', '', TRUE);
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
					'description'          => $this->input->post('description'),
					'rate'                 => $this->input->post('rate'));

				$this->session->set_flashdata('success', 'Record Updated Successfully.');
				$this->specialities_model->insert($insert);

				redirect('admin/specialities');
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
		$delete = $this->specialities_model->delete($id);

		if ($delete)
		{
			$this->session->set_flashdata('error', 'Record Deleted Successfully.');

			return redirect('admin/specialities');
		}
		else
		{
			echo "Not Deleted";
		}
	}

	/**
	 * @param $id
	 */
	public function update($id)
	{
		// $id;

		$data['specialities'] = $this->specialities_model->get($id);

// print_r($data['specialities']);

// die();

// if ($this->session->userdata('username'))
		// {
		$data['contents'] = $this->load->view('admin/specialities/edit', $data, TRUE);
		$this->load->view('admin/index', $data);

// }

// else

// {

// 	$this->load->view('admin/login_form');

// }

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
					'description'          => $this->input->post('description'),
					'rate'                 => $this->input->post('rate'));

				$this->specialities_model->update($id, $update);
				$this->session->set_flashdata('success', 'Record Updated Successfully.');

				// $this->actor->update($id, $update);
				redirect('admin/specialities');
			}
			else
			{
				$this->session->set_flashdata('error', 'Error Update.');
			}
		}
	}
}
