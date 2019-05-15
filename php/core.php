<?php
	
	define ('HOST', 'localhost');
	define ('DBB', 'camba');
	define ('USER', 'root');
	define ('PASS', 'minion21');

	function conectar(){
	    $conexion = mysqli_connect("localhost", USER, PASS, DBB);
	    return $conexion;
	}
	function consultar($consulta) {
	    $conexion = conectar();
	    mysqli_set_charset($conexion, 'utf8');
	    $resultado = mysqli_query($conexion, $consulta);
	    mysqli_close($conexion);
	    return $resultado;
	}
	function init_(){
		if (conectado()=='si'){
			
		} else {
			crear_cookies('no','');
		}
	}
	function conectado(){
		$galleta = isset($_COOKIE['conectado']) ? $_COOKIE['conectado']:'';
		return $galleta;
	}
	function sesionid(){
		$galleta = isset($_COOKIE['conectado']) ? $_COOKIE['identificador']:'';
		return $galleta;
	}
	function crear_cookies($conectado, $identificador){  
	        $conectado = strtolower($conectado); 
	        unset($_COOKIE['conectado']);
	        unset($_COOKIE['identificador']); 
	        $vida = time() + (86400 * 30); 
	        setcookie('conectado'    ,$conectado,$vida,'/');
	        setcookie('identificador',$identificador,$vida,'/'); 
	}
	function borrar_cookies(){ 
	        unset($_COOKIE['conectado']);
	        unset($_COOKIE['identificador']);
	        setcookie('conectado'     ,'' ,time()-3600 ,'/' );
	        setcookie('identificador' ,'' ,time()-3600 ,'/' );
	}
?>