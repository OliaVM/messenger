<?php
//main
require_once __DIR__ .'/../src/models/functions.php'; 
//Add Main Controller - NotesController
require_once __DIR__ .'/../src/controllers/NotesController.php';

//Add AuthorizationController
require_once __DIR__ .'/../src/models/user_models/model_of_authorization.php'; 
require_once __DIR__ .'/../src/views/user_views/authorizationView.php'; 
require_once __DIR__ .'/../src/controllers/AuthorizationController.php';

//Do Main Controller - NotesController
$controller = new NotesController();
$controller->actionWithNotes($basa, $page_name, $path);







