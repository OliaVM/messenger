<?php
require_once __DIR__ .'/common/func.php'; 
?>

<!DOCTYPE html>
<html lang="ru">
	<head>
	  <meta charset="UTF-8">
	  <link href="../style/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	  <link href="../style/style.css" rel="stylesheet" type="text/css"/>
	  <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
	  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
	  <meta name="viewport" content="width=device-width, initial-scale = 1.0">
	  <link type="text/css" rel="stylesheet" href="../style/bootstrap-responsive.css">
	</head>
	<body>
		<div class="row-fluid">
			<div class="span9" id="box12">
				<?php require_once __DIR__ .'/common/header.php'; ?> 
			</div>
		</div>
		<div class="container-fluid">
			<div class="row-fluid">

			  	<div class="span3" id="box4" id="menu"> 
					<?php require_once __DIR__ .'/common/menu.php'; ?> 
				</div>

				<div class="span6" id="box8">
					<div>
						<?php require_once   __DIR__ . $path . $page_name.'.php'; ?> 
					</div>
				</div>
			</div>
		</div>	

		<div class="row-fluid">
			<div class="span9" id="box12">
				<?php require_once  __DIR__ . '/common/footer.php'; ?>  
			</div>
		</div>
	</body>
</html>  




