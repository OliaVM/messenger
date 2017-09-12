<?php
class RegController {
	public $model;
	public $view;
	public function __construct() {
		$this->model = new RegModel();
		$this->view = new RegView();
	}
	public function actionReg($basa) {
		$this->model->regFormSendingControl($basa);
		$this->view->generateRegistrationView($basa);
	}
}

