<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function index($error="")
	{
		$this->load->view('head');
		$this->load->view('header');
		$this->load->view('signup',$error);
	}

	public function createUser(){
		//$_POST['username']
		// Check if required fields are filled.
		$error[] = array();
		$username =$_POST['username'];
		$password =$_POST['password'];
		$email =$_POST['email'];

		if(!$username){
			$error["username"] = "Input username.";
		}
		if(!$password){
			$error["password"] = "Input password.";	
		}
		if(!$email){
			$error["email"] = "Input email.";	
		}

		$error = array_filter($error);

		if(empty($error)){
			$this->load->model('User');
			$this->User->createuser($username,$password,$email);
		}
		else{
			$this->index($error);
		}
	}
}

/* End of file signup.php */
/* Location: ./application/controllers/signup.php */