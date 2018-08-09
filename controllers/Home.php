<?php

class Home extends Controller
{
	protected function index()
	{
		$viewmodel = new Home_Model();
		$this->returnView($viewmodel->index(), true);
	}
}