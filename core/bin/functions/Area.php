<?php
function Area() {
  $db = new Conexion();
  $sql = $db->query("SELECT * FROM areas;");
  if($db->rows($sql) > 0) {
    while($d = $db->recorrer($sql)) {
      $area[$d['id']] =array(
				'id' => $d['id'],
				'area' => $d['area'],
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
