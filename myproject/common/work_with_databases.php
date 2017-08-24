<?php
//  Work with database:
//adding in database text information, which the user uploaded; date,calculated using the function 
if(isset($_POST["go"])){
	//Work with database: Adding the text information and the date
	if (isset($_POST['note_title']) && isset($_POST['note_text'])) {
		try {
			if(!empty($_POST['note_title']) && !empty($_POST['note_text']) && !empty($_POST['short_text'])) {
				// The calculation of the date of publication
				$data = GetFullNowDateInCity(7);
				//Adding information in the database
				$sql="INSERT INTO notes (user_id, note_title, note_text, short_text, note_date) VALUES (:user_id, :note_title, :note_text, :short_text, :data)"; 
				submitDb($sql, $basa, $data);
			}
			else {
				//Generate the exception
        		throw new Exception('Заполните все поля!');
			}
		}
		catch (Exception $ex2) {
			// Print the exception message
			$NotesAddEx = $ex2->getMessage();
		}
	}
}

//sent comment in databases
if (isset($_POST['sentComment'])) {
	if (!empty($_POST['comment'])) {
		$commentDate = GetFullNowDateInCity(7);
		$sql = "INSERT INTO comments (article_id, comment, login, comment_date) VALUES (:article_id, :comment, :login, :comment_date)";
		submitDbComment($sql, $basa, $commentDate);
	}
}

//show comments from the databases
if (isset($_POST['button_show_coments'])) {
	$sql3 = "SELECT n.note_date, n.note_title, n.note_text, n.short_text, n.id, GROUP_CONCAT(CONCAT_WS(',', c.comment_date, c.login, c.comment)), c.article_id FROM notes n INNER JOIN comments c ON c.article_id = n.id  WHERE n.id = '".$_POST['show_coments']."' GROUP BY n.id";
	$list2 =  getNotesList($basa, $sql3);
}

// Delete notes
require_once __DIR__ . '/../private_func/delete_information.php';

//display of information from database on page(with pagination)
if (isset($_GET['key'])) {
	switch ($_GET['key']) {
				case 'indiv':
				require_once __DIR__ . '/notes_with_pagination_show.php';
				$key='indiv'; 
				break;
				case 'all':
				require_once __DIR__ . '/notes_with_pagination_show_of_all_users.php';
				$key='all'; 
				break;
	}
}


