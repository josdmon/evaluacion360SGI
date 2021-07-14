<?php
function Mando() {
  $db = new Conexion();
  $sql = $db->query("SELECT * FROM categorias;");
  if($db->rows($sql) > 0) {
    while($d = $db->recorrer($sql)) {
      $area[$d['id']] =array(
				'id' => $d['id'],
				'nombre' => $d['nombre'],
      );
    }
  } else {
    $area = false;
  }
  $db->liberar($sql);
  $db->close();
  return $area;
}
?>
