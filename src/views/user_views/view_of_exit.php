<?php
class ExitView {
	public function show_button_exit() {
		if (isset($_SESSION['login'])) {
			echo '<li><a href="/index.php?page=1&key=indiv&page_name=content">Посмотреть список своих сообщений, добавить новую запись</a></li>';
			//Display the exit button from the session 
			require_once __DIR__ . '/../forms/exit_button.php'; 
		}
	}
}




