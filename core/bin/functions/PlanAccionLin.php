<?php
function PlanAccionLin() {
  $db = new Conexion();
  $sql = $db->query("SELECT * FROM lin_plan_accion");
  if($db->rows($sql) > 0) {
    while($d = $db->recorrer($sql)) {
      $plan[$d['id']] = array(

        'id' => $d['id'],
        'nombre' => $d['nombre'],
        'plan_accion' => $d['plan_accion'],
        'lin' =>$d['lin'],
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
