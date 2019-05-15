<?PHP

include 'core.php'; 

$comando = $_POST['comando'];

switch($comando){
case 'login':
	$email = $_POST['email'];
	$clave = $_POST['clave'];
	loguear($email, $clave);
	break;
case 'quit':
	cerrar();
	break; 
case 'camba':
	$seccion = $_POST['seccion'];
	$datos = $_POST['datos'];
	$id_proyecto = $_POST['idp'];
	cambas($id_proyecto, $seccion, $datos);
	break;

}

function loguear($email, $clave){
	$registro = consultar("SELECT * FROM users WHERE correo='$email' AND password='$clave' LIMIT 1 ");
	$encontrado = mysqli_num_rows($registro);
	$row = mysqli_fetch_assoc($registro);
	$id = $row['id'];

	if ($encontrado>0){
		crear_cookies('si',$id);
		$sms = 'OK';
	} else {
		$sms = 'ERROR';
	}
	echo json_encode(array("sms" => $sms, "pag" => "index.php"));
}

function cerrar(){
	borrar_cookies();
	echo json_encode(array("sms" => 'OK', "pag" => "index.php"));

}

function cambas($id_proyecto, $seccion, $datos){
	consultar("INSERT INTO tablero VALUES ('','$id_proyecto','$seccion','$datos')");
	echo json_encode(array("sms" => 'OK', "pag" => "index.php?pag=canvas&id=". $id_proyecto));
}
 

?>