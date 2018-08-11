<?php

class User_Model extends Model
{
	public function index()
	{
		return;
	}

	public function register()
	{
		// sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		$password = md5($post['password']);

		if($post['register_btn']){

			if(! $this->_email_exist($post['email'])) return die('Email already used!');

			$this->query("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
			$this->bind(':name', $post['name']);
			$this->bind(':email', $post['email']);
			$this->bind(':password', $password);

			$this->execute();

			if($this->lastInsertId()){
				header("Location: " . ROOT_URL . 'users/login');
			}
		}

		return;
	}

	public function login()
	{
		// sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		$password = md5($post['password']);

		if($post['login_btn']){
			$this->query("SELECT * FROM users WHERE email = :email AND password = :password");
			$this->bind(':email', $post['email']);
			$this->bind(':password', $password);
			$row = $this->single();

			if($row){
				$_SESSION['is_logged_in'] = true;
				$_SESSION['user_data'] = [
					'id'	=> $row['id'],
					'name'	=> $row['name'],
					'email'	=> $row['email']
				];
				header("Location: " . ROOT_URL . 'shares');
			}
			else{
				Messages::setMsg("Incorrect Login Details", 'error');
			}
		}

	}

	private function _email_exist($email)
	{
		$ret = true;

		$this->query("SELECT * FROM users WHERE email = :email");
		$this->bind(':email', $email);
		$rows = $this->resultSet();
		
		if(count($rows) > 0) $ret = false;

		return $ret;
	}
}