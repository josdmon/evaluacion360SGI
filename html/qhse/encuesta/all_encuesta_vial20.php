<?php include(HTML_DIR . 'overall/head.php'); ?>

 <body>
 <section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITLE ?></a></section>

 <?php include(HTML_DIR . '/overall/nav.php'); ?>

 <section class="mbr-section mbr-after-navbar">
 <div class="mbr-section__container container mbr-section__container--isolated">

   <?php
   if(isset($_GET['success'])) {
     echo '<div class="alert alert-dismissible alert-success">
       <strong>Activado!</strong> tu usuario ha sido activado correctamente.
     </div>';
   }
   if(isset($_GET['error'])) {
     echo '<div class="alert alert-dismissible alert-danger">
       <strong>Error!</strong></strong> no se ha podido activar tu usuario.
     </div>';
   }
   ?>

 <div class="row container">
    <div class="pull-right">
      <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
         <a class="mbr-buttons__btn btn btn-danger" href="?view=hseq&mode=encuesta">ENCUESTAS</a>
      </li></ul></div>
      <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
         <a class="mbr-buttons__btn btn btn-danger" href="?view=hseq&mode=excel2020">DESCARGAR EXCEL</a>
      </li></ul></div>

       <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
         <a class="mbr-buttons__btn btn btn-danger" href="?view=hseq&mode=evaluacion">EVALUACIÒN DE DESEMPEÑO</a>
       </li></ul></div>
      </div>

     <ol class="breadcrumb">
       <li><a href="?view=index"><i class="fa fa-tags"></i> Encuesta</a></li>
     </ol>
 </div>

 <div class="row categorias_con_foros">
   <div class="col-sm-12">
       <div class="row titulo_categoria">Gestión de Encuesta Seguridad Vial</div>

       <div class="row cajas table-responsive text-center">
         <div class="col-md-12">
           <?php
           if(false != $_encuestasv20) {
            $HTML = '<table class="table table-striped table-hover table-condensed table-bordered text-center" style="cellspacing="10"; cellpadding="10";"><thead>
              <tr>
              <th colspan="18" class="bg-primary">A. GENERALES</th>
              <th colspan="14" class="bg-success">B. ROL EN EL TRABAJO</th>
              <th colspan="12" class="bg-warning">C. IDENTIFICACION DE ACCIDENTES</th>
              <th colspan="15" class="bg-danger">D. DESPLAZAMIENTOS</th>
              <th colspan="8" class="bg-info">E. TRAYECTO IN - ITINERE</th>
              <th colspan="19" class="bg-primary">F. FACTORES DE RIESGO I</th>
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
            <tbody>';
             foreach($_encuestasv20 as $id_user => $encuesta_array) {
               $fecha_hoy=date('Y-m-d');
                 $HTML .= '<tr>
                   <td class="bg-primary">'.$_encuestasv20[$id_user]['id'].'</td>
                   <td>'.$_users[$_encuestasv20[$id_user]['user']]['nombres'].' '.$_users[$_encuestasv20[$id_user]['user']]['apellidos'].'</td>
                   <td>'.$_users[$_encuestasv20[$id_user]['user']]['cedula'].'</td>';
                 $HTML .= '<td>'.$_encuestasv20[$id_user]['edad'].'</td>
                   <td>'.$_encuestasv20[$id_user]['genero'].'</td>
                   <td>'.$_encuestasv20[$id_user]['cargo'].'</td>
                   <td>'.$_encuestasv20[$id_user]['ciudad'].'</td>';
                 $HTML .= ($_encuestasv20[$id_user]['licencia'] == '1')?'<td class="bg-primary"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['licencia'] == '0')?'<td class="bg-primary"></td>':'<td></td>';

                 $HTML .= ($_encuestasv20[$id_user]['categoria_v'] == 1)?'<td class="bg-primary"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['categoria_v'] == 2)?'<td class="bg-primary"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['categoria_v'] == 3)?'<td class="bg-primary"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['categoria_v'] == 4)?'<td class="bg-primary"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['categoria_v'] == 5)?'<td class="bg-primary"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['categoria_v'] == 6)?'<td class="bg-primary"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['categoria_v'] == 7)?'<td class="bg-primary"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['categoria_v'] == 8)?'<td class="bg-primary"></td>':'<td></td>';
                 $HTML .= ($fecha_hoy >= $_encuestasv20[$id_user]['fecha_v'])?'<td class="bg-danger">'.$_encuestasv20[$id_user]['fecha_v'].'</td>':'<td>'.$_encuestasv20[$id_user]['fecha_v'].'</td>';

                 $HTML .= ($_encuestasv20[$id_user]['area'] == 1)?'<td class="bg-success"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['area'] == 2)?'<td class="bg-success"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['area'] == 3)?'<td class="bg-success"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['area'] == 4)?'<td class="bg-success"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['area'] == 5)?'<td class="bg-success"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['area'] == 6)?'<td class="bg-success"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['conduce_v'] == '1')?'<td class="bg-success"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['conduce_v'] == '0')?'<td class="bg-success"></td>':'<td></td>';
                 $HTML .= '<td>'.$_encuestasv20[$id_user]['experiencia_conduce'].'</td>';
                 $HTML .= ($_encuestasv20[$id_user]['vinculado_e'] == 1)?'<td class="bg-success"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['vinculado_e'] == 2)?'<td class="bg-success"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['vinculado_e'] == 3)?'<td class="bg-success"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['vinculado_e'] == 4)?'<td class="bg-success"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['vinculado_e'] == 5)?'<td class="bg-success"></td>':'<td></td>';

                 $HTML .= ($_encuestasv20[$id_user]['accidentes_t'] == '1')?'<td class="bg-warning"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['accidentes_t'] == '0')?'<td class="bg-warning"></td>':'<td></td>';
                 $HTML .= '<td>'.$_encuestasv20[$id_user]['circustancia_a_t'].'</td>';
                 $HTML .= ($_encuestasv20[$id_user]['accidentes_t_peaton'] == '0')?'<td class="bg-warning"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['accidentes_t_peaton'] == '1')?'<td class="bg-warning"></td>':'<td></td>';
                 $HTML .= '<td>'.$_encuestasv20[$id_user]['circustancia_a_pet'].'</td>';
                 $HTML .= ($_encuestasv20[$id_user]['accidentes_t_pasajero'] == '1')?'<td class="bg-warning"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['accidentes_t_pasajero'] == '0')?'<td class="bg-warning"></td>':'<td></td>';
                 $HTML .= '<td>'.$_encuestasv20[$id_user]['circustancia_a_pet'].'</td>';
                 $HTML .= ($_encuestasv20[$id_user]['accidentes_t_d_material'] == '1')?'<td class="bg-warning"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['accidentes_t_d_material'] == '0')?'<td class="bg-warning"></td>':'<td></td>';
                 $HTML .= '<td>'.$_encuestasv20[$id_user]['circustancia_a_dmat'].'</td>';

                 $HTML .= ($_encuestasv20[$id_user]['frecuencia_s'] == 1)?'<td class="bg-danger"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['frecuencia_s'] == 2)?'<td class="bg-danger"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['frecuencia_s'] == 3)?'<td class="bg-danger"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['frecuencia_s'] == 4)?'<td class="bg-danger"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['desplazamiento_v_p'] == '1')?'<td class="bg-danger"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['desplazamiento_v_p'] == '0')?'<td class="bg-danger"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['programa_s'] == '1')?'<td class="bg-danger"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['programa_s'] == '2')?'<td class="bg-danger"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['programa_tiempo'] == 1)?'<td class="bg-danger"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['programa_tiempo'] == 2)?'<td class="bg-danger"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['programa_tiempo'] == 3)?'<td class="bg-danger"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['programa_tiempo'] == 4)?'<td class="bg-danger"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['programa_tiempo'] == 5)?'<td class="bg-danger"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['programa_tiempo'] == 6)?'<td class="bg-danger"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['programa_tiempo'] == 7)?'<td class="bg-danger"></td>':'<td></td>';

                 $HTML .= ($_encuestasv20[$id_user]['desplazamiento_cs'] == 1)?'<td class="bg-info"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['desplazamiento_cs'] == 2)?'<td class="bg-info"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['desplazamiento_cs'] == 3)?'<td class="bg-info"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['desplazamiento_cs'] == 4)?'<td class="bg-info"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['desplazamiento_cs'] == 5)?'<td class="bg-info"></td>':'<td></td>';
                 $HTML .= '<td>'.$_encuestasv20[$id_user]['tiempo_desp_ida'].'</td>';
                 $HTML .= '<td>'.$_encuestasv20[$id_user]['tiempo_desp_vuelta'].'</td>';
                 $HTML .= '<td>'.$_encuestasv20[$id_user]['distancia_cs'].'</td>';


                 $HTML .= ($_encuestasv20[$id_user]['factores_riesgo'] == 1)?'<td class="bg-primary"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['factores_riesgo'] == 2)?'<td class="bg-primary"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['factores_riesgo'] == 3)?'<td class="bg-primary"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['factores_riesgo'] == 4)?'<td class="bg-primary"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['factores_riesgo'] == 5)?'<td class="bg-primary"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['factores_riesgo'] == 6)?'<td class="bg-primary"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['causa_accidente1'] == 1)?'<td class="bg-primary"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['causa_accidente2'] == 1)?'<td class="bg-primary"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['causa_accidente3'] == 1)?'<td class="bg-primary"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['causa_accidente4'] == 1)?'<td class="bg-primary"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['causa_accidente5'] == 1)?'<td class="bg-primary"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['causa_accidente6'] == 1)?'<td class="bg-primary"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['causa_accidente7'] == 1)?'<td class="bg-primary"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['causa_accidente8'] == 1)?'<td class="bg-primary"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['causa_accidente9'] == 1)?'<td class="bg-primary"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['causa_accidente10'] == 1)?'<td class="bg-primary"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['causa_accidente11'] == 1)?'<td class="bg-primary"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['causa_accidente12'] == 1)?'<td class="bg-primary"></td>':'<td></td>';
                 $HTML .= ($_encuestasv20[$id_user]['otro'] == 1)?'<td class="bg-primary"></td>':'<td></td>';
              }
             $HTML .= '</tbody></table>';
           } else {
             $HTML = '<div class="alert alert-dismissible alert-info"><strong>INFORMACIÓN: </strong> Todavía no existe ninguna encuesta.</div>';
           }
           echo $HTML;
           ?>
         </div>
       </div>
   </div>
 </div>

 </div>
 </section>

 <?php include(HTML_DIR . 'overall/footer.php'); ?>

 </body>
</html>
