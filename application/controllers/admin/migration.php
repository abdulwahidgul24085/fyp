<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function test(){
		echo "woirking just fine";
	}
	public function index()
	{
		$this->load->library('migration');

		if(! $this->migration->version(4)){
			show_error($this->migration->error_string());
		}
		else{
			echo 'Migration worked!';
		}
	}

}

/* End of file migration.php */
/* Location: ./application/controllers/migration.php */