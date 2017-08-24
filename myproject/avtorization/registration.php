<?php
// Registration
//Sent information to the database from the form
if (isset($_POST['submit2'])) {
	try {
		//If the registration form is sent and all fields are not empty
		if (!empty($_REQUEST['password2']) and !empty($_REQUEST['login2']) and !empty($_REQUEST['email2']) and !empty($_REQUEST['name']) and !empty($_REQUEST['surname']) and !empty($_REQUEST['date_of_birth']) and !empty($_REQUEST['gender'])) {
			$login = $_REQUEST['login2']; 
			$password = $_REQUEST['password2']; 
			$email = $_REQUEST['email2']; 
			$name = $_REQUEST['name'];
			$surname = $_REQUEST['surname'];
			$date_of_birth = $basa->quote($_REQUEST['date_of_birth']);
			$gender = $_REQUEST['gender'];
				


			// Performs the validation to freedom login. The response from the database record into a variable $row
			$sql = 'SELECT * FROM users  WHERE login="'.$login.'"';
			$isLoginFree = $basa->prepare($sql);
			$isLoginFree->execute();
			//$isLoginFree = $basa->query($sql);
			$row = $isLoginFree->fetch(PDO::FETCH_ASSOC);

			try {
				//If $row is empty - the login is free
				if (!isset($row['login'])) {
					try	{
						if (preg_match("/[a-zA-Z0-9а-яА-Я]{3,20}/", $_REQUEST['login2'])) {
							//$_REQUEST['login2'], $_REQUEST['name'], $_REQUEST['surname']
							//Generate the salt using the function generateSalt() and salt the password
							$salt = generateSalt(); 
							$saltedPassword = md5($password.$salt); 

							// Added information to the database from the form
							$sql2 = 'INSERT INTO users (login, password, salt, email, name, 
							surname, date_of_birth, gender) VALUES (:login, :password, :salt, :email, :name, :surname, :date_of_birth, :gender)';
							$prep = $basa->prepare($sql2);
							$prep->bindValue(':login', $login, PDO::PARAM_STR);
							$prep->bindValue(':password', $saltedPassword, PDO::PARAM_STR);
							$prep->bindValue(':salt', $salt, PDO::PARAM_STR);
							$prep->bindValue(':email', $email, PDO::PARAM_STR);
							$prep->bindValue(':name', $name, PDO::PARAM_STR);
							$prep->bindValue(':surname', $surname, PDO::PARAM_STR);
							$prep->bindValue(':date_of_birth', $date_of_birth, PDO::PARAM_STR);
							$prep->bindValue(':gender', $gender, PDO::PARAM_STR);
							$prep->execute(); 
										
							//The message about the successful registration
							echo "<script language='javascript'> alert('Вы успешно зарегистрированы!'); </script>";
						}
						else {
							 throw new Exception('Вы можете использовать только буквы и цифры. Число буквенных символов должно быть не меньше трех и не больше 20');
						}
					}
					catch (Exception $ex10) {
						//Print the exception message
						$exRegSymbol = $ex10->getMessage();
					}
						
				}
				//If $row is not empty - the login is not free
				else {
					//Generate the exception
			        throw new Exception('Этот логин уже занят!');
		     	}
			}
			catch (Exception $ex6) {
				//Print the exception message
				$exRegistration6 = $ex6->getMessage();
			}
			
		}
		//Not filled any of the fields
		else {
			//Generate the exception
	        throw new Exception('Заполните все поля!');
     	}
	}
	catch (Exception $ex5) {
		// Print the exception message
		$exRegistration5 = $ex5->getMessage();
	}
}




