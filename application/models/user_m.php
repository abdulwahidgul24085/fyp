<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_M extends MY_Model {

	protected $_table_name = 'users';
	protected $_order_by = 'name';
	public $rules = array(
			'email' => array(
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'trim|valid_email|xss_clean|required'),

			'password' => array(
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'trim|xss_clean|required|min_length[8]')
		);
	public $rules_forget_password = array(
			'email' => array(
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'trim|valid_email|xss_clean|required')
		);

	public function __construct()
	{
		parent::__construct();
	}	
}

/* End of file user_m.php */
/* Location: ./application/models/user_m.php */