<?php

class Messages
{
	public static function setMsg($msg, $type)
	{
		if($type == 'error'){
			$_SESSION['errorMsg'] = $msg;
		}
		else {
			$_SESSION['successMsg'] = $msg;
		}
	}

	public static function display()
	{
		$msg = '';

		if(isset($_SESSION['errorMsg'])){
			$msg = '<div class="alert alert-danger">' .$_SESSION['errorMsg']. '</div>';
			unset($_SESSION['errorMsg']);
		}

		if(isset($_SESSION['successMsg'])){
			$msg = '<div class="alert alert-success">' .$_SESSION['successMsg']. '</div>';
			unset($_SESSION['successMsg']);
		}

		return $msg;
	}
}