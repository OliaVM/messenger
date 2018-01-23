<!DOCTYPE html>
<html lang="ru">
	<head>
	  <meta charset="UTF-8">
		<!-- CSS Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<!-- theme Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- js Bootstrap -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
		<!-- CSS -->
		<link href="/style/messenger_style.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<div class="container" >
			<div class="row">
				<img src="/picture/main.jpg" class="img-responsive"> 
			</div>
			<div class="row" id="header">
				<?php require_once __DIR__ .'/header.php'; ?>
			</div>

			<div class="row bg-info">
				<div class="col-xs-6 col-sm-4" id="menu">
					<?php require_once __DIR__ .'/menu.php'; ?> 
				</div>
				<div class="col-xs-12 col-sm-8" id="page">
					<?php require_once   __DIR__ . $path . $page_name.'.php'; ?> 
				</div>
			</div>

			<div class="row" id="footer">
				<h1><?php require_once  __DIR__ . '/footer.php'; ?></h1>
			</div>
			<div class="row">
				<img src="/picture/footer.jpg" class="img-responsive">  
			</div>
		</div>
	</body>
</html>  	    
