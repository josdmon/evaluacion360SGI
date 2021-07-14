<?php
function OrdenServicio() {
  $db = new Conexion();
  if (isset($_SESSION['app_id_cliente'])) {
  $id = $_SESSION['app_id_cliente'];
  $sql = $db->query("SELECT * FROM orden_servicio WHERE id_cliente = '$id';");
  if($db->rows($sql) > 0) {
    while($d = $db->recorrer($sql)) {
      $ordenservicio[$d['id']] = array(
        'id' => $d['id'],
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
}}
?>