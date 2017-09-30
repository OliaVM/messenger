<?php
class EditorView {
	public $editorModel; 
	public function __construct() {
		$this->editorModel = new EditorModel();
	}
	public function getData($basa) {
		return $this->editorModel->getParamExistenceControl($basa);
	}
	public function pritOfExceptionOfEdit($basa) {
			$ex = $this->editorModel->editingButtonSubmitControl($basa);
			if (isset($ex)) {
				echo "<h2 class='redcolor'>" . $ex . "</h2>";
			}
	}
	public function generateEditorView($basa, $path, $page_name) {
		$row5 = $this->getData($basa);
		$this->pritOfExceptionOfEdit($basa);
		require_once __DIR__ . '/../../views/forms/editor_form.php';
		require_once __DIR__ . '/../../views/view_notes_list.php'; 
	}
}