<?php
function CadenaClientes() {
  $db = new Conexion();
  if (isset($_SESSION['app_id_cliente'])) {
  $id = $_SESSION['app_id_cliente'];
  $sql = $db->query("SELECT * FROM cadena_custodia WHERE id_cliente = '$id' ORDER BY id DESC;");
  if($db->rows($sql) > 0) {
    while($d = $db->recorrer($sql)) {
      $cadenacliente[$d['id']] = array(
        'id' => $d['id'],
        'nombre_cadena' => $d['nombre_cadena'],
        'nombre_archivo' => $d['nombre_archivo'],
        'fecha' => $d['fecha'],
     );
    }
  } else {
    $cadenacliente = false;
  }
  $db->liberar($sql);
  $db->close();
  return $cadenacliente;
}}
?>
