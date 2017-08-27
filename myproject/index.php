<?php
require_once __DIR__ .'/../src/models/functions.php'; 
require_once __DIR__ .'/../src/controllers/NotesController.php';
$controller = new NotesController();
$controller->actionWithNotes($basa, $page_name, $path);
?>






