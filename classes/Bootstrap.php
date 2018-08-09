<?php

class Bootstrap
{
	private $controller;
	private $action;
	private $request;

	public function __construct($request)
	{
		$this->request = $request;

		if($this->request['controller'] == '') {
			$this->controller = 'home';
		}
		else {
			$this->controller = $this->request['controller'];
		}

		if($this->request['action'] == '') {
			$this->action = 'index';
		}
		else {
			$this->action = $this->request['action'];
		}
	}

	public function createController()
	{
		// check if class exists
		if(class_exists($this->controller)) {
			$parents = class_parents($this->controller);

			// check if extended
			if(in_array('Controller', $parents)) {
				//check if controller has this method
				if(method_exists($this->controller, $this->action)) {
					return new $this->controller($this->action, $this->request);
				}
				else {
					echo 'Method does\'t exist';
					return;
				}
			}
			else {
				echo 'Base controller not found';
				return;
			}
		}
		else {
			echo 'Controller not found';
			return;
		}
	}
}