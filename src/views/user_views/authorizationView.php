<?php
class AuthClassView {
	public $authClassModel;
	public function __construct() {
		$this->authClassModel = new AuthClassModel();
	}

	public function showAuthForm() {
		//Authorization 
		if (isset($exAvtoriz3) || isset($exAvtoriz4) || isset($exAvtoriz8)) { 
			require __DIR__ . '/../forms/authorization_form_save.php'; 
		}
		else {
			require __DIR__ . '/../forms/authorization_form.php';
		}
	}

	//Exception during the authorization attempt
	public function showExeptionInAuthorization($basa) {
		if (isset($_POST['submit'])) {
			if (!empty($_REQUEST['password']) and !empty($_REQUEST['login'])) {
				$rowUser = $this->authClassModel->fieldsEmptinessControl($basa)[0];
				$password = $this->authClassModel->fieldsEmptinessControl($basa)[1];
				if (isset($rowUser['login'])) {
					$saltedPassword = $this->authClassModel->loginExistenceControl($rowUser, $password, $basa);
					if ($rowUser['password'] == $saltedPassword) {
						$this->authClassModel->setUserCookie($rowUser, $basa);
						$this->authClassModel->getSessionCount();
					}
					else {
						$exAvtoriz3 = $this->authClassModel->UserPasswordControl($rowUser, $saltedPassword, $basa);
						if (isset($exAvtoriz3)) {
							echo "<h2 class='redcolor'>" . $exAvtoriz3 . "</h2>";
						}
					}
				}
				else {
					$exAvtoriz4 = $this->authClassModel->loginExistenceControl($rowUser, $password, $basa);
					if (isset($exAvtoriz4)) {
						echo "<h2 class='redcolor'>" . $exAvtoriz4 . "</h2>";
					}
				}
			}
			else {
				$exAvtoriz8 = $this->authClassModel->fieldsEmptinessControl($basa);
				if (isset($exAvtoriz8)) {
					echo "<h2 class='redcolor'>" . $exAvtoriz8 . "</h2>";
				}
			}
		}
	}
	public function generateAuthorizationView($basa)
	{
		$this->showAuthForm();
		$this->showExeptionInAuthorization($basa);
		echo "<p><a href='/index.php?page_name=content'>Перейти на главную страницу</a></p>";
	}
}
