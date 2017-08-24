<?php
//Class Work {
//function get_data() {
session_start();
//require_once __DIR__ . '/../../../src/autoload.php';
//Connection with database
$pathToConfig = __DIR__ . '/../../config/app.php';
$oConfig = new Config($pathToConfig);
$dbConfig = $oConfig->get('db');
try { 
$basa  = getDbConnection($dbConfig['dns'], $dbConfig['user'], $dbConfig['password']);
$basa->exec("set names utf8");
}
catch( PDOException  $e) {  
    echo $e->getMessage();  
}
//,$dbConfig['options']

//router
if (isset($_GET['page_name'])) {
	$page_name = $_GET['page_name'];
	switch ($_GET['page_name']) {
		case 'content':
		$path = "/";
		break;
		case 'avtorization_page':
		$path = "/avtorization/";
		break;
		case 'registration_page':
		$path = "/avtorization/";
		break;
		case 'editor':
		$path = "/private_func/";
		break;
	}
}
//Cookie existence check
require_once __DIR__ . '/../avtorization/cookies.php';
//Authorization
require_once __DIR__ . '/../avtorization/avtorization.php';
// Registration
require_once __DIR__ . '/../avtorization/registration.php';
//  Work with database:
//adding in database:  text information, which the user uploaded; date,calculated using the function$ sent or show comments
require_once __DIR__ . '/../common/work_with_databases.php';
//}
//}
?>
						
					

