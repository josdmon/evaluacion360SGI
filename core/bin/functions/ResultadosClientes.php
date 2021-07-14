<?php
function ResultadosClientes() {
  $db = new Conexion();
  /*$sql = $db->query("SELECT id_cliente FROM clientes WHERE id_cliente = id_cliente;");*/
  if (isset($_SESSION['app_id_cliente'])) {
    $id = $_SESSION['app_id_cliente'];
  $sql2 = $db->query("SELECT * FROM recepcion WHERE id_cliente = '$id' ORDER BY codigo DESC;");
  if($db->rows($sql2) > 0) {//rows -> Obtener el número de filas de un conjunto de resultados
    while($d = $db->recorrer($sql2)) {
      $resultados[$d['id']] = array(
          'id' => $d['id'],
          'codigo' => $d['codigo'],
          'proyecto' => $d['proyecto'],
          'nombre_archivo' => $d['nombre_archivo'],
          'resultados' => $d['resultados'],
        );
    }
  } else {
    $resultados = false;
  }
  //$db->liberar($sql);
  $db->liberar($sql2);
  $db->close();
  return $resultados;
  }
}
?>
