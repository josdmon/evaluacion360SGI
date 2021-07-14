<?php
function UserEvalua(){
	$db = new Conexion();
	$sql = $db->query("SELECT * FROM users INNER JOIN resultadosevaluacion ON users.id = resultadosevaluacion.id_usuario AND resultadosevaluacion.comunicacion > 0 ORDER BY nombres;");
	if ($db->rows($sql) > 0) {
		while ($d = $db->recorrer($sql)) {
			$users[$d['id']] = array(
				'id' => $d['id'],
				'nombres' => $d['nombres'],
				'apellidos' => $d['apellidos'],
				'area' => $d['area'],
				'categorias' => $d['categorias'],
				'email' => $d['email']
			);
		}
	}else{
		$users = false;
	}
	$db->liberar($sql);
	$db->close();

	return $users;
}

?>
