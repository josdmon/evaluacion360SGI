<?php
if (!empty($_POST['user']) and !empty($_POST['pass'])) {//empty — Determina si una variable está vacía
	$db = new Conexion;
	$data = $db->real_escape_string($_POST['user']);/*mysqli_real_escape_string — Escapa los caracteres especiales de una cadena para usarla en una sentencia SQL, tomando en cuenta el conjunto de caracteres actual de la conexión*/
	$pass = Encrypt($_POST['pass']);
	$sql = $db->query("SELECT id FROM users WHERE (user='$data' OR cedula='$data') AND pass='$pass' LIMIT 1;");
	$sql2 = $db->query("SELECT id_cliente FROM clientes WHERE (nit='$data' OR email='$data') AND pass='$pass' LIMIT 1;");
	#echo "SELECT id FROM users WHERE (user='$data' OR email='$data') AND pass='$pass' LIMIT 1;";die;

	if($db->rows($sql) > 0){
		if ($_POST['session']) {
			ini_set('session.cookie_lifetime', time() + (60*60*24));
		}
		$_SESSION['app_id'] = $db->recorrer($sql)[0];
		header('location: ?view=index');
	}elseif ($db->rows($sql2) > 0) {
		if ($_POST['session']) {
			ini_set('session.cookie_lifetime', time() + (60*60*24));
		}
		$_SESSION['app_id_cliente'] = $db->recorrer($sql2)[0];
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
