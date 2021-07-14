<?php
function Categorias() {
  $db = new Conexion();
  $sql = $db->query("SELECT * FROM categorias;");
  if($db->rows($sql) > 0) {//rows -> Obtener el número de filas de un conjunto de resultados
    while($d = $db->recorrer($sql)) {
      
      $categorias[$d['id']] =array(
				'id' => $d['id'],
				'nombre' => $d['nombre'],
      );
    }
  } else {
    $categorias = false;
  }
  $db->liberar($sql);
  $db->close();
  return $categorias;
}
?>
