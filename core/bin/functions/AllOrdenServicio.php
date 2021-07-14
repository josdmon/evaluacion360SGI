<?php
function AllOrdenServicio() {
  $db = new Conexion();
  $sql = $db->query("SELECT * FROM orden_servicio;");
  if($db->rows($sql) > 0) {
    while($d = $db->recorrer($sql)) {
      $ordenservicio[$d['id']] = array(
        'id' => $d['id'],
        'id_cliente' => $d['id_cliente'],
        'nombre_archivo' => $d['nombre_archivo'],
        'acta_cierre' => $d['acta_cierre'],
        'fecha' => $d['fecha'],
     );
    }
  } else {
    $ordenservicio = false;
  }
  $db->liberar($sql);
  $db->close();
  return $ordenservicio;
}
?>