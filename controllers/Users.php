<?php

class Users extends Controller
{
	protected function register()
	{
		$viewmodel = new User_Model();
		$this->returnView($viewmodel->register(), true);
	}

	protected function login()
	{
		$viewmodel = new User_Model();
		$this->returnView($viewmodel->login(), true);
	}

	protected function logout()
	{
		unset($_SESSION['is_logged_in']);
		unset($_SESSION['user_data']);
		session_destroy();
		header("Location: " . ROOT_URL . 'shares');
	}
}