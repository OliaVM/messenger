<?php
class RegView {
	public $regModel;
	public function __construct () {
		$this->regModel = new RegModel;
	}
	//Registration 	
	public function showRegForm($basa) {
		$exRegistration = $this->regModel->regFormSendingControl($basa); //Exception during the registration attempt 
		if (isset($exRegistration)) {
			require __DIR__ . '/../forms/registration_form_save.php';
		}
		else {
			require __DIR__ . '/../forms/registration_form.php';
		}
		// Print the exeption
		echo '<h2 class="redcolor">' . $exRegistration . '</h2>';
	}

	public function generateRegistrationView($basa) {
		$this->showRegForm($basa);
		echo "<p><a href='/index.php?page_name=content'>Перейти на главную страницу</a></p>";
	}

}
