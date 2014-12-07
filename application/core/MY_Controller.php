<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public $data = array();

	public function __construct()
	{
		parent::__construct();

		$this->data['error'] = array();
		$this->data['site_name'] = config_item('site_name');
	}

}

/* End of file My_Controller.php */
/* Location: ./application/controllers/My_Controller.php */
