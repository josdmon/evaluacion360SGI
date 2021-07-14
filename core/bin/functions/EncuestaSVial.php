<?php
function EncuestaSVial() {
  $db = new Conexion();
  $sql = $db->query("SELECT * FROM encuesta;");
  if($db->rows($sql) > 0) {
    while($d = $db->recorrer($sql)) {
      $encuesta_vial[$d['id']] = array(
        'id' => $d['id'],
        'user' => $d['user'],
        'licencia' => $d['licencia'],
        'categoria_v' => $d['categoria_v'],
        'fecha_v' => $d['fecha_v'],
        'edad' => $d['edad'],
        'genero' => $d['genero'],
        'cargo' => $d['cargo'],
        'vinculado_e' => $d['vinculado_e'],
        'area' => $d['area'],
        'conduce_v' => $d['conduce_v'],
        'salir_t' => $d['salir_t'],
        'desplazamientos' => $d['desplazamientos'],
        'programa_s' => $d['programa_s'],
        'frecuencia_s' => $d['frecuencia_s'],
        'accidentes_t' => $d['accidentes_t'],
        'accidentes_t_c' => $d['accidentes_t_c'],
        'accidentes_t_r' => $d['accidentes_t_r'],
        'desplazamiento_cs' => $d['desplazamiento_cs'],
        'tiempo_desp' => $d['tiempo_desp'],
        'distancia_cs' => $d['distancia_cs'],
        'accidentes_cs' => $d['accidentes_cs'],
        'accidentes_cs_c' => $d['accidentes_cs_c'],
        'accidentes_cs_r' => $d['accidentes_cs_r'],
        'causa_accidente1' => $d['causa_accidente1'],
        'causa_accidente2' => $d['causa_accidente2'],
        'causa_accidente3' => $d['causa_accidente3'],
        'causa_accidente4' => $d['causa_accidente4'],
        'causa_accidente5' => $d['causa_accidente5'],
        'causa_accidente6' => $d['causa_accidente6'],
        'causa_accidente7' => $d['causa_accidente7'],
        'causa_accidente8' => $d['causa_accidente8'],
        'causa_accidente9' => $d['causa_accidente9'],
        'causa_accidente10' => $d['causa_accidente10'],
        'causa_accidente11' => $d['causa_accidente11'],
        'causa_accidente12' => $d['causa_accidente12'],
     );
    }
  } else {
    $encuesta_vial = false;
  }
  $db->liberar($sql);
  $db->close();
  return $encuesta_vial;
}
?>
