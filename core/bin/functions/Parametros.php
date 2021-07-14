<?php
function Parametros() {
  $db = new Conexion();
  $sql = $db->query("SELECT * FROM parametros;");
  if($db->rows($sql) > 0) {
    while($d = $db->recorrer($sql)) {
      $parametros[$d['id']] = $d;
    }
  } else {
    $parametros = false;
  }
  $db->liberar($sql);
  $db->close();
  return $parametros;
}
?>