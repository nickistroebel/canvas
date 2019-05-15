<?php
		include_once 'php/core.php';

		$pagina = $_GET['pag'];
		if (conectado()=='si'){
			if ($pagina==''){
				$pagina='proyectos';
			} 
		} else {
			$pagina = "login";
		}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Canvas</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<meta charset="utf-8">
		<script type="text/javascript" src="js/jquery-1.11.3.js" ></script>
		<script type="text/javascript" src="js/main.js" ></script>
	</head>
	<body>
		<div id="barrasuperior">
			<div class="logo">
				NETBITS
			</div>
			<div id="logout">
					LogOut
			</div>
		</div>
		<div id="info">

		</div>
		<div id="lienzo">
			
				<?php 
					$pag = $pagina . '.php'; 
					include_once $pag; 
				?>

		</div>
		<div id="pie">
		</div>

	</body>
</html>

