<?php
function Resultados() {
  $db = new Conexion();
  $sql = $db->query("SELECT * FROM resultados ORDER BY codigo DESC;");
  if($db->rows($sql) > 0) {
    while($d = $db->recorrer($sql)) {
      $resultados[$d['id_muestra']] = array(
        'id_muestra' => $d['id_muestra'],
        'resultado' => $d['resultado']
      );
    }
  } else {
    $resultados = false;
  }
  $db->liberar($sql);
  $db->close();
  return $resultados;
}
?>
