<ul>
	<li><a href="/index.php">Главная</a></li>
	<li><a href="/index.php?page_name=authorization_page">Авторизоваться</a></li>
	<li><a href="/index.php?page_name=view_of_registration">Зарегистрироваться</a></li>
	<?php if (isset($_SESSION['login'])): ?>
		<li><a href="/index.php?page=1&key=indiv&page_name=content">Посмотреть список своих сообщений, добавить новую запись</a></li>
		<!-- Display the exit button from the session -->
		<?php require_once __DIR__ . '/../forms/exit_button.php' ?>
	<?php endif; ?>
	<li><a href="/index.php?page=1&key=all&page_name=content">Посмотреть список всех тем</a></li>
</ul>
		
			    
