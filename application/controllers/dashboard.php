<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('head');
		$this->load->view('header');
		$this->load->view('dashboard');
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */