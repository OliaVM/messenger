<!-- Редактирование записи -->
<?php if (isset($_SESSION['login']) && isset($_SESSION['password'])): ?>
	<?php if (isset($_POST['go'])): ?>
		<?php if (isset($_POST['note_title']) && isset($_POST['note_text']) && isset($_POST['short_text']) && isset($x2)): ?>
		    <form method="POST">
				Введите название заметки(объемом до 150 знаков): 
				<input type="text" name="note_title" size="150" maxlength="150" value="<?php echo $_POST['note_title']; ?>"><br>
				Введите полный текст статьи (объемом до 5000 знаков): <br>
				<textarea name="note_text" rows="10" cols="60" maxlength="5000"><?php echo $_POST['note_text']; ?></textarea><br>
				Введите краткий текст сообщения (объемом до 500 знаков):  <br>
				<textarea name="short_text" rows="5" cols="60" maxlength="500" value=""><?php echo $_POST['short_text']; ?></textarea><br>
				<input type="submit" name="go" value="Отправить"><br>
			</form>
		<?php endif; ?>	
	<?php endif; ?>	
<?php endif; ?>


