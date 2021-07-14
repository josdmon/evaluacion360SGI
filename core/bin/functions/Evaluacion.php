<?php
function Evaluacion(){
	$db = new Conexion();

	$sql = $db->query("SELECT * FROM resultadosevaluacion;");
	if($db->rows($sql) > 0) {//rows -> Obtener el número de filas de un conjunto de resultados
		while ($d = $db->recorrer($sql)) {
			$evaluacion[$d['evaluador']] = array(
				'id_usuario' => $d['id_usuario'],
				'evaluador' => $d['evaluador'],
				'area' => $d['area'],
				'comunicacion' => $d['comunicacion'],
				'fecha' => $d['fecha']
			);
		}
	}else{
		$evaluacion = false;
	}
	$db->liberar($sql);
	$db->close();

	return $evaluacion;
}
?>
