<?php
class EditorController {
	public $model;
	public $view;
	public function __construct() {
		$this->model = new EditorModel();
		$this->view = new EditorView();
	}
	public function action_edit($basa, $path, $page_name) {
		$this->view->generateEditorView($basa, $path, $page_name);
	}
}
