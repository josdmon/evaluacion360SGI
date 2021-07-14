<?php
function InformesClientes() {
  $db = new Conexion();
  if (isset($_SESSION['app_id_cliente'])) {
  $id = $_SESSION['app_id_cliente'];
  $sql = $db->query("SELECT * FROM informes WHERE id_cliente = '$id' ORDER BY id DESC;");
  if($db->rows($sql) > 0) {
    while($d = $db->recorrer($sql)) {
      $informecliente[$d['id']] = array(
        'id' => $d['id'],
        'nombre_informe' => $d['nombre_informe'],
        'nombre_archivo' => $d['nombre_archivo'],
        'fecha' => $d['fecha'],
     );
    }
  } else {
    $informecliente = false;
  }
  $db->liberar($sql);
  $db->close();
  return $informecliente;
}}
?>
