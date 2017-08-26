<?php
require_once __DIR__ . '/classes/Config.php';
// Add the  date of note
require_once __DIR__ . '/functions/GetFullNowDateInCity.php';
//Connecting to the database
require_once __DIR__ . '/classes/Config.php';
require_once __DIR__ . '/functions/db.php';
//Adding information to the database
require_once __DIR__ . '/functions/submitDb.php';
require_once __DIR__ . '/functions/submitDbComment.php';
//Display information from the database
require_once __DIR__ . '/functions/getNotesList.php';
// Generating the salt password
require_once __DIR__ . '/functions/generateSalt.php';	
