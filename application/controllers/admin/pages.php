<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends Frontend_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pages_m');
	}

	public function index()
	{

	}
}