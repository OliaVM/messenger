<!-- Exception during the adding of note -->
<?php	if (isset($NotesAddEx)): ?>  
	<?php echo "<h2>" . $NotesAddEx . "</h2>"; ?>
<?php	endif; ?> 

<?php
require_once __DIR__ . '/../../views/forms/editor_form.php';
require_once __DIR__ . '/../../views/view_notes_list.php'; 
?>
<?php //require_once __DIR__ . '/../common/footer.php'; ?> 