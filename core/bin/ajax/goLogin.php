<?php



if (!empty($_POST['user']) and !empty($_POST['pass'])) {//empty — Determina si una variable está vacía


	$db = new Conexion;
	$data = $db->real_escape_string($_POST['user']);/*mysqli_real_escape_string — Escapa los caracteres especiales de una cadena para usarla en una sentencia SQL, tomando en cuenta el conjunto de caracteres actual de la conexión*/
	$pass = Encrypt($_POST['pass']);

	$query = "SELECT id FROM users WHERE (user='$data' OR cedula='$data') AND pass='$pass' LIMIT 1;";

	$sql = $db->query("SELECT id FROM users WHERE (user='$data' OR cedula='$data') AND pass='$pass' LIMIT 1;");
	$sql2 = $db->query("SELECT id_cliente FROM clientes WHERE (nit='$data' OR email='$data') AND pass='$pass' LIMIT 1;");
	#echo "SELECT id FROM users WHERE (user='$data' OR email='$data') AND pass='$pass' LIMIT 1;";die;


	if($db->rows($sql) > 0){


		if ($_POST['session']) {
			ini_set('session.cookie_lifetime', time() + (60*60*24));
		}

		$respuesta = $db->recorrer($sql);
		$_SESSION['app_id'] = $respuesta[0];

//echo "<pre>";
// var_dump($_SESSION);die;

		echo 1;
	}elseif ($db->rows($sql2) > 0) {
		if ($_POST['session']) {
			ini_set('session.cookie_lifetime', time() + (60*60*24));
		}
		$respuesta = $db->recorrer($sql2);
		$_SESSION['app_id_cliente'] = $respuesta[0];
		echo 1;		
	}else{
		echo '<div class="alert alert-dismissible alert-danger">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>ERROR:</strong> Datos incorrectos.
		</div>';
	}
	$db->liberar($sql2);
	$db->liberar($sql);
	$db->close();
}else{
	echo '<div class="alert alert-dismissible alert-danger">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<strong>ERROR:</strong> Todos los datos deben estar llenos.
	</div>';
}
?>
