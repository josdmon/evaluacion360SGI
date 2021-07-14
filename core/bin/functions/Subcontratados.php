<?php
function Subcontratados() {
  $db = new Conexion();
  $sql = $db->query("SELECT * FROM subcontratados ORDER BY id DESC;");
  if($db->rows($sql) > 0) {
    while($d = $db->recorrer($sql)) {
      $Proveedores[$d['id']] = array(
        'id' => $d['id'],
        'codigo' => $d['codigo'],
        'proveedor' =>$d['proveedor'],
        'matriz' => $d['matriz'],
        'fecha_m' => $d['fecha_m'],
        'fecha_s' => $d['fecha_s'],
        'tipo_m' => $d['tipo_m'],
        'analisis_m' => $d['analisis_m'],
        'estado_m' => $d['estado_m'],
        'fecha_e' => $d['fecha_e'],
        'fecha_r' => $d['fecha_r'],
        'entregado' => $d['entregado'],
      );
    }
  } else {
    $Proveedores = false;
  }
  $db->liberar($sql);
  $db->close();
  return $Proveedores;
}
?>
