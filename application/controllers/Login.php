<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	public function index()
	{
		$this->load->view('login');
	}
	public function admin_login()
	{
	$this->load->library('form_validation');
	 $this->form_validation->set_rules('username', 'Username', 'required');
	  $this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run())
		{
	//	$this->load->view("admin_login");
		$username = $this->input->post('username');
    $password = $this->input->post('password');
		echo "username: $username and password: $password";
		}
		else
		{
		$this->load->view("login");
		}
	}
}
