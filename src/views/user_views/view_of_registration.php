						<!-- Registration -->	
						<?php	if (isset($exRegistration5) || isset($exRegistration6)): ?> 
							<?php require __DIR__ . '/../forms/registration_form_save.php'; ?>
						<?php else: ?>
							<?php require __DIR__ . '/../forms/registration_form.php'; ?>
						<?php endif; ?>
						<!--  Exception during the registration attempt -->
						<?php	if (isset($exRegistration5)): ?> 
							<h2 class="redcolor"><?php echo $exRegistration5; ?></h2>
						<?php	endif; ?> 
						<?php	if (isset($exRegistration6)): ?>  
							<h2 class="redcolor"><?php echo $exRegistration6; ?></h2>
						<?php	endif; ?>
						<?php	if (isset($exRegSymbol)): ?>  
							<?php echo "<h2>" . $exRegSymbol . "</h2>"; ?>
						<?php	endif; ?> 
						<p><a href="/index.php?page_name=content">Перейти на главную страницу</a></p>
					




