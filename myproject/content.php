<h1>Notes</h1>
<!-- Information available after authorization -->
<?php if (isset($_SESSION['login']) && isset($_SESSION['password'])): ?>
	<h3><?php echo "Добрый день, ".$_SESSION['login']. "!"; // Выводим сообщение, что пользователь авторизирован ?> </h3>
<?php endif; ?>	
<!-- Messages -->
<?php require __DIR__ . '/common/notes_list.php'; ?> 
<!-- Create new message -->
<?php if (isset($_SESSION['login']) && isset($_SESSION['password'])): ?>
	<?php echo "<h2>" . "Добавить новую запись" . "</h2>"; ?>
	<!-- Form of adding of notes -->	
	<?php	if (!isset($x2)): ?> 	
		<?php require __DIR__ . '/../src/core/form/add_notes_form.php'; ?>
	<?php else: ?>
		<?php require __DIR__ . '/../src/core/form/add_notes_form_save.php'; ?>
	<?php endif; ?>
	<!-- Exception during the adding of note -->
	<?php	if (isset($NotesAddEx)): ?>  
		<?php echo "<h2>" . $NotesAddEx . "</h2>"; ?>
		<?php	endif; ?> 
<?php endif; ?>	
				
					

