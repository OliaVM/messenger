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
		
		$rowUser = $this->model->fieldsEmptinessControl($basa)[0];
		$password = $this->model->fieldsEmptinessControl($basa)[1];
		$saltedPassword = $this->model->loginExistenceControl($rowUser, $password, $basa);

		//$arrOfDataAboutSession = $this->model->UserPasswordControl($rowUser, $saltedPassword, $basa);
		//$_SESSION['auth'] = $arrOfDataAboutSession['auth']; 
		//$_SESSION['id'] = $arrOfDataAboutSession['id']; 
		//$_SESSION['login'] = $arrOfDataAboutSession['login'];
		//$_SESSION['password']  = $arrOfDataAboutSession['password']; 
			
		$this->view->generateAuthorizationView($basa);
	}
}

