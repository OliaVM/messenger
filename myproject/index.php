<?php
//main
session_start();
require_once __DIR__ . '/../src/autoload.php';

//Connection with database
$pathToConfig = __DIR__ . '/../config/app.php';
$oConfig = new Config($pathToConfig);
$dbConfig = $oConfig->get('db');
$basa  = getDbConnection($dbConfig['dns'], $dbConfig['user'], $dbConfig['password']);
$basa->exec("set names utf8");

//router (path from template.php to our page - TO PAGE content, authorization_page, ...)
if (isset($_GET['page_name'])) {
	$page_name = $_GET['page_name'];
	switch ($_GET['page_name']) {
		case 'content':
		$path = "/";
		break;
		case 'authorization_page':
		$path = "/../user_views/";
		break;
		case 'registration_page':
		$path = "/../user_views/";
		break;
		case 'editor_page':
		$path = "/../private_actions/";
		break;
	}
}
else {
	$page_name = "content";
	$path = "/";
}

//Add Main Controller - Model, View, Controller of NOTES
require_once __DIR__ . "/../src/models/model_of_notes_work_with_databases.php";
require_once __DIR__ . "/../src/views/NotesView.php";
require_once __DIR__ .'/../src/controllers/NotesController.php';

//Add Model of COOKIES
require_once __DIR__ . '/../src/models/user_models/model_of_cookies.php'; //Cookie existence check

//Add Model, View, Controller of AUTHORIZATION
require_once __DIR__ .'/../src/models/user_models/model_of_authorization.php'; 
require_once __DIR__ .'/../src/views/user_views/authorizationView.php'; 
require_once __DIR__ .'/../src/controllers/AuthorizationController.php';

//Add Model, View of EXIT_from_session
require_once __DIR__ .'/../src/models/user_models/model_of_exit.php'; 
require_once __DIR__ .'/../src/views/user_views/view_of_exit.php'; 
require_once __DIR__ .'/../src/controllers/ExitController.php';

//Add Model, View, Controller of REGISTRATION
require_once __DIR__ .'/../src/models/user_models/model_of_registration.php'; 
require_once __DIR__ .'/../src/views/user_views/registrationView.php'; 
require_once __DIR__ .'/../src/controllers/RegistrationController.php';

//Add Model, View, Controller of EDITOR_OF_NOTES
require_once __DIR__ .'/../src/models/private_actions/editor.php'; 
require_once __DIR__ .'/../src/views/private_actions/editor_view.php'; 
require_once __DIR__ .'/../src/controllers/EditorController.php';

//Do Main Controller - NotesController
$controller = new NotesController();
$controller->actionWithNotes($basa, $page_name, $path); // Add methods of Class "NotesController"

