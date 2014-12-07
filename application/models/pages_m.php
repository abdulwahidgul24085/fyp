<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages_m extends MY_Model {

	protected $_table_name = 'pages';
	protected $_primary_key = 'id';
	protected $_primary_filter = 'intval';
	protected $_order_by = 'order';
	protected $_rules = array();
	protected $_timestamps = FALSE;

	public function __construct()
	{
		parent::__construct();
		
	}

}

/* End of file pages_m.php */
/* Location: ./application/models/pages_m.php */