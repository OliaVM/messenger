<?php
require_once __DIR__ . '/../src/core/classes/Config.php';
// Add the  date of note
require_once __DIR__ . '/../src/core/functions/GetFullNowDateInCity.php';
//Connecting to the database
require_once __DIR__ . '/../src/core/classes/Config.php';
require_once __DIR__ . '/../src/core/functions/db.php';
//Adding information to the database
require_once __DIR__ . '/../src/core/functions/submitDb.php';
require_once __DIR__ . '/../src/core/functions/submitDbComment.php';
//Display information from the database
require_once __DIR__ . '/../src/core/functions/getNotesList.php';
// Generating the salt password
require_once __DIR__ . '/../src/core/functions/generateSalt.php';	
