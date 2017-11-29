<h1>Notes</h1>
<!-- Information available after authorization -->
<?php if (isset($_SESSION['login']) && isset($_SESSION['password'])): ?>
	<h3><?php echo "Добрый день, ".$_SESSION['login']. "!"; // Выводим сообщение, что пользователь авторизирован ?> </h3>
<?php endif; ?>	
<!-- Notes -->
<?php require __DIR__ . '/../view_notes_list.php'; ?> 
<!-- Create new note -->
<?php if (isset($_SESSION['login']) && isset($_SESSION['password'])): ?>
	<?php echo "<h2>" . "Добавить новую запись" . "</h2>"; ?>
	<!-- Form of adding of notes -->
	<?php $notesModel = new NotesModel(); ?>
	<?php $printNotesAddEx = $notesModel->add_notes_to_database($basa); ?>

	<?php	if (!isset($printNotesAddEx)): ?> 	
		<?php require __DIR__ . '/../forms/add_notes_form.php'; ?>
	<?php else: ?>
		<?php require __DIR__ . '/../forms/add_notes_form_save.php'; ?>
	<?php endif; ?>
	<?php echo "<h2 class='redcolor'>" . $printNotesAddEx . "</h2>"; ?>	
	<!-- Exception during the adding of note -->

<?php endif; ?>	
				