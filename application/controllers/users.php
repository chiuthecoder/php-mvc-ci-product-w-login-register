<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	//load login/Registration view
	public function index()
	{
		$this->load->view('login');
	}

	//process registration, vaildation message
	public function create()
	{
		$this->load->model('User');
		$result = $this->User->validate($this->input->post());

		if($result == "valid")
		{
			$something = $this->User->create($this->input->post());
			$success[] = 'Welcome! Registration was successful!';
			$this->session->set_flashdata('success', $success);
			redirect('/users');
		}
		else
		{
			$errors = array(validation_errors());
			$this->session->set_flashdata('errors', $errors);
			redirect('/users');

		}
	}

	//process user login
	public function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$this->load->model("User");
		$result = $this->User->retrieveByEmail($email);
		if($result && $result['password']=$password)
		{
			$user = array(
				'user_id' => $result['id'],
				'user_email' => $result['email'],
				'user_name' => $result['first_name'],
				'is_logged_in' => true
				);
			$this->session->set_userdata($user);
			redirect('/users/profile');
		}
		else
		{
			$this->session->set_flashdata("login_error", "Invalid email or password!");
			redirect('/users/index');
		}
	}

	//simple profile view of a user
	public function profile()
	{
		if($this->session->userdata('is_logged_in') === true)
		{
	 		
	 		echo 'You have sucessfully login. Click <a href="/users/logout">here</a> to logout.';
		}
		else
		{
		  redirect('/users/index');
		}
 
  }

  	//logout the user
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('/users/index');
	}

}
