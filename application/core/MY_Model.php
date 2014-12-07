<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends CI_Model {

	protected $_table_name = '';
	protected $_primary_key = 'id';
	protected $_primary_filter = 'intval';
	protected $_order_by = '';
	public $rules = array();
	protected $_timestamps = FALSE;

	public function __construct()
	{
		parent::__construct();
		
	}

	/**
	 * This gets the data from the mysql tables
	 * @param  int $id if passed the function will only return single record.
	 * @param   Boolean $single this is the user wants a single record returned liked to the get_by method
	 * @return database_record     return type depends on the $method varaiable
	 */
	public function get($id = NULL,$single = FALSE){
		if($id != NULL){
			$filter = $this->_primary_filter;
			$id = $filter($id);
			$this->db->where($this->_primary_key, $id);
			$method = 'row';
		}
		elseif ($single==TRUE){
			$method = 'row';
		}
		else{
			$method = 'result';
		}

		/**
		 * if the result are pre-order then the count is 0 and orderby is not run
		 * and if the result is not pre-order the count > 0 then orderby is runned
		 */
		if(!count($this->db->ar_orderby)){
			$this->db->order_by($this->_order_by);
		}

		return $this->db->get($this->_table_name)->$method();
	}

	/**
	 * To get record by some conditions
	 * @param  String  $where  Defines the condition by which the record will be return
	 * @param  boolean $single if a single returning record is need then this is set to true else if defualts to false
	 * @return function_call          get method is called and the 1st parameter is null coz we are not passing id
	 *                                $single is used to set the record returning multiple if true singluar if false
	 */
	public function get_by($where, $single = FALSE){
		$this->db->where($where);
		return $this->get(NULL, $single);
	}

	/**
	 * This insert or updates the data to mysql tables
	 * @param  object 	 $data This is will have all the data that is to be saved into mysql tables
	 * @param  int $id   if this is set means we have to update a record and we target that with the $id that is passed
	 * @return int $id   returns the id of the inserted or updated row in mysql table
	 */
	public function save($data,$id = NULL){
		
		// timestamp
		if($this->_timestamps == TRUE){
			$now = date('Y-m-d H:i:s');
			$id || $data['created'] = $now;
			$data['modified'] = $now;
		}

		// insert
		if($id === Null){
			// set the primairy key to null if set by mistake so that we dont get error 
			!isset($this->_primary_key) || $data[$this->_primary_key] = NULL;
			$this->db->set($data);
			$this->db->insert($this->_table_name);
			$id = $this->db->insert_id();
		}
		// update
		else{
			$filter =$this->_primary_filter;
			$id = $filter($id);
			$this->db->set($data);
			$this->db->where($this->_primary_key, $id);
			$this->db->update($this->_table_name);
		}

		return $id;
	}

	/**
	 * delete the value from my mysql table which id have been passed
	 * @param  int $id value of the row which has to be deleted from the mysql table
	 * @return void     no return type
	 */
	public function delete($id){
		$filter = $this->_primary_filter;
		$id = $filter($id);

		if(!$id){
			return FALSE;
		}

		$this->db->where($this->_primary_key, $id);
		$this->db->limit(1);
		$this->db->delete($this->_table_name);
	}

}

/* End of file MY-Model.php */
/* Location: ./application/models/MY-Model.php */