<?php include('config.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Projeto 01</title>
	<script <?php echo INCLUDE_PATH; ?>src="https://kit.fontawesome.com/eed7c7f338.js" crossorigin="anonymous"></script>
	<script src="https://platform.linkedin.com/badges/js/profile.js" async defer type="text/javascript"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH; ?>estilo/style.css">
</head>
<body>
	<header>
		<div class="center">
			<div class="logo left"><img src="<?php echo INCLUDE_PATH; ?>images/marielen.png" width="200" height="100" /></div><!--logo-->
			<nav class="desktop right">
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
			<nav class="mobile right">
				<div class="botao-menu-mobile">
					<i class="fa-solid fa-bars"></i>
				</div>
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
		<div class="clear"></div><!--clear-->
		</div><!--center-->
	</header>

	<?php

		$url = isset($_GET['url']) ? $_GET['url'] : 'home';

		if (file_exists('pages/'.$url.'.php')){
			include('pages/'.$url.'.php');
		}
		else{
			$pagina404 = true;
			include('pages/404.php');
		}

	?>

	<footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"'; ?>>
		<div class="center">
			<p>Todos os direitos reservados</p>
		</div><!--center-->
	</footer>
	<script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
	<script src="<?php echo INCLUDE_PATH; ?>js/script.js"></script>
	<?php
		if ($url == 'contato') {

	?>
	<script src="<?php echo INCLUDE_PATH; ?>pages/contato.php"></script>
	<?php } ?>

</body>
</html>