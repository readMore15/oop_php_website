<?php

// include config
require('config.php');

require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');

require('controllers/Home.php');
require('controllers/Users.php');
require('controllers/Shares.php');

require('models/Home_Model.php');
require('models/User_Model.php');
require('models/Share_Model.php');

$bootstrap = new Bootstrap($_GET);

$controller = $bootstrap->createController();

if($controller){
	$controller->executeAction();
}