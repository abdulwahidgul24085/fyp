<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function login(){
		$dashboard = 'admin/dashboard';
		$rules = $this->user_m->rules;
		$this->form_validation->set_rules($rules);

		$this->ion_auth->logged_in() == FALSE || redirect($dashboard);

		if($this->form_validation->run() == TRUE){
			// we can login in the user
			$username = $this->input->post('email');
			$password = $this->input->post('password');
			$remember = $this->input->post('remember');
			$this->ion_auth->login($username,$password,$remember);
			redirect($dashboard);
		}

		$this->data['subview'] = 'admin/user/login';
		$this->load->view('admin/_layout_model',$this->data);
	}

	public function logout(){
		$this->ion_auth->logout();
		redirect('admin/user/login');
	}


	public function forgot_password(){
		$forgotten_password=$this->ion_auth->forgotten_password('admin@fyp.com');

		if ($forgotten_password) { //if there were no errors
					$this->session->set_flashdata('message', $this->ion_auth->messages());
					redirect("admin/user/login", 'refresh'); //we should display a confirmation page here instead of the login page
				}
				else {
					$this->session->set_flashdata('message', $this->ion_auth->errors());
					redirect("auth/forgot_password", 'refresh');
				}
	}
	public function create_user(){
		$username = "fyp";
		$password = "password";
		$email ="atifnaeem@fyp.com";
		$additional_data = array(
				'first_name' => 'atif',
				'last_name' => 'naeem',
				'company' =>'Bahria'

			);

		$group = array('2');

		if($this->ion_auth->register($username,$password,$email,$additional_data,$group)){
			echo "User registered";
		}
		else{
			echo "user not regsitered";
		}
	}

}
/* End of file user.php */
/* Location: ./application/controllers/user.php */