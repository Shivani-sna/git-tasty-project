<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Menu_items extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		//Load Model
		$this->load->model('categories_model');
		$this->load->model('menuitems_model');
	}

	public function index()
	{	
		$data['menu_item'] = $this->menuitems_model->get_menu();
		$data['contents'] = $this->load->view('admin/menu_items/index', $data, TRUE);
		$this->load->view('admin/index', $data);
	}
		
	public function add()
	{
		$data['categories'] = $this->categories_model->get_all();
		$data['contents'] = $this->load->view('admin/menu_items/create', $data, TRUE);
		$this->load->view('admin/index', $data);
		if ($this->input->post())
		{
			$config['upload_path']    = 'uploads/';
			$config['allowed_types']  = 'jpg|jpeg|png|gif|jifi';
			$config['file_name'] = $_FILES['image']['name'];

			//Load upload library and initialize configuration
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if ($this->upload->do_upload('image'))
			{
				$uploadData = $this->upload->data();
				$image      = $uploadData['file_name'];
				$insert = array(
					'image'                => $image,
					'item'          	   => $this->input->post('item'),
					'ingredient'           => $this->input->post('ingredient'),
					'rate'                 => $this->input->post('rate'),
					'category_id'          => $this->input->post('category_id')
				);
				  $this->session->set_flashdata('success', 'Record added Successfully.');
				  $this->menuitems_model->insert($insert);

				 redirect('admin/menu_items');
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
		//echo $id;
		$data['categories'] = $this->categories_model->get_all();
		$data['menu_items'] = $this->menuitems_model->get($id);
 	// 	print_r($data);
		// die();
		$data['contents'] = $this->load->view('admin/menu_items/edit', $data, TRUE);
		$this->load->view('admin/index', $data);
		 

		if ($this->input->post())
		{
			$config['upload_path']    = 'uploads/';
			$config['allowed_types']  = 'jpg|jpeg|png|gif|jifi';
			$config['file_name'] = $_FILES['image']['name'];
			//Load upload library and initialize configuration
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if ($this->upload->do_upload('image'))
			{
				$uploadData = $this->upload->data();
				$image      = $uploadData['file_name'];
				$update = array(
					'image'                => $image,
					'item'          	   => $this->input->post('item'),
					'ingredient'           => $this->input->post('ingredient'),
					'rate'                 => $this->input->post('rate'),
					'category_id'          => $this->input->post('category_id')
					);

				$this->menuitems_model->update($id, $update);
				$this->session->set_flashdata('success', 'Record Updated Successfully.');
				// echo print_r($update);
				// die();
				
				redirect('admin/menu_items');
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
		$delete = $this->menuitems_model->delete($id);

		if ($delete)
		{
			$this->session->set_flashdata('error', 'Record Deleted Successfully.');

			return redirect('admin/menu_items');
		}
		else
		{
			echo "Not Deleted";
		}
	}


	
}
