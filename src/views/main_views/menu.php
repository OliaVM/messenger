<ul>
	<li><a href="/index.php">Главная</a></li>
	<li><a href="/index.php?page_name=authorization_page">Авторизоваться</a></li>
	<li><a href="/index.php?page_name=registration_page">Зарегистрироваться</a></li>
	<?php $exitController = new ExitController(); ?>
	<?php $exitController->actionExit(); ?>
	<li><a href="/index.php?page=1&key=all&page_name=content">Посмотреть список всех тем</a></li>
</ul>
		
			    
