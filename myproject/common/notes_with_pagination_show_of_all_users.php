<?php
//display of information from database on main page
if (isset($_GET['page'])) { 
	// the count of articles, displayed on the page
	$num = 6; 
	// Get the current page number from the URL
	$_GET['page'] = intval($_GET['page']);
	$page = $_GET['page']; 
	// Define the total count of articles in the database
	$query=$basa->query("SELECT id FROM notes");
	$posts =$query->rowCount();
	
	// Find the total count of pages
	$total = ceil($posts / $num); 
	// Calculated what the number of article is start of page 
	$start = $page * $num - $num;  
	$sql = "SELECT notes.id, login, note_date, note_title, short_text, note_text FROM notes INNER JOIN users ON users.id= notes.user_id GROUP BY note_date LIMIT $start, $num";
	$notes = getNotesList($basa, $sql);
}
else {
	$sql = "SELECT notes.id, login, note_date, note_title, short_text, note_text FROM notes INNER JOIN users ON users.id= notes.user_id GROUP BY note_date"; 
	$notes = getNotesList($basa, $sql);
}



