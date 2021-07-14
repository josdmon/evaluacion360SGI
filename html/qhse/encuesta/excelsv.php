<?php
 if(false != $_users) {
 header("Content-Type: application/vnd.ms-excel");
 header('Content-Disposition: attachment; filename="Reporte.xls"');



  $HTML = utf8_decode('<table style="cellspacing="10"; cellpadding="10"; border-collapse="collapse"; border="1"">
  <thead>
  <tr>
  <th colspan="1" bgcolor="#a8addd">DATOS EMPLEADO</th>
  <th colspan="49" bgcolor="#a8addd">FACTORES DE RIESGO FISICOS</th>
  <th colspan="21" bgcolor="#a8ddcb">FACTORES DE RIESGO QUIMICOS</th>
  <th colspan="14" bgcolor="#dda8a8">FACTORES DE RIESGO BIOLÓGICOS</th>
  <th colspan="7" bgcolor="#cba8dd">FACTOR DE RIESGO VIAL</th>
  <th colspan="7" bgcolor="#a8addd">FACTOR DE RIESGO PÚBLICO</th>
  <th colspan="7" bgcolor="#a8ddac">FACTOR DE RIESGO  LOCATIVO</th>
  <th colspan="28" bgcolor="#a8ddcb">FACTORES DE RIESGO ERGONOMÍA</th>
  <th colspan="21" bgcolor="#dda8a8">FACTORES DE RIESGO MECÁNICO Y ELÉCTRICO</th>
  <th colspan="21" bgcolor="#cba8dd">FACTOR DE RIESGO PSICOSOCIAL</th>
  <th colspan="28" bgcolor="#a8addd">OTROS FACTORES DE RIESGO</th>
  <th colspan="5" bgcolor="#a8ddcb">IDENTIFICACION DE ASPECTOS AMBIENTALES (SELECCIONE LOS ASPECTOS AMBIENTALES MAS SIGNIFICATIVOS DE SU AREA)</th>
  <th colspan="4" bgcolor="#a8addd">SUGERENCIAS A REALIZAR</th>
  </tr>
  <tr>


  <th rowspan="2">.....Nombres_y_Apellidos.....</th>


  <th colspan="7">Esta expuesto a ruido</th>
  <th colspan="7">Considera que su puesto de trabajo tiene Iluminación excesiva</th>
  <th colspan="7">Considera que su puesto de trabajo tiene Iluminación deficiente</th>
  <th colspan="7">En su actividad esta expuesto a vibraciones</th>
  <th colspan="7">Esta expuesto a radiaciones no ionizantes (solares)</th>
  <th colspan="7">Esta expuesto a calor excesivo</th>
  <th colspan="7">Esta expuesto a Frio excesivo</th>

  <th colspan="7">Esta expuesto a Sólidos, líquidos, gases y vapores que afecten su salud</th>
  <th colspan="7">Esta expuesto a polvo o material particulado</th>
  <th colspan="7">Esta expuesto al derrame y contacto con sustancias químicas</th>

  <th colspan="7">Esta expuesto al contacto con virus, bacterias, hongos</th>
  <th colspan="7">Esta expuesto a  picaduras y mordeduras de animales y/o insectos</th>

  <th colspan="7">Esta expuesto a accidentes de tránsito (Choques, atropellamientos o volcamientos)</th>

  <th colspan="7">Esta expuesto a robos, secuestros y/o atentados</th>

  <th colspan="7">Esta expuesto a Instalaciones inapropiadas (pisos, techos, escaleras, muros, barandas)</th>

  <th colspan="7">Asume Posturas prolongadas (De pie, agachado, etc.)</th>
  <th colspan="7">Manipula continuamente cargas superiores a 5 kg</th>
  <th colspan="7">Realiza movimiento repetitivos</th>
  <th colspan="7">Su trabajo ejerce una carga dinámica (Su trabajo exige constante movimiento  y esfuerzo corporal)</th>

  <th colspan="7">Manipula o esta en contacto con materiales, herramienta o equipos en su lugar de trabajo</th>
  <th colspan="7">Tiene contacto directo con instalaciones eléctricas de baja, media tensión</th>
  <th colspan="7">Tiene contacto directo con instalaciones eléctricas de alta tensión</th>

  <th colspan="7">Su trabajo es repetitivo y monótono</th>
  <th colspan="7">Su trabajo exige alto nivel de concentración</th>
  <th colspan="7">Esta expuesto a turno extensos</th>

  <th colspan="7">Requiere viajar de manera continua en avión</th>
  <th colspan="7">Requiere viajar a diferentes zonas de manera continua en bus o carro</th>
  <th colspan="7">Trabajos en alturas superiores o inferiores a 1.5 </th>
  <th colspan="7">Trabajos en cuevas o zanjas, espacios confinados </th>

  <th rowspan="2">CONSUMO DE AGUA</th>
  <th rowspan="2">GENERACION DE RESIDUOS SOLIDOS</th>
  <th rowspan="2">GENERACION DE GASES CONTAMINATES</th>
  <th rowspan="2">CONSUMO DE ENERGIA</th>
  <th rowspan="2">GENERACION DE RESIDUOS PELIGROSOS (TONNERS, BOMBILLAS, PARTES DE COMPUTADORES)</th>

  <th rowspan="2">CAPACITACIONES_EN_HSE:</th>
  <th rowspan="2">CAPACITACIONES_TÉCNICAS:</th>
  <th rowspan="2">ACTIVIDADES_EN_HSE:</th>
  <th rowspan="2">ACTIVIDADES_POR_DESTACAR:</th>

  </tr>

  <tr>

  <th>SI</th>
  <th>Exposición mayor a   8 horas*día</th>
  <th>Exposición  menor  o igual a   8 horas*día</th>
  <th>Exporádica, semanal, mensual</th>
  <th>Existe  control</th>
  <th>No existe control</th>
  <th>Describir el control propuesto</th>
  <th>SI</th>
  <th>Exposición mayor a   8 horas*día</th>
  <th>Exposición  menor  o igual a   8 horas*día</th>
  <th>Exporádica, semanal, mensual</th>
  <th>Existe  control</th>
  <th>No existe control</th>
  <th>Describir el control propuesto</th>
  <th>SI</th>
  <th>Exposición mayor a   8 horas*día</th>
  <th>Exposición  menor  o igual a   8 horas*día</th>
  <th>Exporádica, semanal, mensual</th>
  <th>Existe  control</th>
  <th>No existe control</th>
  <th>Describir el control propuesto</th>
  <th>SI</th>
  <th>Exposición mayor a   8 horas*día</th>
  <th>Exposición  menor  o igual a   8 horas*día</th>
  <th>Exporádica, semanal, mensual</th>
  <th>Existe  control</th>
  <th>No existe control</th>
  <th>Describir el control propuesto</th>
  <th>SI</th>
  <th>Exposición mayor a   8 horas*día</th>
  <th>Exposición  menor  o igual a   8 horas*día</th>
  <th>Exporádica, semanal, mensual</th>
  <th>Existe  control</th>
  <th>No existe control</th>
  <th>Describir el control propuesto</th>
  <th>SI</th>
  <th>Exposición mayor a   8 horas*día</th>
  <th>Exposición  menor  o igual a   8 horas*día</th>
  <th>Exporádica, semanal, mensual</th>
  <th>Existe  control</th>
  <th>No existe control</th>
  <th>Describir el control propuesto</th>
  <th>SI</th>
  <th>Exposición mayor a   8 horas*día</th>
  <th>Exposición  menor  o igual a   8 horas*día</th>
  <th>Exporádica, semanal, mensual</th>
  <th>Existe  control</th>
  <th>No existe control</th>
  <th>Describir el control propuesto</th>

  <th>SI</th>
  <th>Exposición mayor a   8 horas*día</th>
  <th>Exposición  menor  o igual a   8 horas*día</th>
  <th>Exporádica, semanal, mensual</th>
  <th>Existe  control</th>
  <th>No existe control</th>
  <th>Describir el control propuesto</th>
  <th>SI</th>
  <th>Exposición mayor a   8 horas*día</th>
  <th>Exposición  menor  o igual a   8 horas*día</th>
  <th>Exporádica, semanal, mensual</th>
  <th>Existe  control</th>
  <th>No existe control</th>
  <th>Describir el control propuesto</th>
  <th>SI</th>
  <th>Exposición mayor a   8 horas*día</th>
  <th>Exposición  menor  o igual a   8 horas*día</th>
  <th>Exporádica, semanal, mensual</th>
  <th>Existe  control</th>
  <th>No existe control</th>
  <th>Describir el control propuesto</th>

  <th>SI</th>
  <th>Exposición mayor a   8 horas*día</th>
  <th>Exposición  menor  o igual a   8 horas*día</th>
  <th>Exporádica, semanal, mensual</th>
  <th>Existe  control</th>
  <th>No existe control</th>
  <th>Describir el control propuesto</th>
  <th>SI</th>
  <th>Exposición mayor a   8 horas*día</th>
  <th>Exposición  menor  o igual a   8 horas*día</th>
  <th>Exporádica, semanal, mensual</th>
  <th>Existe  control</th>
  <th>No existe control</th>
  <th>Describir el control propuesto</th>

  <th>SI</th>
  <th>Exposición mayor a   8 horas*día</th>
  <th>Exposición  menor  o igual a   8 horas*día</th>
  <th>Exporádica, semanal, mensual</th>
  <th>Existe  control</th>
  <th>No existe control</th>
  <th>Describir el control propuesto</th>

  <th>SI</th>
  <th>Exposición mayor a   8 horas*día</th>
  <th>Exposición  menor  o igual a   8 horas*día</th>
  <th>Exporádica, semanal, mensual</th>
  <th>Existe  control</th>
  <th>No existe control</th>
  <th>Describir el control propuesto</th>

  <th>SI</th>
  <th>Exposición mayor a   8 horas*día</th>
  <th>Exposición  menor  o igual a   8 horas*día</th>
  <th>Exporádica, semanal, mensual</th>
  <th>Existe  control</th>
  <th>No existe control</th>
  <th>Describir el control propuesto</th>

  <th>SI</th>
  <th>Exposición mayor a   8 horas*día</th>
  <th>Exposición  menor  o igual a   8 horas*día</th>
  <th>Exporádica, semanal, mensual</th>
  <th>Existe  control</th>
  <th>No existe control</th>
  <th>Describir el control propuesto</th>
  <th>SI</th>
  <th>Exposición mayor a   8 horas*día</th>
  <th>Exposición  menor  o igual a   8 horas*día</th>
  <th>Exporádica, semanal, mensual</th>
  <th>Existe  control</th>
  <th>No existe control</th>
  <th>Describir el control propuesto</th>
  <th>SI</th>
  <th>Exposición mayor a   8 horas*día</th>
  <th>Exposición  menor  o igual a   8 horas*día</th>
  <th>Exporádica, semanal, mensual</th>
  <th>Existe  control</th>
  <th>No existe control</th>
  <th>Describir el control propuesto</th>
  <th>SI</th>
  <th>Exposición mayor a   8 horas*día</th>
  <th>Exposición  menor  o igual a   8 horas*día</th>
  <th>Exporádica, semanal, mensual</th>
  <th>Existe  control</th>
  <th>No existe control</th>
  <th>Describir el control propuesto</th>

  <th>SI</th>
  <th>Exposición mayor a   8 horas*día</th>
  <th>Exposición  menor  o igual a   8 horas*día</th>
  <th>Exporádica, semanal, mensual</th>
  <th>Existe  control</th>
  <th>No existe control</th>
  <th>Describir el control propuesto</th>
  <th>SI</th>
  <th>Exposición mayor a   8 horas*día</th>
  <th>Exposición  menor  o igual a   8 horas*día</th>
  <th>Exporádica, semanal, mensual</th>
  <th>Existe  control</th>
  <th>No existe control</th>
  <th>Describir el control propuesto</th>
  <th>SI</th>
  <th>Exposición mayor a   8 horas*día</th>
  <th>Exposición  menor  o igual a   8 horas*día</th>
  <th>Exporádica, semanal, mensual</th>
  <th>Existe  control</th>
  <th>No existe control</th>
  <th>Describir el control propuesto</th>

  <th>SI</th>
  <th>Exposición mayor a   8 horas*día</th>
  <th>Exposición  menor  o igual a   8 horas*día</th>
  <th>Exporádica, semanal, mensual</th>
  <th>Existe  control</th>
  <th>No existe control</th>
  <th>Describir el control propuesto</th>
  <th>SI</th>
  <th>Exposición mayor a   8 horas*día</th>
  <th>Exposición  menor  o igual a   8 horas*día</th>
  <th>Exporádica, semanal, mensual</th>
  <th>Existe  control</th>
  <th>No existe control</th>
  <th>Describir el control propuesto</th>
  <th>SI</th>
  <th>Exposición mayor a   8 horas*día</th>
  <th>Exposición  menor  o igual a   8 horas*día</th>
  <th>Exporádica, semanal, mensual</th>
  <th>Existe  control</th>
  <th>No existe control</th>
  <th>Describir el control propuesto</th>

  <th>SI</th>
  <th>Exposición mayor a   8 horas*día</th>
  <th>Exposición  menor  o igual a   8 horas*día</th>
  <th>Exporádica, semanal, mensual</th>
  <th>Existe  control</th>
  <th>No existe control</th>
  <th>Describir el control propuesto</th>
  <th>SI</th>
  <th>Exposición mayor a   8 horas*día</th>
  <th>Exposición  menor  o igual a   8 horas*día</th>
  <th>Exporádica, semanal, mensual</th>
  <th>Existe  control</th>
  <th>No existe control</th>
  <th>Describir el control propuesto</th>
  <th>SI</th>
  <th>Exposición mayor a   8 horas*día</th>
  <th>Exposición  menor  o igual a   8 horas*día</th>
  <th>Exporádica, semanal, mensual</th>
  <th>Existe  control</th>
  <th>No existe control</th>
  <th>Describir el control propuesto</th>
  <th>SI</th>
  <th>Exposición mayor a   8 horas*día</th>
  <th>Exposición  menor  o igual a   8 horas*día</th>
  <th>Exporádica, semanal, mensual</th>
  <th>Existe  control</th>
  <th>No existe control</th>
  <th>Describir el control propuesto</th>


  </tr>

  </thead>
<tbody>');
 foreach($_encuesta_part as $id_user => $encuesta_array) {

     $HTML .= '<tr>
    <td>'.$_users[$_encuesta_part[$id_user]['id_usuario']]['nombres'].' '.$_users[$_encuesta_part[$id_user]['id_usuario']]['apellidos'].'</td>';

     $HTML .= ($_encuesta_part[$id_user]['fisico2'] == 1)?'<td></td>':'<td bgcolor="#a8addd"></td>';
     $HTML .= ($_encuesta_part[$id_user]['fisico2'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['fisico2'] == 3)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['fisico2'] == 4)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['fisicontrol2'] == 1)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['fisicontrol2'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= utf8_decode('<td>'.$_encuesta_part[$id_user]['fisico_control2'].'</td>');
     $HTML .= ($_encuesta_part[$id_user]['fisico3'] == 1)?'<td></td>':'<td bgcolor="#a8addd"></td>';
     $HTML .= ($_encuesta_part[$id_user]['fisico3'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['fisico3'] == 3)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['fisico3'] == 4)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['fisicontrol3'] == 1)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['fisicontrol3'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= utf8_decode('<td>'.$_encuesta_part[$id_user]['fisico_control3'].'</td>');
     $HTML .= ($_encuesta_part[$id_user]['fisico4'] == 1)?'<td></td>':'<td bgcolor="#a8addd"></td>';
     $HTML .= ($_encuesta_part[$id_user]['fisico4'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['fisico4'] == 3)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['fisico4'] == 4)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['fisicontrol4'] == 1)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['fisicontrol4'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= utf8_decode('<td>'.$_encuesta_part[$id_user]['fisico_control4'].'</td>');
     $HTML .= ($_encuesta_part[$id_user]['fisico5'] == 1)?'<td></td>':'<td bgcolor="#a8addd"></td>';
     $HTML .= ($_encuesta_part[$id_user]['fisico5'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['fisico5'] == 3)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['fisico5'] == 4)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['fisicontrol5'] == 1)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['fisicontrol5'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= utf8_decode('<td>'.$_encuesta_part[$id_user]['fisico_control5'].'</td>');
     $HTML .= ($_encuesta_part[$id_user]['fisico6'] == 1)?'<td></td>':'<td bgcolor="#a8addd"></td>';
     $HTML .= ($_encuesta_part[$id_user]['fisico6'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['fisico6'] == 3)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['fisico6'] == 4)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['fisicontrol6'] == 1)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['fisicontrol6'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= utf8_decode('<td>'.$_encuesta_part[$id_user]['fisico_control6'].'</td>');
     $HTML .= ($_encuesta_part[$id_user]['fisico7'] == 1)?'<td></td>':'<td bgcolor="#a8addd"></td>';
     $HTML .= ($_encuesta_part[$id_user]['fisico7'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['fisico7'] == 3)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['fisico7'] == 4)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['fisicontrol7'] == 1)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['fisicontrol7'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= utf8_decode('<td>'.$_encuesta_part[$id_user]['fisico_control7'].'</td>');
     $HTML .= ($_encuesta_part[$id_user]['fisico8'] == 1)?'<td></td>':'<td bgcolor="#a8addd"></td>';
     $HTML .= ($_encuesta_part[$id_user]['fisico8'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['fisico8'] == 3)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['fisico8'] == 4)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['fisicontrol8'] == 1)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['fisicontrol8'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= utf8_decode('<td>'.$_encuesta_part[$id_user]['fisico_control8'].'</td>');

     $HTML .= ($_encuesta_part[$id_user]['quimico1'] == 1)?'<td></td>':'<td bgcolor="#a8addd"></td>';
     $HTML .= ($_encuesta_part[$id_user]['quimico1'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['quimico1'] == 3)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['quimico1'] == 4)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['quimicontrol1'] == 1)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['quimicontrol1'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= utf8_decode('<td>'.$_encuesta_part[$id_user]['quimico_control1'].'</td>');
     $HTML .= ($_encuesta_part[$id_user]['quimico2'] == 1)?'<td></td>':'<td bgcolor="#a8addd"></td>';
     $HTML .= ($_encuesta_part[$id_user]['quimico2'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['quimico2'] == 3)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['quimico2'] == 4)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['quimicontrol2'] == 1)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['quimicontrol2'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= utf8_decode('<td>'.$_encuesta_part[$id_user]['quimico_control2'].'</td>');
     $HTML .= ($_encuesta_part[$id_user]['quimico3'] == 1)?'<td></td>':'<td bgcolor="#a8addd"></td>';
     $HTML .= ($_encuesta_part[$id_user]['quimico3'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['quimico3'] == 3)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['quimico3'] == 4)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['quimicontrol3'] == 1)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['quimicontrol3'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= utf8_decode('<td>'.$_encuesta_part[$id_user]['quimico_control3'].'</td>');

     $HTML .= ($_encuesta_part[$id_user]['biologico1'] == 1)?'<td></td>':'<td bgcolor="#a8addd"></td>';
     $HTML .= ($_encuesta_part[$id_user]['biologico1'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['biologico1'] == 3)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['biologico1'] == 4)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['biologicontrol1'] == 1)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['biologicontrol1'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= utf8_decode('<td>'.$_encuesta_part[$id_user]['biologico_control1'].'</td>');
     $HTML .= ($_encuesta_part[$id_user]['biologico2'] == 1)?'<td></td>':'<td bgcolor="#a8addd"></td>';
     $HTML .= ($_encuesta_part[$id_user]['biologico2'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['biologico2'] == 3)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['biologico2'] == 4)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['biologicontrol2'] == 1)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['biologicontrol2'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= utf8_decode('<td>'.$_encuesta_part[$id_user]['biologico_control2'].'</td>');

     $HTML .= ($_encuesta_part[$id_user]['vial1'] == 1)?'<td></td>':'<td bgcolor="#a8addd"></td>';
     $HTML .= ($_encuesta_part[$id_user]['vial1'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['vial1'] == 3)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['vial1'] == 4)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['vialcontrol1'] == 1)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['vialcontrol1'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= utf8_decode('<td>'.$_encuesta_part[$id_user]['vial_control1'].'</td>');

     $HTML .= ($_encuesta_part[$id_user]['publico1'] == 1)?'<td></td>':'<td bgcolor="#a8addd"></td>';
     $HTML .= ($_encuesta_part[$id_user]['publico1'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['publico1'] == 3)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['publico1'] == 4)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['publicontrol1'] == 1)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['publicontrol1'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= utf8_decode('<td>'.$_encuesta_part[$id_user]['publico_control1'].'</td>');

     $HTML .= ($_encuesta_part[$id_user]['locativo1'] == 1)?'<td></td>':'<td bgcolor="#a8addd"></td>';
     $HTML .= ($_encuesta_part[$id_user]['locativo1'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['locativo1'] == 3)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['locativo1'] == 4)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['locativocontrol1'] == 1)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['locativocontrol1'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= utf8_decode('<td>'.$_encuesta_part[$id_user]['locativo_control1'].'</td>');

     $HTML .= ($_encuesta_part[$id_user]['ergonomia1'] == 1)?'<td></td>':'<td bgcolor="#a8addd"></td>';
     $HTML .= ($_encuesta_part[$id_user]['ergonomia1'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['ergonomia1'] == 3)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['ergonomia1'] == 4)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['ergonomiacontrol1'] == 1)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['ergonomiacontrol1'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= utf8_decode('<td>'.$_encuesta_part[$id_user]['ergonomia_control1'].'</td>');
     $HTML .= ($_encuesta_part[$id_user]['ergonomia2'] == 1)?'<td></td>':'<td bgcolor="#a8addd"></td>';
     $HTML .= ($_encuesta_part[$id_user]['ergonomia2'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['ergonomia2'] == 3)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['ergonomia2'] == 4)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['ergonomiacontrol2'] == 1)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['ergonomiacontrol2'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= utf8_decode('<td>'.$_encuesta_part[$id_user]['ergonomia_control2'].'</td>');
     $HTML .= ($_encuesta_part[$id_user]['ergonomia3'] == 1)?'<td></td>':'<td bgcolor="#a8addd"></td>';
     $HTML .= ($_encuesta_part[$id_user]['ergonomia3'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['ergonomia3'] == 3)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['ergonomia3'] == 4)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['ergonomiacontrol3'] == 1)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['ergonomiacontrol3'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= utf8_decode('<td>'.$_encuesta_part[$id_user]['ergonomia_control3'].'</td>');
     $HTML .= ($_encuesta_part[$id_user]['ergonomia4'] == 1)?'<td></td>':'<td bgcolor="#a8addd"></td>';
     $HTML .= ($_encuesta_part[$id_user]['ergonomia4'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['ergonomia4'] == 3)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['ergonomia4'] == 4)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['ergonomiacontrol4'] == 4)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['ergonomiacontrol4'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= utf8_decode('<td>'.$_encuesta_part[$id_user]['ergonomia_control4'].'</td>');

     $HTML .= ($_encuesta_part[$id_user]['mecanico1'] == 1)?'<td></td>':'<td bgcolor="#a8addd"></td>';
     $HTML .= ($_encuesta_part[$id_user]['mecanico1'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['mecanico1'] == 3)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['mecanico1'] == 4)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['mecanicontrol1'] == 1)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['mecanicontrol1'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= utf8_decode('<td>'.$_encuesta_part[$id_user]['mecanico_control1'].'</td>');
     $HTML .= ($_encuesta_part[$id_user]['mecanico2'] == 1)?'<td></td>':'<td bgcolor="#a8addd"></td>';
     $HTML .= ($_encuesta_part[$id_user]['mecanico2'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['mecanico2'] == 3)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['mecanico2'] == 4)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['mecanicontrol2'] == 1)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['mecanicontrol2'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= utf8_decode('<td>'.$_encuesta_part[$id_user]['mecanico_control2'].'</td>');
     $HTML .= ($_encuesta_part[$id_user]['mecanico3'] == 1)?'<td></td>':'<td bgcolor="#a8addd"></td>';
     $HTML .= ($_encuesta_part[$id_user]['mecanico3'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['mecanico3'] == 3)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['mecanico3'] == 4)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['mecanicontrol3'] == 1)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['mecanicontrol3'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= utf8_decode('<td>'.$_encuesta_part[$id_user]['mecanico_control3'].'</td>');

     $HTML .= ($_encuesta_part[$id_user]['psicosocial1'] == 1)?'<td></td>':'<td bgcolor="#a8addd"></td>';
     $HTML .= ($_encuesta_part[$id_user]['psicosocial1'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['psicosocial1'] == 3)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['psicosocial1'] == 4)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['psicosocialcontrol1'] == 1)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['psicosocialcontrol1'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= utf8_decode('<td>'.$_encuesta_part[$id_user]['psicosocial_control1'].'</td>');
     $HTML .= ($_encuesta_part[$id_user]['psicosocial2'] == 1)?'<td></td>':'<td bgcolor="#a8addd"></td>';
     $HTML .= ($_encuesta_part[$id_user]['psicosocial2'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['psicosocial2'] == 3)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['psicosocial2'] == 4)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['psicosocialcontrol2'] == 1)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['psicosocialcontrol2'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= utf8_decode('<td>'.$_encuesta_part[$id_user]['psicosocial_control2'].'</td>');
     $HTML .= ($_encuesta_part[$id_user]['psicosocial3'] == 1)?'<td></td>':'<td bgcolor="#a8addd"></td>';
     $HTML .= ($_encuesta_part[$id_user]['psicosocial3'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['psicosocial3'] == 3)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['psicosocial3'] == 4)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['psicosocialcontrol3'] == 1)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['psicosocialcontrol3'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= utf8_decode('<td>'.$_encuesta_part[$id_user]['psicosocial_control3'].'</td>');

     $HTML .= ($_encuesta_part[$id_user]['otro1'] == 1)?'<td></td>':'<td bgcolor="#a8addd"></td>';
     $HTML .= ($_encuesta_part[$id_user]['otro1'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['otro1'] == 3)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['otro1'] == 4)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['otrocontrol1'] == 1)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['otrocontrol1'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= utf8_decode('<td>'.$_encuesta_part[$id_user]['otro_control1'].'</td>');
     $HTML .= ($_encuesta_part[$id_user]['otro2'] == 1)?'<td></td>':'<td bgcolor="#a8addd"></td>';
     $HTML .= ($_encuesta_part[$id_user]['otro2'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['otro2'] == 3)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['otro2'] == 4)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['otrocontrol2'] == 1)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['otrocontrol2'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= utf8_decode('<td>'.$_encuesta_part[$id_user]['otro_control2'].'</td>');
     $HTML .= ($_encuesta_part[$id_user]['otro3'] == 1)?'<td></td>':'<td bgcolor="#a8addd"></td>';
     $HTML .= ($_encuesta_part[$id_user]['otro3'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['otro3'] == 3)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['otro3'] == 4)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['otrocontrol3'] == 1)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['otrocontrol3'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= utf8_decode('<td>'.$_encuesta_part[$id_user]['otro_control3'].'</td>');
     $HTML .= ($_encuesta_part[$id_user]['otro4'] == 1)?'<td></td>':'<td bgcolor="#a8addd"></td>';
     $HTML .= ($_encuesta_part[$id_user]['otro4'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['otro4'] == 3)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['otro4'] == 4)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['otrocontrol4'] == 4)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['otrocontrol4'] == 2)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= utf8_decode('<td>'.$_encuesta_part[$id_user]['otro_control4'].'</td>');

     $HTML .= ($_encuesta_part[$id_user]['aspectos_ambientales1'] == 1)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['aspectos_ambientales2'] == 1)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['aspectos_ambientales3'] == 1)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['aspectos_ambientales4'] == 1)?'<td bgcolor="#a8addd"></td>':'<td></td>';
     $HTML .= ($_encuesta_part[$id_user]['aspectos_ambientales5'] == 1)?'<td bgcolor="#a8addd"></td>':'<td></td>';

     $HTML .= utf8_decode('<td>'.$_encuesta_part[$id_user]['capaci_hse'].'</td>');
     $HTML .= utf8_decode('<td>'.$_encuesta_part[$id_user]['capaci_tecn'].'</td>');
     $HTML .= utf8_decode('<td>'.$_encuesta_part[$id_user]['activi_hse'].'</td>');
     $HTML .= utf8_decode('<td>'.$_encuesta_part[$id_user]['activ_destaca'].'</td>');


  }
 $HTML .= '</tbody></table>';
} else {
 $HTML = '<div><strong>INFORMACIÓN: </strong> Todavía no existe ninguna encuesta.</div>';
}
echo $HTML;
?>
