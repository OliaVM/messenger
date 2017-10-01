<?php
class AuthClassView {
	public $authClassModel;
	public function __construct() {
		$this->authClassModel = new AuthClassModel();
	}

	public function showAuthForm($basa) {
		$printAuthEx = $this->showExeptionInAuthorization($basa);
		//add authorization form
		if (!isset($printAuthEx )) { 
			require __DIR__ . '/../forms/authorization_form.php';
		}
		else {
			require __DIR__ . '/../forms/authorization_form_save.php'; 
			
		}
		echo "<h2 class='redcolor'>" . $printAuthEx . "</h2>";	
	}

	//Exception during the authorization attempt
	public function showExeptionInAuthorization($basa) {
		$printAuthEx = $this->authClassModel->formSendingControl($basa);
		return $printAuthEx;
	}

	public function generateAuthorizationView($basa)
	{
		$this->showAuthForm($basa);
		echo "<p><a href='/index.php'>Перейти на главную страницу</a></p>";
	}

}
