<?php
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
		$key = $arrOfDataAboutNotes['key']; // key for pagination
		$page = $arrOfDataAboutNotes['page']; 
		$notes = $arrOfDataAboutNotes['notes']; // getNotesList
		$total = $arrOfDataAboutNotes ['total']; 
		
		$list2 = $this->model->show_comments($basa);
	
		$this->view->generateNotesView($key, $page, $notes, $total, $list2, $basa, $page_name, $path);
	}
}
