<?php
function HistorialEvaluacion(){
	$db = new Conexion();

	$sql = $db->query("SELECT * FROM historial_evaluacion;");
	if($db->rows($sql) > 0) {//rows -> Obtener el número de filas de un conjunto de resultados
		while ($d = $db->recorrer($sql)) {
			$evaluacion[$d['id']] = array(
        'id' => $d['id'],
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
