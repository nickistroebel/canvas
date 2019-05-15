<?PHP include_once 'php/core.php';
	init_();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Canvas</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript" src="js/jquery-1.11.3.js" ></script> 
		<script type="text/javascript" src="js/login.js" ></script> 
		<meta charset="utf-8">
	</head>
	<body>

<?PHP 
	if (conectado()=='si'){
		include_once 'main.php'; 
	} else {
		form_login();
	}
	function form_login(){
		echo ' 
		<div class="loginarea">
			<div class="lgform">
				<div class="lgtitulo">Inicia sesión en tu cuenta</div>
				<input class="lginput" type="text" id="email" placeholder="correo electrónico" value="">
				<input class="lginput" type="password" id="clave" placeholder="contraseña" value="">
				<div class="lgboton" id="entrars">
				Entrar
				</div>
				<div class="lgolvido">
				¿Olvido su contraseña?
				</div>
			</div>
		</div>
		';
	}
?>