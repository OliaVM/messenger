<?php
//model
require_once __DIR__ . "/../models/model_of_notes_work_with_databases.php";
//view
require_once __DIR__ . "/../views/NotesView.php";
class NotesController {
	public $model;
	public $view;
	function __construct() {
		$this->model = new NotesModel();
		$this->view = new NotesView();
	}
	function actionWithNotes($basa, $page_name, $path) {
		$this->model->add_notes_to_database($basa);
		$this->model->add_comment_to_database($basa);
		$this->model->delete_note($basa);

		$arrOfDataAboutNotes = $this->model->show_notes($basa);
		$key = $arrOfDataAboutNotes['key']; 
		$page = $arrOfDataAboutNotes['page']; 
		$notes = $arrOfDataAboutNotes['notes'];
		$total = $arrOfDataAboutNotes ['total']; 
		
		$list2 = $this->model->show_comments($basa);
	
		$this->view->generateNotesView($key, $page, $notes, $total, $list2, $basa, $page_name, $path);
	}
}