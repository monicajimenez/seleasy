<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
   {
        parent::__construct();
        
        $this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->model('User_model');
   }
   /* End of constructor*/

	public function index($form_name= '')
	{
		$data['form_name'] = $form_name;

		$this->load->view('head');
		$this->load->view('header');
		$this->load->view('signup',$data);
	}
	/* End of function index*/

	public function create()
	{
		$form_name= 'signup';

		if ($this->form_validation->run('signup'))
		{
			$username = trim($_POST['username']);
			$name = trim($_POST['name']);
			$password = trim($_POST['password']);
			$email = trim($_POST['email']);
			
			if ($this->User_model->create($username,$name,$password,$email))
			{
				$this->load->view('dashboard');
			}
			else
			{
				$this->index($form_name);
			}
		}
		else
		{
			$this->index($form_name);
		}
	}	
	/* End of function create*/

	public function check_unique_username()
	{
		$username = trim($_POST['username']);

		if ($this->User_model->check_unique_username($username))
		{
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('check_unique_username', 'The %s "' . $username  . '" is already taken.');
			return FALSE;
		}
	}	
	/* End of function check_unique_username*/

	public function check_unique_email()
	{
		$email = trim($_POST['email']);

		if ($this->User_model->check_unique_email($email))
		{
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('check_unique_email', 'The %s  "' . $email . '" is already taken.');
			return FALSE;
		}
	}	
	/* End of function check_unique_email*/

	public function signin()
	{
		$form_name= 'signin';

		if ($this->form_validation->run('signin'))
		{
			$this->load->view('dashboard');
		}
		else
		{
			$this->index($form_name);
		}
	}	
	/* End of function login*/

	public function terminal_signin()
	{
			$username = trim($_POST['username_signin']);
			$password = trim($_POST['password_signin']);
			
			if ($this->User_model->signin($username,$password))
			{
				return TRUE;
			}
			else{
				$this->form_validation->set_message('terminal_signin', 'Username or Password incorrect.');
				return FALSE;
			}
	}
	/* End of function terminal login*/

}
/* End of file user.php */
/* Location: ./application/controllers/user.php */