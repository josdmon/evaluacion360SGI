<?php
function Informes() {
  $db = new Conexion();
  $sql = $db->query("SELECT * FROM informes  ORDER BY id DESC;");
  if($db->rows($sql) > 0) {
    while($d = $db->recorrer($sql)) {
      $informe[$d['id']] = array(

        'id' => $d['id'],
        'nombre_informe' => $d['nombre_informe'],
        'nombre_archivo' => $d['nombre_archivo'],
        'id_cliente' => $d['id_cliente'],
        'fecha' => $d['fecha'],
     );
    }
  } else {
    $informe = false;
  }
  $db->liberar($sql);
  $db->close();
  return $informe;
}
?>
