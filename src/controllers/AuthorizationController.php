<?php
class AuthController {
	public $model;
	public $view;
	public function __construct() {
		$this->model = new AuthClassModel();
		$this->view = new AuthClassView();
	}
	public function actionAuthoriz($basa) {
		$this->model->formSendingControl($basa);
		$this->view->generateAuthorizationView($basa);
	}
}

