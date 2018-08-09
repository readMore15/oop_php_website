<?php

class Share_Model extends Model
{
	public function index()
	{
		$this->query("SELECT * FROM shares");
		$rows = $this->resultSet();
		return $rows;
	}
}