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
         <a class="mbr-buttons__btn btn btn-danger" href="?view=hseq&mode=excel">DESCARGAR EXCEL</a>
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
           if(false != $_users) {
            $HTML = '<table class="table table-striped table-hover table-condensed table-bordered text-center" style="cellspacing="10"; cellpadding="10";"><thead>
              <tr>
              <th colspan="19" class="bg-primary">Identificación Básica</th>
              <th colspan="15" class="bg-success">Riesgo Operativo</th>
              <th colspan="18" class="bg-warning">Riesgo en Misión</th>
              <th colspan="11" class="bg-danger">Riesgo In - itinere</th>
              <th colspan="12" class="bg-info">Percepción del Riesgo</th>
              </tr>
              <tr>

              <th rowspan="2" width="40%">No.</th>
              <th rowspan="2">........Nombre........</th>
              <th rowspan="2">Número de Identificación</th>
              <th colspan="2">¿Tiene_licencia_de conducción?</th>
              <th rowspan="2">Categoría</th>
              <th rowspan="2">Edad en años</th>
              <th rowspan="2">Género</th>
              <th rowspan="2">...............Cargo...............</th>
              <th colspan="5">Está vinculado con la empresa o entidad como</th>
              <th colspan="5">Proceso o área a la que pertenece su cargo</th>

              <th colspan="2">¿Cómo_parte_de_las_funciones_de_su_cargo conduce usted vehículos?</th>
              <th colspan="6">El vehículo más frecuentemente usado para estos transportes es:</th>
              <th colspan="4">La frecuencia de esta actividad es por lo menos</th>
              <th colspan="2">¿Ha_tenido_accidentes_de_tránsito_durante el desarrollo de estas actividades? </th>
              <th rowspan="2">¿Cuántos?</th>

              <th colspan="2">¿Realiza_usted_desplazamientos_como parte de sus funciones?</th>
              <th colspan="6">El vehículo más frecuentemente usado para estos transportes es:</th>
              <th colspan="3">Su_rol_durante_estos_desplazamientos es en su mayoría como:</th>
              <th colspan="4">La frecuencia de esta actividad es por lo menos</th>
              <th colspan="2">¿Ha_tenido_accidentes_de_tránsito_durante el desarrollo de estas actividades? </th>
              <th rowspan="2">¿Cuántos?</th>


              <th colspan="5">El vehículo más frecuentemente usado para estos desplazamientos es:</th>
              <th colspan="3">Su_rol_durante_estos_desplazamientos es en su mayoría como:</th>
              <th colspan="2">¿Ha_tenido_accidentes_de_tránsito_en_estos desplazamientos en los últimos 2 años?</th>
              <th rowspan="2">¿Cuántos?</th>

              <th colspan="12">¿Cuáles son las causas de accidentes de tránsito con las que más frecuentemente se encuentra en sus desplazamientos?</th>
              </tr>

              <tr>

              <th>SI</th>
              <th>NO</th>
              <th>Contrato directo</th>
              <th>Contrato de prestación de servicios</th>
              <th>contrato por obra o labor</th>
              <th>Servicios temporales</th>
              <th>No esta vinculado</th>
              <th>Administrativo</th>
              <th>Comercial</th>
              <th>Operativo</th>
              <th>Técnico</th>
              <th>Asistencial</th>

              <th>SI</th>
              <th>NO</th>
              <th>Vehículo de la empresa</th>
              <th>Vehículo de un tercero</th>
              <th>Pasajero vehículo empresa</th>
              <th>Pasajero vehículo público</th>
              <th>Motocicleta propia</th>
              <th>Bicicleta propia</th>
              <th>Diaria</th>
              <th>Semanal</th>
              <th>Mensual</th>
              <th>Anual</th>
              <th>SI</th>
              <th>NO</th>

              <th>SI</th>
              <th>NO</th>
              <th>Vehículo de la empresa</th>
              <th>Vehículo de un tercero</th>
              <th>Pasajero vehículo empresa</th>
              <th>Pasajero vehículo público</th>
              <th>Motocicleta propia</th>
              <th>Bicicleta propia</th>
              <th>Conductor</th>
              <th>Pasajero</th>
              <th>Peatón</th>
              <th>Diaria</th>
              <th>Semanal</th>
              <th>Mensual</th>
              <th>Anual</th>
              <th>SI</th>
              <th>NO</th>

              <th>Vehículo de la empresa</th>
              <th>Vehículo de un tercero</th>
              <th>Liviano o pesado propio</th>
              <th>Motocicleta propia</th>
              <th>Bicicleta propia</th>
              <th>Conductor</th>
              <th>Pasajero</th>
              <th>Peatón</th>
              <th>SI</th>
              <th>NO</th>

              <th>Estado de las vías</th>
              <th>Estado de los vehículos</th>
              <th>Condiciones del tráfico</th>
              <th>Acciones de terceros </th>
              <th>Condiciones físicas o emocionales personales</th>
              <th>Condiciones laborales</th>
              <th>Imprudencias otros conductores</th>
              <th>Falta de pericia</th>
              <th>Afán</th>
              <th>Fatiga </th>
              <th>Distracciones al conducir</th>
              <th>No respeto señales de tránsito</th>

              </tr>

              </thead>
            <tbody>';
             foreach($_encuestasv as $id_user => $encuesta_array) {
               $fecha_hoy=date('Y-m-d');
                 $HTML .= '<tr>
                   <td class="bg-primary">'.$_encuestasv[$id_user]['id'].'</td>
                   <td>'.$_users[$_encuestasv[$id_user]['user']]['nombres'].' '.$_users[$_encuestasv[$id_user]['user']]['apellidos'].'</td>
                   <td>'.$_users[$_encuestasv[$id_user]['user']]['cedula'].'</td>';
                 $HTML .= ($_encuestasv[$id_user]['licencia'] == 'si')?'<td class="bg-primary"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['licencia'] == 'no')?'<td class="bg-primary"></td>':'<td></td>';
                 $HTML .= '<td>'.$_encuestasv[$id_user]['categoria_v'].'</td>';
                 //$HTML .= ($fecha_hoy >= $_encuestasv[$id_user]['fecha_v'])?'<td class="bg-danger">'.$_encuestasv[$id_user]['fecha_v'].'</td>':'<td>'.$_encuestasv[$id_user]['fecha_v'].'</td>';
                 $HTML .= '<td>'.$_encuestasv[$id_user]['edad'].'</td>
                   <td>'.$_encuestasv[$id_user]['genero'].'</td>
                   <td>'.$_encuestasv[$id_user]['cargo'].'</td>';
                 $HTML .= ($_encuestasv[$id_user]['vinculado_e'] == 1)?'<td class="bg-primary"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['vinculado_e'] == 2)?'<td class="bg-primary"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['vinculado_e'] == 3)?'<td class="bg-primary"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['vinculado_e'] == 4)?'<td class="bg-primary"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['vinculado_e'] == 5)?'<td class="bg-primary"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['area'] == 1)?'<td class="bg-primary"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['area'] == 2)?'<td class="bg-primary"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['area'] == 3)?'<td class="bg-primary"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['area'] == 4)?'<td class="bg-primary"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['area'] == 5)?'<td class="bg-primary"></td>':'<td></td>';

                 $HTML .= ($_encuestasv[$id_user]['conduce_v'] == 'si')?'<td class="bg-success"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['conduce_v'] == 'no')?'<td class="bg-success"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['desplazamientos'] == 1)?'<td class="bg-success"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['desplazamientos'] == 2)?'<td class="bg-success"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['desplazamientos'] == 3)?'<td class="bg-success"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['desplazamientos'] == 4)?'<td class="bg-success"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['desplazamientos'] == 5)?'<td class="bg-success"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['desplazamientos'] == 6)?'<td class="bg-success"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['frecuencia_s'] == 1)?'<td class="bg-success"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['frecuencia_s'] == 2)?'<td class="bg-success"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['frecuencia_s'] == 3)?'<td class="bg-success"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['frecuencia_s'] == 4)?'<td class="bg-success"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['accidentes_t'] == 'si')?'<td class="bg-success"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['accidentes_t'] == 'no')?'<td class="bg-success"></td>':'<td></td>';
                 $HTML .= '<td>'.$_encuestasv[$id_user]['accidentes_t_c'].'</td>';

                 $HTML .= ($_encuestasv[$id_user]['salir_t'] == 'si')?'<td class="bg-warning"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['salir_t'] == 'no')?'<td class="bg-warning"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['desplazamientos'] == 1)?'<td class="bg-warning"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['desplazamientos'] == 2)?'<td class="bg-warning"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['desplazamientos'] == 3)?'<td class="bg-warning"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['desplazamientos'] == 4)?'<td class="bg-warning"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['desplazamientos'] == 5)?'<td class="bg-warning"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['desplazamientos'] == 6)?'<td class="bg-warning"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['desplazamientos'] == 1 or $_encuestasv[$id_user]['desplazamientos'] == 2 or $_encuestasv[$id_user]['desplazamientos'] == 5 or $_encuestasv[$id_user]['desplazamientos'] == 6)?'<td class="bg-warning"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['desplazamientos'] == 3 or $_encuestasv[$id_user]['desplazamientos'] == 4)?'<td class="bg-warning"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['desplazamientos'] == 7)?'<td class="bg-warning"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['frecuencia_s'] == 1)?'<td class="bg-warning"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['frecuencia_s'] == 2)?'<td class="bg-warning"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['frecuencia_s'] == 3)?'<td class="bg-warning"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['frecuencia_s'] == 4)?'<td class="bg-warning"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['accidentes_t'] == 'si')?'<td class="bg-warning"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['accidentes_t'] == 'no')?'<td class="bg-warning"></td>':'<td></td>';
                 $HTML .= '<td>'.$_encuestasv[$id_user]['accidentes_t_c'].'</td>';

                 $HTML .= ($_encuestasv[$id_user]['desplazamiento_cs'] == 1 or $_encuestasv[$id_user]['desplazamiento_cs'] == 5)?'<td class="bg-danger"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['desplazamiento_cs'] == 8  or $_encuestasv[$id_user]['desplazamiento_cs'] == 5)?'<td class="bg-danger"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['desplazamiento_cs'] == 2)?'<td class="bg-danger"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['desplazamiento_cs'] == 3)?'<td class="bg-danger"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['desplazamiento_cs'] == 4)?'<td class="bg-danger"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['desplazamiento_cs'] == 1 or $_encuestasv[$id_user]['desplazamiento_cs'] == 2 or $_encuestasv[$id_user]['desplazamiento_cs'] == 3 or $_encuestasv[$id_user]['desplazamiento_cs'] == 4)?'<td class="bg-danger"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['desplazamiento_cs'] == 5 or $_encuestasv[$id_user]['desplazamiento_cs'] == 7 or $_encuestasv[$id_user]['desplazamiento_cs'] == 8)?'<td class="bg-danger"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['desplazamiento_cs'] == 6)?'<td class="bg-danger"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['accidentes_cs'] == 'si')?'<td class="bg-danger"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['accidentes_cs'] == 'no')?'<td class="bg-danger"></td>':'<td></td>';
                 $HTML .= '<td>'.$_encuestasv[$id_user]['accidentes_cs_c'].'</td>';

                 $HTML .= ($_encuestasv[$id_user]['causa_accidente1'] == 1)?'<td class="bg-info"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['causa_accidente2'] == 1)?'<td class="bg-info"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['causa_accidente3'] == 1)?'<td class="bg-info"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['causa_accidente4'] == 1)?'<td class="bg-info"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['causa_accidente5'] == 1)?'<td class="bg-info"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['causa_accidente6'] == 1)?'<td class="bg-info"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['causa_accidente7'] == 1)?'<td class="bg-info"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['causa_accidente8'] == 1)?'<td class="bg-info"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['causa_accidente9'] == 1)?'<td class="bg-info"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['causa_accidente10'] == 1)?'<td class="bg-info"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['causa_accidente11'] == 1)?'<td class="bg-info"></td>':'<td></td>';
                 $HTML .= ($_encuestasv[$id_user]['causa_accidente12'] == 1)?'<td class="bg-info"></td>':'<td></td>';
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
