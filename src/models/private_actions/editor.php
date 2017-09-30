<?php
class ExceptionNotesAddEx extends Exception { }

class EditorModel {
	public function authExistenceControl($basa) {
		if (isset($_SESSION['login']) && isset($_SESSION['password'])) {
			$this->getParamExistenceControl($basa);
		}
	}
	public function getParamExistenceControl($basa) {
		//Get the record from databases and display on the screen for editing
		if (isset($_GET['red_id'])) {
			$_GET['red_id'] = intval($_GET['red_id']); 
			$id = $_GET['red_id']; 
		    $sql3 = 'SELECT * FROM notes WHERE id='.$id.' and user_id='.$_SESSION['id'];
			$row5 = $basa->query($sql3);
			$this->editingButtonSubmitControl($basa);
			return $row5; //obj
		}
	}
	public function editingButtonSubmitControl($basa) {
		//Editing the record
	    if (isset($_POST['go_edit'])) { 
	        // Update information in the edited record in the database
    		try {
				if (!empty($_POST['note_title']) && !empty($_POST['note_text']) && !empty($_POST['short_text'])) {
					$sql = 'UPDATE notes SET note_title =:note_title, short_text =:short_text, note_text =:note_text  WHERE id =:id';
					$_POST['note_title'] = $basa->quote($_POST['note_title']); 
					$_POST['note_text'] = $basa->quote($_POST['note_text']); 
					$_POST['short_text'] = $basa->quote($_POST['short_text']); 
					$prep = $basa->prepare($sql);
					$prep->bindValue(':note_title', $_POST['note_title'], PDO::PARAM_STR);
					$prep->bindValue(':short_text', $_POST['short_text'], PDO::PARAM_STR);
					$prep->bindValue(':note_text', $_POST['note_text'], PDO::PARAM_STR);
					$prep->bindValue(':id', $_GET['red_id'], PDO::PARAM_INT);
					$prep->execute(); 
					header("Location: ../index.php?page=1&key=indiv&page_name=content");	
					//header("Location: http://myproject.local/index.php?page=1&key=indiv");	
				}
				else {
					//Generate the exception
	        		throw new Exception('Заполните все поля!');
				}
			}
			catch (Exception $NotesAddEx) {
				return $NotesAddEx->getMessage(); //string
			}
	    }
	}
}

	
