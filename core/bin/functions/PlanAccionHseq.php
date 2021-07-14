<?php
function PlanAccionHseq() {
  $db = new Conexion();
  $sql = $db->query("SELECT * FROM plan_accion_hseq");
  if($db->rows($sql) > 0) {
    while($d = $db->recorrer($sql)) {
      $plan[$d['id']] = array(

        'id' => $d['id'],
        'competencia' => $d['competencia'],
        'mandos_m' =>$d['mandos_m'],
        'operativos' =>$d['operativos'],
        'general' =>$d['general'],

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
