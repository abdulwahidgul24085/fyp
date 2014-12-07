<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Controller extends MY_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->data['meta_title'] = 'My Awsome FYP';
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('user_m');
		$this->load->spark('ion_auth/2.5.0');  


		$exception_uris = array('admin/user/login', 'amdin/user/logout');

		//uri_string is codeigniter building funciton which returns the login as such: admin/user/login
		if(in_array(uri_string(), $exception_uris) == FALSE){
			if($this->ion_auth->logged_in() == FALSE){
				redirect('admin/user/login');
			}
		}
	}
}

/* End of file Admin_Controller.php */
/* Location: ./application/controllers/Admin_Controller.php */