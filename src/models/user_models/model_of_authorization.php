<?php
// Authorization
// Get the information from the database and compare with input user data
class AuthClassModel {
	public function formSendingControl($basa) {
		if (isset($_POST['submit'])) {
			$this->fieldsEmptinessControl($basa);
		} 
	} // end of formSendingControl


	public function fieldsEmptinessControl($basa) {
		try {
			//If the fields username and password filled
			if (!empty($_REQUEST['password']) and !empty($_REQUEST['login'])) {
				$login = $_REQUEST['login']; 
				$password = $_REQUEST['password']; 
				$sql = 'SELECT * FROM users WHERE login="'.$login.'"';
				$sth = $basa->query($sql);
				$rowUser = $sth->fetch(PDO::FETCH_ASSOC); //Преобразуем ответ из БД в строку массива
				$this->loginExistenceControl($rowUser, $password, $basa);
				return [$rowUser, $password];
			}
			else {
				// Generate the exception
				throw new Exception('Запоните все поля!');
			}
		}
		catch (Exception $ex8) {
			//Print the exception message
			return $ex8->getMessage();
			//throw new Exception($ex8->getMessage());
		}
	} // end of fieldsEmptinessControl

	public function loginExistenceControl($rowUser, $password, $basa) {	//$rowUser, $password		
		try {
			//If the database returned a non-empty answer, it means this login exist
			if (isset($rowUser['login'])) {
				$salt = $rowUser['salt'];
				//Salt the password from the form
				$saltedPassword = md5($password.$salt);
				$this->UserPasswordControl($rowUser, $saltedPassword, $basa);
				return $saltedPassword;
			}
			else {
				//Generate the exception
				throw new Exception('Пользователь с таким именем не зарегистрирован');
			}
		}
		catch (Exception $ex4) {
			//Print the exception message
			$exAvtoriz4 = $ex4->getMessage();
			return $exAvtoriz4;
		}
	} //end of loginExistenceControl

	public function UserPasswordControl($rowUser, $saltedPassword, $basa) { //$rowUser, $saltedPassword
		try {
			//If salt password from the database matches with the salted password from the form
			if ($rowUser['password'] == $saltedPassword) {
				// Write to the session information about avtorization
				$_SESSION['auth'] = true; 
				$_SESSION['id'] = $rowUser['id']; 
				$_SESSION['login'] = $rowUser['login']; 
				$_SESSION['password'] = $rowUser['password']; 
				$this->setUserCookie($rowUser, $basa);
				$this->getSessionCount();
				return ['auth' => $_SESSION['auth'], 
						'id' => $_SESSION['id'], 
						'login' => $_SESSION['login'], 
						'password' => $_SESSION['password'] 
				];
			}
			else {
				//Generate the exception
				throw new Exception('Не верно введен логин или пароль');
			}
		}
		catch (Exception $ex3) {
				//Print the exception message
				$exAvtoriz3 = $ex3->getMessage();
				return $exAvtoriz3;
		}
	} //end of UserPasswordControl


	public function setUserCookie($rowUser, $basa) {	//	$rowUser, 									
		//Verify whether the checkbox 'Remember me' is clicked 
		if (!empty($_REQUEST['remember']) and $_REQUEST['remember'] == 1) {
			$key = generateSalt(); 
			setcookie('login', $rowUser['login'], time()+60*60*24*30); 
			setcookie('key', $key, time()+60*60*24*30); 
			
			$sql = 'UPDATE users SET cookie="'.$key.'" WHERE login="'.$login.'"';
			$keys = $basa->query($sql);
		}
	}

	public function getSessionCount() {
		//Counter sessions
		if (!isset($_SESSION['count'])) {
			$_SESSION['count'] = 0;
		}	
		else {
			$_SESSION['count']++;  
		}
		return $_SESSION['count'];
	}
}


