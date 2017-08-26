<!-- Authorization -->
<?php if (isset($exAvtoriz3) || isset($exAvtoriz4) || isset($exAvtoriz8)): ?>
	<?php require __DIR__ . '/../forms/authorization_form_save.php'; ?>
<?php else: ?>
	<?php require __DIR__ . '/../forms/authorization_form.php'; ?>
<?php endif; ?>
<!-- Exception during the authorization attempt -->
<?php	if (isset($exAvtoriz3)): ?> 
		<h2 class="redcolor"><?php echo $exAvtoriz3; ?></h2>
<?php	endif; ?> 
<?php	if (isset($exAvtoriz4)): ?>  
		<h2 class="redcolor"><?php echo $exAvtoriz4; ?></h2>
<?php	endif; ?> 
<?php	if (isset($exAvtoriz8)): ?>  
		<h2 class="redcolor"><?php echo $exAvtoriz8; ?></h2>
<?php	endif; ?> 
<p><a href="/index.php?page_name=content">Перейти на главную страницу</a></p>






