<!-- Вывод на экран выбранного сообщения с комментариями к нему -->
<?php if (isset($_POST['button_show_coments'])): ?>
		<br><h2><?php echo "Сообщение с комментариями"; ?></h2>
		<?php foreach ($list2 as $row): ?>
			<?php $comment = explode(',', $row["GROUP_CONCAT(CONCAT_WS(',', c.comment_date, c.login, c.comment))"]); ?>
			<p><h2><?php echo $row['note_date']; ?></h2></p>
			<p><h2><?php echo $row['note_title']; ?></h2></p>
			<p><?php //echo $row['note_text']; ?></p>
			<?php echo $row['short_text']; ?><br>
			<table>
			    <?php foreach ($comment as $row2): ?>
	                  <tr><td><?php echo $row2; ?></td></tr>
	            <?php endforeach; ?>
	        </table>
		<?php endforeach; ?>
<?php endif; ?>

<!-- Вывод записей на экран -->
<?php if (isset($_GET['page'])): ?>
	<?php foreach ($notes as $row): ?>
		Автор: 
		<?php if (isset($row['login'])): ?>
			<?php echo $row['login']; ?>
		<?php endif; ?>
		<p><h2><?php //echo $row['id']; ?></h2></p
		<p><h2><?php echo $row['note_date']; ?></h2></p>
		<p><h2><?php echo $row['note_title']; ?></h2></p>
		<p><?php echo $row['short_text']; ?></p>
		<?php //echo $row['note_text']; ?><br>
		<?php if (isset($_SESSION['login']) && isset($_SESSION['password'])): ?>
			<form method="post">
				<input type='hidden' name="del_id" value="<?php echo $row['id']; ?>">
				<input name="button_del" value="Удалить сообщение" type="submit">
				<input type='hidden' name="red_id" value="<?php echo $row['id']; ?>">
				<a href='index.php?page_name=editor&red_id=<?php echo $row['id']; ?>'>Отредактировать сообщение</a>
				<input type='hidden' name="show_coments" value="<?php echo $row['id']; ?>">
				<input name="button_show_coments" value="Посмотреть комментарии" type="submit">
				<br>Введите комментарий: 
				<textarea  type="text" name="comment" rows="1" cols="70" maxlength="500"></textarea><br>
				<input type='hidden' name="article_id" value="<?php echo $row['id']; ?>">
				<input type="submit" name="sentComment" value="Отправить комментарий"><br> 
			</form>
		<?php endif; ?>
		<br>
	<?php endforeach; ?>
	<?php require __DIR__ . '/../../src/core/pagination/contentPagination.php'; ?>
<?php endif; ?>

