<?php

class Share_Model extends Model
{
	public function index()
	{
		if(isset($_SESSION['is_logged_in'])){
			$this->query("SELECT * FROM shares WHERE user_id = :user_id ORDER BY create_date DESC");
			$this->bind(':user_id', $_SESSION['user_data']['id']);
		}
		else{
			$this->query("SELECT * FROM shares ORDER BY create_date DESC");
		}
		
		$rows = $this->resultSet();
		return $rows;
	}

	public function add()
	{
		// sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['share_btn']){
			$this->query("INSERT INTO shares (title, body, link, user_id) VALUES (:title, :body, :link, :user_id)");
			$this->bind(':title', $post['title']);
			$this->bind(':body', $post['body']);
			$this->bind(':link', $post['link']);
			$this->bind(':user_id', 1);

			$this->execute();

			if($this->lastInsertId()){
				header("Location: " . ROOT_URL . 'shares');
			}
		}

		return;
	}
}