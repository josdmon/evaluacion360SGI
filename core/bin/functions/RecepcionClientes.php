<?php
function RecepcionClientes() {
  $db = new Conexion();
  /*$sql = $db->query("SELECT id_cliente FROM clientes WHERE id_cliente = id_cliente;");*/
  if (isset($_SESSION['app_id_cliente'])) {
    $id = $_SESSION['app_id_cliente'];
  $sql2 = $db->query("SELECT * FROM recepcion WHERE id_cliente = '$id'  ORDER BY codigo DESC;");
  if($db->rows($sql2) > 0) {//rows -> Obtener el número de filas de un conjunto de resultados
    while($d = $db->recorrer($sql2)) {
      $recepcionc[$d['codigo']] = array(
          'codigo' => $d['codigo'],
          'proyecto' => $d['proyecto'],
          'plan_muestreo' =>$d['plan_muestreo'],
          'nombre_archivo' => $d['nombre_archivo'],
          'f_recepcion' => $d['f_recepcion'],
          'resultados' => $d['resultados'],
          'anexo' => $d['anexo'],
          'f_resultados' => $d['f_resultados'],
        );
    }
  } else {
    $recepcionc = false;
  }
  //$db->liberar($sql);
  $db->liberar($sql2);
  $db->close();
  return $recepcionc;
  }
}
?>
