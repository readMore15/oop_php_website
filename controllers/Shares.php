<?php

class Shares extends Controller
{
	protected function index()
	{
		$viewmodel = new Share_Model();
		$this->returnView($viewmodel->index(), true);
	}
}