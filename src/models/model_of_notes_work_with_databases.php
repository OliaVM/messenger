<?php
class NotesModel {
	public function add_notes_to_database($basa) {
		//  Work with database:
		//adding in database text information, which the user uploaded; date,calculated using the function 
		if(isset($_POST["go"])) {
			//Work with database: Adding the text information and the date
			try {
				if(empty($_POST['note_title']) || empty($_POST['note_text']) || empty($_POST['short_text'])) {
					
	        		throw new Exception('Заполните все поля!');
				}
				// The calculation of the date of publication
				$data = GetFullNowDateInCity(7);
				//Adding information in the database
				$sql="INSERT INTO notes (user_id, note_title, note_text, short_text, note_date) VALUES (:user_id, :note_title, :note_text, :short_text, :data)"; 
					$this->submitDb($sql, $basa, $data);
				
			}
			catch (Exception $ex2) {
				// Print the exception message
				$NotesAddEx = $ex2->getMessage();
				return $NotesAddEx;
			}
		}
	}

	public function submitDb($sql, $basa, $data) {
				$prep = $basa->prepare($sql);
				$_POST['note_title'] = $basa->quote($_POST['note_title']); 
				$_POST['note_text'] = $basa->quote($_POST['note_text']); 
				$_POST['short_text'] = $basa->quote($_POST['short_text']); 
				$prep->bindValue(':user_id', $_SESSION['id'], PDO::PARAM_INT);
				$prep->bindValue(':note_title', $_POST['note_title'], PDO::PARAM_STR);
				$prep->bindValue(':note_text', $_POST['note_text'], PDO::PARAM_STR);
				$prep->bindValue(':short_text', $_POST['short_text'], PDO::PARAM_STR);
				$prep->bindValue(':data', $data, PDO::PARAM_STR);
				$arr = $prep->execute(); 
				return $arr;
	}


	public function add_comment_to_database($basa) {
		//sent comment in databases
		if (isset($_POST['sentComment'])) {
			if (!empty($_POST['comment'])) {
				$commentDate = GetFullNowDateInCity(7);
				$sql = "INSERT INTO comments (article_id, comment, login, comment_date) VALUES (:article_id, :comment, :login, :comment_date)";
				return $this->submitDbComment($sql, $basa, $commentDate);
			}
		}
	}

	public function submitDbComment($sql, $basa, $commentDate) {
		$prep = $basa->prepare($sql);
		$_POST['comment'] = $basa->quote($_POST['comment']); 
		$prep->bindValue(':article_id', $_POST['article_id'], PDO::PARAM_STR);
		$prep->bindValue(':comment', $_POST['comment'], PDO::PARAM_STR);
		$prep->bindValue(':login', $_SESSION['login'], PDO::PARAM_INT);
		$prep->bindValue(':comment_date', $commentDate, PDO::PARAM_STR);
		$arr = $prep->execute(); 
		return $arr;
	}

	// Delete notes
	public function delete_note($basa) {
		require_once __DIR__ . '/private_actions/delete_information.php';
	}


	public function show_notes($basa) {
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
			return ['key' => $key, 
					'page' => $page, 
					'notes' => $notes, 
					'total' => $total 
			];
		}
	}


	public function show_comments($basa) {
		//show comments from the databases
		if (isset($_POST['button_show_coments'])) {
			$sql3 = "SELECT n.note_date, n.note_title, n.note_text, n.short_text, n.id, GROUP_CONCAT(CONCAT_WS(',', c.comment_date, c.login, c.comment)), c.article_id FROM notes n INNER JOIN comments c ON c.article_id = n.id  WHERE n.id = '".$_POST['show_coments']."' GROUP BY n.id";
			return  $this->getNotesList($basa, $sql3);
			
		}
	}

	public function getNotesList($basa, $sql) { 
		$notes_list = $basa->query($sql);
		return $notes_list;
	}
}


