<?php
function EncuestaSVial20() {
  $db = new Conexion();
  $sql = $db->query("SELECT * FROM encuesta20;");
  if($db->rows($sql) > 0) {
    while($d = $db->recorrer($sql)) {
      $encuesta_vial[$d['id']] = array(
        'id' => $d['id'],
        'user' => $d['user'],
        'licencia' => $d['licencia'],
        'categoria_v' => $d['categoria_v'],
        'fecha_v' => $d['fecha_v'],
        'edad' => $d['edad'],
        'ciudad' => $d['ciudad'],
        'genero' => $d['genero'],
        'cargo' => $d['cargo'],
        'vinculado_e' => $d['vinculado_e'],
        'area' => $d['area'],
        'conduce_v' => $d['conduce_v'],
        'experiencia_conduce' => $d['experiencia_conduce'],
        'salir_t' => $d['salir_t'],
        'desplazamiento_v_p' => $d['desplazamiento_v_p'],
        'programa_s' => $d['programa_s'],
        'programa_tiempo' => $d['programa_tiempo'],
        'frecuencia_s' => $d['frecuencia_s'],
        'accidentes_t' => $d['accidentes_t'],
        'otro' => $d['otro'],
        'accidentes_t_peaton' => $d['accidentes_t_peaton'],
        'accidentes_t_pasajero' => $d['accidentes_t_pasajero'],
        'accidentes_t_d_material' => $d['accidentes_t_d_material'],
        'circustancia_a_t' => $d['circustancia_a_t'],
        'circustancia_a_pet' => $d['circustancia_a_pet'],
        'circustancia_a_dmat' => $d['circustancia_a_dmat'],
        'circustancia_a_pasj' => $d['circustancia_a_pasj'],
        'desplazamiento_cs' => $d['desplazamiento_cs'],
        'tiempo_desp_ida' => $d['tiempo_desp_ida'],
        'tiempo_desp_vuelta' => $d['tiempo_desp_vuelta'],
        'distancia_cs' => $d['distancia_cs'],
        'factores_riesgo' => $d['factores_riesgo'],
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
