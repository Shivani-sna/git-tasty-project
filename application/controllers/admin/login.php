<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//Load Model
		$this->load->model('login_model');
	}

	public function index()
	{
		$this->load->view('admin/login_form');
	}

	public function check_login()
	{
		$email    = $this->input->post('email');
		$password = md5($this->input->post('password'));
		if ($this->login_model->can_login($email, $password))
		{
			$this->session->set_userdata('login', $email);
			$data['contents'] = $this->load->view('admin/dashboard', '', TRUE);
			$this->load->view('admin/index', $data);
		}
		else
		{
			$data['error'] = "Login Failed";
			$this->load->view('admin/login_form', compact($data));
		}
	}

	public function logout()
	{
		//removing session
		$this->session->unset_userdata('login');
		redirect('admin/login');
	}
}
