<?php
function Clientes() {
  $db = new Conexion();
  $sql = $db->query("SELECT * FROM clientes ORDER BY user;");
  if($db->rows($sql) > 0) {//rows -> Obtener el número de filas de un conjunto de resultados
    while($d = $db->recorrer($sql)) {
      $clientes[$d['id_cliente']] = array(
          'id_cliente' => $d['id_cliente'],
          'nit' => $d['nit'],
          'user' => $d['user'],
          'contacto' => $d['contacto'],
          'direccion' => $d['direccion'],
          'email' => $d['email'],
          'telefono' => $d['telefono'],
          'ciudad' => $d['ciudad'],
          'departamento' => $d['departamento'],
          'pass' => $d['pass']
        );
    }
  } else {
    $clientes = false;
  }
  $db->liberar($sql);
  $db->close();
  return $clientes;
}
?>