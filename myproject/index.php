<?php
//main
require_once __DIR__ .'/../src/models/functions.php'; 

//Add Main Controller - Model, View, Controller of NOTES
require_once __DIR__ . "/../src/models/model_of_notes_work_with_databases.php";
require_once __DIR__ . "/../src/views/NotesView.php";
require_once __DIR__ .'/../src/controllers/NotesController.php';

//Add Model, View, Controller of AUTHORIZATION
require_once __DIR__ .'/../src/models/user_models/model_of_authorization.php'; 
require_once __DIR__ .'/../src/views/user_views/authorizationView.php'; 
require_once __DIR__ .'/../src/controllers/AuthorizationController.php';

//Add Model, View, Controller of REGISTRATION
require_once __DIR__ .'/../src/models/user_models/model_of_registration.php'; 
require_once __DIR__ .'/../src/views/user_views/registrationView.php'; 
require_once __DIR__ .'/../src/controllers/RegistrationController.php';


//Do Main Controller - NotesController
$controller = new NotesController();
$controller->actionWithNotes($basa, $page_name, $path); // Add methods of Class "NotesController"

