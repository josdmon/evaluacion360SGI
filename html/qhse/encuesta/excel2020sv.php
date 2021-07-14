<?php
 if(false != $_users) {
 header("Content-Type: application/vnd.ms-excel");
 header('Content-Disposition: attachment; filename="Reporte.xls"');



  $HTML = utf8_decode('<table style="cellspacing="10"; cellpadding="10"; border-collapse="collapse"; border="1""><thead>
  <tr>
  <th colspan="18" bgcolor="#a8addd">A. GENERALES</th>
  <th colspan="14" bgcolor="#a8ddcb">B. ROL EN EL TRABAJO</th>
  <th colspan="12" bgcolor="#dda8a8">C. IDENTIFICACION DE ACCIDENTES</th>
  <th colspan="15" bgcolor="#cba8dd">D. DESPLAZAMIENTOS</th>
  <th colspan="8" bgcolor="#a8ddac">E. TRAYECTO IN - ITINERE</th>
  <th colspan="19" bgcolor="#a8addd">F. FACTORES DE RIESGO I</th>
  </tr>
  <tr>

  <th rowspan="2" width="40%">No.</th>
  <th rowspan="2">.....Nombres_y_Apellidos.....</th>
  <th rowspan="2">Cedula</th>
  <th rowspan="2">Edad</th>
  <th rowspan="2">Género</th>
  <th rowspan="2">...............Cargo...............</th>
  <th rowspan="2">Ciudad</th>
  <th colspan="2">¿Tiene licencia de conducción?</th>
  <th colspan="8">¿Qué categoría licencia es?</th>
  <th rowspan="2">¿Cuál es la fecha de vigencia?</th>

  <th colspan="6">Grupo al que pertenece</th>
  <th colspan="2">¿Cómo_parte_de_las_funciones de su cargo conduce usted vehículo?</th>
  <th rowspan="2">Experiencia como conductor</th>
  <th colspan="5">Vinculado a la empresa como</th>

  <th colspan="3">¿En los últimos cinco años ha tenido accidente como conductor?</th>
  <th colspan="3">¿En los últimos cinco años ha tenido accidente como peatón?</th>
  <th colspan="3">¿En los últimos cinco años ha tenido accidentes como pasajero?</th>
  <th colspan="3">¿En los últimos cinco años ha tenido algún incidente de transito con daños materiales, pero no personales?</th>

  <th colspan="4">¿Con qué frecuencia realiza desplazamientos como parte de sus funciones?</th>
  <th colspan="2">¿Conduce su propio vehículo para desplazamientos de función</th>
  <th colspan="2">Mis desplazamientos son planificados por</th>
  <th colspan="7">¿Con cuánto tiempo de antelación para prever desplazamientos? </th>

  <th colspan="5">¿Los medios desplazamiento que utilizo para los trayectos casa - trabajo son?</th>
  <th colspan="3">Tiempo desplazamiento (Casa - trabajos)</th>

  <th colspan="6">Principales factores de riesgo</th>
  <th colspan="13">Causas que motivan el riesgo</th>

  </tr>

  <tr>

  <th>SI</th>
  <th>NO</th>
  <th>A1</th>
  <th>A2</th>
  <th>B1</th>
  <th>B2</th>
  <th>B3</th>
  <th>C1</th>
  <th>C2</th>
  <th>C3</th>

  <th>Administrativo</th>
  <th>Comercial</th>
  <th>Técnico</th>
  <th>Operativo</th>
  <th>Asistencial</th>
  <th>Conductor</th>
  <th>SI</th>
  <th>NO</th>
  <th>Contrato directo</th>
  <th>Contrato prestación de servicios</th>
  <th>Contrato obra labor</th>
  <th>Servicios temporales</th>
  <th>No esta vinculado</th>


  <th>SI</th>
  <th>NO</th>
  <th>___Circustancia___</th>
  <th>SI</th>
  <th>NO</th>
  <th>___Circustancia___</th>
  <th>SI</th>
  <th>NO</th>
  <th>___Circustancia___</th>
  <th>SI</th>
  <th>NO</th>
  <th>___Circustancia___</th>

  <th>Diario</th>
  <th>Alguna vez a la semana</th>
  <th>Una o dos veces al mes</th>
  <th>No me desplazo</th>
  <th>SI</th>
  <th>NO</th>
  <th>Usted mismo</th>
  <th>Empresa</th>
  <th>1-4 Horas</th>
  <th>5-8 Horas</th>
  <th>0-12 Horas</th>
  <th>Mas de 12 Horas</th>
  <th>1-3 Dias</th>
  <th>4-6 Dias</th>
  <th>Mas de 6 dias</th>


  <th>A pie</th>
  <th>Vehículo automotor</th>
  <th>Moto o Ciclomotor</th>
  <th>Bicicleta</th>
  <th>T. Publico</th>
  <th>Ida Horas</th>
  <th>Vuelta Horas</th>
  <th>Ida y vuelta kilómetros</th>



  <th>Estado de la infraestructura vial - vías</th>
  <th>Vehículo</th>
  <th>Otros Actores</th>
  <th>Organización  del trabajo</th>
  <th>Propia conducción</th>
  <th>Otros</th>
  <th>Intensidad Trafico</th>
  <th>Condiciones climatologicas</th>
  <th>Tipo de vehículo o sus características</th>
  <th>Organización del trabajo</th>
  <th>Su propia conducción</th>
  <th>Tiempo requerido desplazamiento</th>
  <th>Experiencia</th>
  <th>Estado Psicofisico</th>
  <th>Otros Actores</th>
  <th>Señalización</th>
  <th>Falta de Formación</th>
  <th>Dispositivos comunicación</th>
  <th>Otros</th>

  </tr>

  </thead>
<tbody>');
 foreach($_encuestasv20 as $id_user => $encuesta_array) {
   $fecha_hoy=date('Y-m-d');
     $HTML .= '<tr>
       <td bgcolor="#a8addd">'.$_encuestasv20[$id_user]['id'].'</td>
       <td>'.$_users[$_encuestasv20[$id_user]['user']]['nombres'].' '.$_users[$_encuestasv20[$id_user]['user']]['apellidos'].'</td>
       <td>'.$_users[$_encuestasv20[$id_user]['user']]['cedula'].'</td>';
     $HTML .= utf8_decode('<td>'.$_encuestasv20[$id_user]['edad'].'</td>
       <td>'.$_encuestasv20[$id_user]['genero'].'</td>
       <td>'.$_encuestasv20[$id_user]['cargo'].'</td>
       <td>'.$_encuestasv20[$id_user]['ciudad'].'</td>');
     $HTML .= ($_encuestasv20[$id_user]['licencia'] == '1')?'<td bgcolor="#a8addd">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['licencia'] == '0')?'<td bgcolor="#a8addd">X</td>':'<td></td>';

     $HTML .= ($_encuestasv20[$id_user]['categoria_v'] == 1)?'<td bgcolor="#a8addd">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['categoria_v'] == 2)?'<td bgcolor="#a8addd">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['categoria_v'] == 3)?'<td bgcolor="#a8addd">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['categoria_v'] == 4)?'<td bgcolor="#a8addd">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['categoria_v'] == 5)?'<td bgcolor="#a8addd">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['categoria_v'] == 6)?'<td bgcolor="#a8addd">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['categoria_v'] == 7)?'<td bgcolor="#a8addd">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['categoria_v'] == 8)?'<td bgcolor="#a8addd">X</td>':'<td></td>';
     $HTML .= ($fecha_hoy >= $_encuestasv20[$id_user]['fecha_v'])?'<td bgcolor="#cba8dd">'.$_encuestasv20[$id_user]['fecha_v'].'</td>':'<td>'.$_encuestasv20[$id_user]['fecha_v'].'</td>';

     $HTML .= ($_encuestasv20[$id_user]['area'] == 1)?'<td bgcolor="#a8ddcb">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['area'] == 2)?'<td bgcolor="#a8ddcb">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['area'] == 3)?'<td bgcolor="#a8ddcb">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['area'] == 4)?'<td bgcolor="#a8ddcb">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['area'] == 5)?'<td bgcolor="#a8ddcb">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['area'] == 6)?'<td bgcolor="#a8ddcb">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['conduce_v'] == '1')?'<td bgcolor="#a8ddcb">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['conduce_v'] == '0')?'<td bgcolor="#a8ddcb">X</td>':'<td></td>';
     $HTML .= '<td>'.$_encuestasv20[$id_user]['experiencia_conduce'].'</td>';
     $HTML .= ($_encuestasv20[$id_user]['vinculado_e'] == 1)?'<td bgcolor="#a8ddcb">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['vinculado_e'] == 2)?'<td bgcolor="#a8ddcb">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['vinculado_e'] == 3)?'<td bgcolor="#a8ddcb">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['vinculado_e'] == 4)?'<td bgcolor="#a8ddcb">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['vinculado_e'] == 5)?'<td bgcolor="#a8ddcb">X</td>':'<td></td>';

     $HTML .= ($_encuestasv20[$id_user]['accidentes_t'] == '1')?'<td bgcolor="#dda8a8">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['accidentes_t'] == '0')?'<td bgcolor="#dda8a8">X</td>':'<td></td>';
     $HTML .= utf8_decode('<td>'.$_encuestasv20[$id_user]['circustancia_a_t'].'</td>');
     $HTML .= ($_encuestasv20[$id_user]['accidentes_t_peaton'] == '0')?'<td bgcolor="#dda8a8">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['accidentes_t_peaton'] == '1')?'<td bgcolor="#dda8a8">X</td>':'<td></td>';
     $HTML .= utf8_decode('<td>'.$_encuestasv20[$id_user]['circustancia_a_pet'].'</td>');
     $HTML .= ($_encuestasv20[$id_user]['accidentes_t_pasajero'] == '1')?'<td bgcolor="#dda8a8">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['accidentes_t_pasajero'] == '0')?'<td bgcolor="#dda8a8">X</td>':'<td></td>';
     $HTML .= utf8_decode('<td>'.$_encuestasv20[$id_user]['circustancia_a_pet'].'</td>');
     $HTML .= ($_encuestasv20[$id_user]['accidentes_t_d_material'] == '1')?'<td bgcolor="#dda8a8">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['accidentes_t_d_material'] == '0')?'<td bgcolor="#dda8a8">X</td>':'<td></td>';
     $HTML .= utf8_decode('<td>'.$_encuestasv20[$id_user]['circustancia_a_dmat'].'</td>');

     $HTML .= ($_encuestasv20[$id_user]['frecuencia_s'] == 1)?'<td bgcolor="#cba8dd">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['frecuencia_s'] == 2)?'<td bgcolor="#cba8dd">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['frecuencia_s'] == 3)?'<td bgcolor="#cba8dd">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['frecuencia_s'] == 4)?'<td bgcolor="#cba8dd">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['desplazamiento_v_p'] == '1')?'<td bgcolor="#cba8dd">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['desplazamiento_v_p'] == '0')?'<td bgcolor="#cba8dd">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['programa_s'] == '1')?'<td bgcolor="#cba8dd">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['programa_s'] == '2')?'<td bgcolor="#cba8dd">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['programa_tiempo'] == 1)?'<td bgcolor="#cba8dd">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['programa_tiempo'] == 2)?'<td bgcolor="#cba8dd">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['programa_tiempo'] == 3)?'<td bgcolor="#cba8dd">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['programa_tiempo'] == 4)?'<td bgcolor="#cba8dd">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['programa_tiempo'] == 5)?'<td bgcolor="#cba8dd">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['programa_tiempo'] == 6)?'<td bgcolor="#cba8dd">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['programa_tiempo'] == 7)?'<td bgcolor="#cba8dd">X</td>':'<td></td>';

     $HTML .= ($_encuestasv20[$id_user]['desplazamiento_cs'] == 1)?'<td bgcolor="#a8ddac">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['desplazamiento_cs'] == 2)?'<td bgcolor="#a8ddac">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['desplazamiento_cs'] == 3)?'<td bgcolor="#a8ddac">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['desplazamiento_cs'] == 4)?'<td bgcolor="#a8ddac">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['desplazamiento_cs'] == 5)?'<td bgcolor="#a8ddac">X</td>':'<td></td>';
     $HTML .= utf8_decode('<td>'.$_encuestasv20[$id_user]['tiempo_desp_ida'].'</td>');
     $HTML .= utf8_decode('<td>'.$_encuestasv20[$id_user]['tiempo_desp_vuelta'].'</td>');
     $HTML .= utf8_decode('<td>'.$_encuestasv20[$id_user]['distancia_cs'].'</td>');


     $HTML .= ($_encuestasv20[$id_user]['factores_riesgo'] == 1)?'<td bgcolor="#a8addd">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['factores_riesgo'] == 2)?'<td bgcolor="#a8addd">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['factores_riesgo'] == 3)?'<td bgcolor="#a8addd">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['factores_riesgo'] == 4)?'<td bgcolor="#a8addd">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['factores_riesgo'] == 5)?'<td bgcolor="#a8addd">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['factores_riesgo'] == 6)?'<td bgcolor="#a8addd">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['causa_accidente1'] == 1)?'<td bgcolor="#a8addd">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['causa_accidente2'] == 1)?'<td bgcolor="#a8addd">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['causa_accidente3'] == 1)?'<td bgcolor="#a8addd">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['causa_accidente4'] == 1)?'<td bgcolor="#a8addd">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['causa_accidente5'] == 1)?'<td bgcolor="#a8addd">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['causa_accidente6'] == 1)?'<td bgcolor="#a8addd">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['causa_accidente7'] == 1)?'<td bgcolor="#a8addd">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['causa_accidente8'] == 1)?'<td bgcolor="#a8addd">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['causa_accidente9'] == 1)?'<td bgcolor="#a8addd">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['causa_accidente10'] == 1)?'<td bgcolor="#a8addd">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['causa_accidente11'] == 1)?'<td bgcolor="#a8addd">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['causa_accidente12'] == 1)?'<td bgcolor="#a8addd">X</td>':'<td></td>';
     $HTML .= ($_encuestasv20[$id_user]['otro'] == 1)?'<td bgcolor="#a8addd">X</td>':'<td></td>';
  }
 $HTML .= '</tbody></table>';
} else {
 $HTML = '<div><strong>INFORMACIÓN: </strong> Todavía no existe ninguna encuesta.</div>';
}
 echo $HTML;
?>
