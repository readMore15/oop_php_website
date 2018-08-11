<?php

class Shares extends Controller
{
	protected function index()
	{
		$viewmodel = new Share_Model();
		$this->returnView($viewmodel->index(), true);
	}

	protected function add()
	{
		$viewmodel = new Share_Model();
		$this->returnView($viewmodel->add(), true);
	}
}