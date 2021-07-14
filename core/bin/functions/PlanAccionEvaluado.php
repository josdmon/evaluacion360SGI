<?php
function PlanAccionEvaluado() {
  $db = new Conexion();
  $sql = $db->query("SELECT * FROM plan_accion_evaluado;");
  if($db->rows($sql) > 0) {
    while($d = $db->recorrer($sql)) {
      $plan[$d['id']] = array(

        'id' => $d['id'],
        'user' => $d['user'],
        'area' =>$d['area'],
        'historia_evaluacion' =>$d['historia_evaluacion'],
        'apro_jefe_area' =>$d['apro_jefe_area'],
        'nombre_archivo' =>$d['nombre_archivo'],

      );
    }
  } else {
    $plan = false;
  }
  $db->liberar($sql);
  $db->close();
  return $plan;
}
?>
