<?php
function Recepcion() {
  $db = new Conexion();
  $sql = $db->query("SELECT * FROM recepcion ORDER BY codigo DESC;");
  if($db->rows($sql) > 0) {
    while($d = $db->recorrer($sql)) {
      $recepcion[$d['codigo']] = array(

        'codigo' => $d['codigo'],
        'proyecto' => $d['proyecto'],
        'plan_muestreo' =>$d['plan_muestreo'],
        'id_cliente' => $d['id_cliente'],
        'nombre_archivo' => $d['nombre_archivo'],
        'f_recepcion' => $d['f_recepcion'],
        'resultados' => $d['resultados'],
        'anexo' => $d['anexo'],
        'f_resultados' => $d['f_resultados'],

      );
    }
  } else {
    $recepcion = false;
  }
  $db->liberar($sql);
  $db->close();
  return $recepcion;
}
?>
