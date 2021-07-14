<?php
function ProveedoresSubcontratados() {
  $db = new Conexion();
  $sql = $db->query("SELECT * FROM proveedores_subcontratados ORDER BY nombre;");
  if($db->rows($sql) > 0) {
    while($d = $db->recorrer($sql)) {
      $Proveedores[$d['id']] = array(

        'id' => $d['id'],
        'nombre' => $d['nombre'],
        'email' =>$d['email'],
        'direccion' => $d['direccion'],
        'lugar' => $d['lugar'],
        'telefono' => $d['telefono'],
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
