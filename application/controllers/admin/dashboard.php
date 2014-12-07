<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['user']= $this->ion_auth->users()->row();
		echo "<pre>";
		var_dump($this->data['user']);
		die();
		$this->load->view('admin/_layout_main',$this->data);
	}

	public function model()
	{
		$this->load->view('admin/_layout_model',$this->data);
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */