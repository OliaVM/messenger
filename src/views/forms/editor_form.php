<!-- Редактирование записи -->
<?php if (isset($_SESSION['login']) && isset($_SESSION['password'])): ?>
	<?php if (isset($_GET['red_id'])): ?>
		<?php foreach ($row5 as $row): ?>
		    <form method="POST">
				<p><h2><?php echo $row['id']; ?></h2></p>
				<p><h2><?php echo $row['note_date']; ?></h2></p>
				Введите название заметки(объемом до 150 знаков): 
				<input type="text" name="note_title" size="150" maxlength="150" value="<?php echo $row['note_title']; ?>"><br>
				Введите краткий текст сообщения (объемом до 500 знаков):  <br>
				<textarea name="short_text" rows="5" cols="60" maxlength="500" value=""><?php echo $row['short_text']; ?></textarea><br>
				Введите полный текст статьи (объемом до 5000 знаков): <br>
				<textarea name="note_text" rows="10" cols="60" maxlength="5000"><?php echo $row['note_text']; ?></textarea><br>
				<input type="submit" name="go_edit" value="Отправить"><br>
			</form>
		<?php endforeach; ?>
	<?php endif; ?>
<?php endif; ?>


