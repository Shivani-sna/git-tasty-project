<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('workinghours_model');
		$this->load->model('websiteinfo_model');
		$this->load->model('specialities_model');
		$this->load->model('menuitems_model');
		$this->load->model('chefs_model');
		$this->load->model('categories_model');
		
	}

	public function index()
	{
		$data['specialities'] = $this->specialities_model->get_all();
		$data['working_hours'] = $this->workinghours_model->get_all();
		$data['website_info'] = $this->websiteinfo_model->get_all();
		$data['categories'] = $this->categories_model->get_all();	
		$data['contents'] = $this->load->view('user/home','', TRUE);
		$data['reservation_form'] = $this->load->view('user/reservation_home','', TRUE);
		$data['about_chef'] = $this->load->view('user/about_chef','', TRUE);
		$data['menu'] = $this->load->view('user/menu', $data, TRUE);
		$data['bg_specialities'] = $this->load->view('user/bg_specialities',$data, TRUE);
		$data['specialities'] = $this->load->view('user/specialities',$data, TRUE);
		$data['blog'] = $this->load->view('user/blog_guest', '', TRUE);
		$this->load->view('user/index', $data);
	}

	public function menu()
	{
	
		$data['working_hours'] = $this->workinghours_model->get_all();
		$data['website_info'] = $this->websiteinfo_model->get_all();
		$data['menu_item'] = $this->menuitems_model->get_menu();
		$data['categories'] = $this->categories_model->get_all();
		$data['contents'] = $this->load->view('user/slider_menu','', TRUE);
		$data['menu'] = $this->load->view('user/menu',$data, TRUE);
       $this->load->view('user/index',$data);
	}

	public function get_category()
	{
		// echo "hi";
		if($this->input->post('id'))
		{
			$cat_id=$this->input->post('id');
			$menu_item = $this->menuitems_model->get_menu($cat_id);
	
			if($menu_item)
			{
				$data1='';
				foreach ($menu_item as $menu) 
			       {
			           $data1.="<div class='col-lg-6'>
          <div class='menus d-flex ftco-animate fadeInUp ftco-animated'>
              <div class='menu-img' 
              style='background-image: url(../assets/images/".$menu['image'].");></div> 
             <div class='overlay'></div>
                      
                          <div class='text d-flex'>
                        <div class='one-half'>
                        <h3>".$menu['item']."</h3>
                        <p>".$menu['ingredient']."</p>
                        </div>
                        <div class='one-forth'>
                            <span class='price'>".$menu['rate']."</span>
                            </div>
                            </div>
                            </div>
                            <div class='overlay'></div></div>";
			        }

			      echo json_encode(array('status'=>true,'output'=>$data1));
			       
			}else{
				echo json_encode(array('status'=>false));
			 }
		}

	}

	public function specialities()
	{
		$data['specialities'] = $this->specialities_model->get_all();
		$data['working_hours'] = $this->workinghours_model->get_all();
		$data['website_info'] = $this->websiteinfo_model->get_all();
		$data['contents'] = $this->load->view('user/slider_specialities',$data, TRUE);
		$data['specialities'] = $this->load->view('user/specialities',$data, TRUE);
		$this->load->view('user/index', $data);
	}
	public function reservations()
	{
		$data['working_hours'] = $this->workinghours_model->get_all();
		$data['website_info'] = $this->websiteinfo_model->get_all();
		$data['contents'] = $this->load->view('user/slider_reservations',$data, TRUE);
		$data['reservations'] = $this->load->view('user/reservations',$data, TRUE);
		$this->load->view('user/index', $data);
	}
	public function about()
	{
		$data['working_hours'] = $this->workinghours_model->get_all();
		$data['website_info'] = $this->websiteinfo_model->get_all();
		$data['chefs']    = $this->chefs_model->get_chefs();
		$data['contents'] = $this->load->view('user/slider_about',$data, TRUE);
		$data['about_chef'] = $this->load->view('user/about_chef','', TRUE);
		$data['about'] = $this->load->view('user/about',$data, TRUE);
		$this->load->view('user/index', $data);
	}
	public function contact()
	{
		$data['working_hours'] = $this->workinghours_model->get_all();
		$data['website_info'] = $this->websiteinfo_model->get_all();
		$data['contents'] = $this->load->view('user/slider_contact',$data, TRUE);
		$data['contact'] = $this->load->view('user/contact',$data, TRUE);
		$this->load->view('user/index', $data);
	}
}