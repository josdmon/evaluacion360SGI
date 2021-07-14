<?php
function CadenaCustodia() {
  $db = new Conexion();
  $sql = $db->query("SELECT * FROM cadena_custodia ORDER BY id DESC;");
  if($db->rows($sql) > 0) {
    while($d = $db->recorrer($sql)) {
      $cadena[$d['id']] = array(

        'id' => $d['id'],
        'nombre_cadena' => $d['nombre_cadena'],
        'nombre_archivo' => $d['nombre_archivo'],
        'id_cliente' => $d['id_cliente'],
        'fecha' => $d['fecha'],
     );
    }
  } else {
    $cadena = false;
  }
  $db->liberar($sql);
  $db->close();
  return $cadena;
}
?>
