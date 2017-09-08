<?php
session_start();
require_once __DIR__ . '/../autoload.php';
//Connection with database
$pathToConfig = __DIR__ . '/../../config/app.php';
$oConfig = new Config($pathToConfig);
$dbConfig = $oConfig->get('db');
$basa  = getDbConnection($dbConfig['dns'], $dbConfig['user'], $dbConfig['password']);
$basa->exec("set names utf8");
//,$dbConfig['options']



//router
//path from template.php to our page
if (isset($_GET['page_name'])) {
	$page_name = $_GET['page_name'];
	switch ($_GET['page_name']) {
		case 'content':
		$path = "/";
		break;
		case 'view_of_authorization':
		$path = "/../user_views/";
		break;
		case 'view_of_registration':
		$path = "/../user_views/";
		break;
		case 'editor':
		$path = "/../../models/private_actions/";
		break;
	}
}
else {
	$page_name = "content";
	$path = "/";
}


//Cookie existence check
require_once __DIR__ . '/user_models/model_of_cookies.php';
//Authorization
require_once __DIR__ . '/user_models/model_of_authorization.php';
// Registration
require_once __DIR__ . '/user_models/model_of_registration.php';
//  Work with database:
//adding in database:  text information, which the user uploaded; date,calculated using the function$ sent or show comments
require_once __DIR__ . '/model_of_notes_work_with_databases.php';
// Exit from session
require_once __DIR__ . '/user_models/model_of_exit.php';



?>
						
					

