<?php
function PlanAccionGeneralHseq() {
  $db = new Conexion();
  $sql = $db->query("SELECT * FROM plan_accion_hseq WHERE t_o =1;");
  if($db->rows($sql) > 0) {
    while($d = $db->recorrer($sql)) {
      $plan[$d['id']] = array(

        'id' => $d['id'],
        'competencia' => $d['competencia'],
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
