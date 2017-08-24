<?php
//display of information from database on main page
if (isset($_GET['page'])) { 
	// the count of articles, displayed on the page
	$num = 3; 
	// Get the current page number from the URL
	$_GET['page'] = intval($_GET['page']);
	$page = $_GET['page']; 
	// Define the total count of articles in the database
	$query=$basa->query("SELECT id FROM notes WHERE user_id=".$_SESSION['id']);
	$posts =$query->rowCount();
	
	// Find the total count of pages
	$total = ceil($posts / $num); 
	// Calculated what the number of article is start of page 
	$start = $page * $num - $num;  

	$sql = "SELECT n.id, n.note_date, n.note_title, n.short_text, n.note_text ,u.login FROM notes n JOIN users u ON u.id = n.user_id WHERE u.login = '".$_SESSION['login']."' LIMIT $start, $num";
	$notes = getNotesList($basa, $sql);
}
else {
	$sql = 'SELECT n.id, n.note_date, n.note_title, n.short_text, n.note_text ,u.login FROM notes n JOIN users u ON u.id = n.user_id WHERE u.login = "'.$_SESSION['login'].'"';
	$notes = getNotesList($basa, $sql);
}

