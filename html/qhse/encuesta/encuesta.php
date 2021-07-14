<?php include(HTML_DIR . 'overall/head.php'); ?>

<body>
<section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITLE ?></a></section>

<?php include(HTML_DIR . '/overall/nav.php'); ?>

<section class="mbr-section mbr-after-navbar">
<div class="mbr-section__container container mbr-section__container--isolated">

  <?php
  $u = $_users[$_SESSION['app_id']]['id'];
  if(isset($_GET['success'])) {
    echo '<div class="alert alert-dismissible alert-success">
      <strong>Completado!</strong> La encuesta se guardo.
    </div>';
  }
  if(isset($_GET['error'])) {
    echo '<div class="alert alert-dismissible alert-danger">
      <strong>Error!</strong></strong> los campos no puede estar vacío.
    </div>';
  }
  ?>

<div class="row container">
   <div class="pull-right">

     <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
       <a class="mbr-buttons__btn btn btn-danger active" href="?view=usuario_evalua&mode=encuesta">ENCUESTA</a>
     </li></ul></div>

       <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
         <a class="mbr-buttons__btn btn btn-danger" href="?view=usuario_evalua&mode=evaluacion">EVALUACIÒN DE DESEMPEÑO</a>
       </li></ul></div>
   </div>


    <ol class="breadcrumb">
      <li><a href="?view=index"><i class="fa fa-tags"></i> Clientes</a></li>
    </ol>
</div>

<div class="row categorias_con_foros">
  <div class="col-sm-12">
    <?php
    $db = new Conexion();

    $sql = $db->query("SELECT * FROM encuesta20 WHERE user = '$u';");
    $row = $db->recorrer($sql);
    if (isset($row)) {
      echo '<div class="alert alert-dismissible alert-info"><strong>INFORMACIÓN: </strong> No hay encuestas a llenar.</div>';
    }else{
      ?>
      <div class="row titulo_categoria">Encuesta Diagnóstica Estándar PESV</div>


        <form class="form-horizontal" action="?view=usuario_evalua&mode=add" method="POST" enctype="application/x-www-form-urlencoded">
          <fieldset>
            <input type="hidden" name="user" value="<?php echo $u; ?>">
        <div class="row cajas">
          <div class="col-md-12">

              <div class="form-group">
                <label for="inputEmail" class="col-lg-3 control-label">¿Tiene licencia de conducción?</label>
                <div class="col-lg-9">
                  <select name="licencia" class="form-control" onChange="mlicencia(this.value);" required>
                    <option value="">-</option>
                    <option value="1">SI</option>
                    <option value="0">NO</option>
                  </select>
                </div>
              </div>
              <div id="licencia" style="display: none;">
              <div class="form-group">
                <label for="inputEmail" class="col-lg-3 control-label">Categoría</label>
                <div class="col-lg-9">
                  <select name="categoria_v" class="form-control">
                    <option value="">-</option>
                    <option value="1">A1</option>
                    <option value="2">A2</option>
                    <option value="3">B1</option>
                    <option value="4">B2</option>
                    <option value="5">B3</option>
                    <option value="5">C1</option>
                    <option value="5">C2</option>
                    <option value="5">C3</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-3 control-label">Fecha de Vencimiento</label>
                <div class="col-lg-4">
                  <input type='date' name="fecha_v" class='form-control form-control-sm'>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-3 control-label">¿Cómo parte de las funciones de su cargo conduce usted vehículos?</label>
                <div class="col-lg-9">
                  <select name="conduce_v" class="form-control">
                    <option value="">-</option>
                    <option value="1">SI</option>
                    <option value="0">NO</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-3 control-label">EXPERIENCIA COMO CONDUCTOR</label>
                <div class="col-lg-4">
                  <input type='number' name="experiencia_conduce" class='form-control form-control-sm' placeholder="En años">
                </div>
              </div>
            </div>

              <div class="form-group">
                <label for="inputEmail" class="col-lg-3 control-label">Edad en años</label>
                <div class="col-lg-9">
                  <input type="number" class="form-control" name="edad" placeholder="Edad en años" required>
                </div>
              </div>

              <div class="form-group">
                <label for="inputEmail" class="col-lg-3 control-label">Género</label>
                <div class="col-lg-9">
                  <select name="genero" class="form-control" required>
                    <option value="">-</option>
                    <option value="1">Femenino</option>
                    <option value="2">Masculino</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-3 control-label">Ciudad</label>
                <div class="col-lg-9">
                  <input type="text" class="form-control" name="ciudad" placeholder="Ciudad" required>
                </div>
              </div>

              <div class="form-group">
                <label for="inputEmail" class="col-lg-3 control-label">Cargo</label>
                <div class="col-lg-9">
                  <input type="text" class="form-control" name="cargo" placeholder="Cargo" required>
                </div>
              </div>

              <div class="form-group">
                <label for="inputEmail" class="col-lg-3 control-label">Está vinculado con la empresa o entidad como</label>
                <div class="col-lg-9">
                  <select name="vinculado_e" class="form-control" required>
                    <option value="">-</option>
                    <option value="1">Contrato directo</option>
                    <option value="2">Contrato de prestación de servicios</option>
                    <option value="3">Contrato por obra o labor</option>
                    <option value="4">Servicios temporales</option>
                    <option value="5">No está vinculado</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="inputEmail" class="col-lg-3 control-label">Proceso o área a la que pertenece su cargo</label>
                <div class="col-lg-9">
                  <select name="area" class="form-control" required>
                    <option value="">-</option>
                    <option value="1">Administrativo</option>
                    <option value="2">Comercial</option>
                    <option value="3">Operativo</option>
                    <option value="4">Técnico</option>
                    <option value="5">Asistencial</option>
                  </select>
                </div>
              </div>
            </div>
          </div>


          <div class="row titulo_categoria">IDENTIFICACIÓN DE ACCIDENTES</div>
          <div class="row cajas">
            <div class="col-md-12">
              <div class="form-group">
               <label for="inputEmail" class="col-lg-3 control-label">¿En los últimos cinco años ha tenido accidente como conductor?</label>
               <div class="col-lg-9">
                 <select name="accidentes_t" class="form-control" onChange="accidente_t(this.value);" required>
                   <option value="">-</option>
                   <option value="1">SI</option>
                   <option value="0">NO</option>
                 </select>
               </div>
             </div>
             <div id="accidente_t" style="display: none;">
               <input name="circustancia_a_t" class="form-control" type="text" placeholder="CIRCUSTANCIAS">
             </div>
             <div class="form-group">
              <label for="inputEmail" class="col-lg-3 control-label">¿En los últimos cinco años ha tenido accidente como peatón?</label>
              <div class="col-lg-9">
                <select name="accidentes_t_peaton" class="form-control" onChange="accidente_p(this.value);" required>
                  <option value="">-</option>
                  <option value="1">SI</option>
                  <option value="0">NO</option>
                </select>
              </div>
            </div>
            <div id="accidente_p" style="display: none;">
              <input name="circustancia_a_pet" class="form-control" type="text" placeholder="CIRCUSTANCIAS">
            </div>
            <div class="form-group">
             <label for="inputEmail" class="col-lg-3 control-label">¿En los últimos cinco años ha tenido accidentes como pasajero?</label>
             <div class="col-lg-9">
               <select name="accidentes_t_pasajero" class="form-control" onChange="accidente_pj(this.value);" required>
                 <option value="">-</option>
                 <option value="1">SI</option>
                 <option value="0">NO</option>
               </select>
             </div>
            </div>
            <div id="accidente_pj" style="display: none;">
              <input name="circustancia_a_pasj" class="form-control" type="text" placeholder="CIRCUSTANCIAS">
            </div>
            <div class="form-group">
             <label for="inputEmail" class="col-lg-3 control-label">¿En los últimos cinco años ha tenido algún incidente de transito con daños materiales, pero no personales?</label>
             <div class="col-lg-9">
               <select name="accidentes_t_d_material" class="form-control" onChange="accidente_d(this.value);" required>
                 <option value="">-</option>
                 <option value="1">SI</option>
                 <option value="0">NO</option>
               </select>
             </div>
            </div>
            <div id="accidente_d" style="display: none;">
              <input name="circustancia_a_dmat" class="form-control" type="text" placeholder="CIRCUSTANCIAS">
            </div>
            </div>
          </div>


          <div class="row titulo_categoria">DESPLAZAMIENTOS EN MISIÓN</div>
          <div class="row cajas">
            <div class="col-md-12">


          <!--    <div class="form-group">
                <label for="inputEmail" class="col-lg-3 control-label">Para el cumplimiento de sus funciones laborales debe salir a vías públicas en horas laborales?</label>
                <div class="col-lg-9">
                  <select name="salir_t" class="form-control" onChange="msalir_t(this.value);">
                    <option value="-">-</option>
                    <option value="si">SI</option>
                    <option value="no">NO</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="inputEmail" class="col-lg-3 control-label">Comúnmente como realiza estos desplazamientos</label>
                <div class="col-lg-9">
                  <select name="desplazamientos" class="form-control">
                    <option value="-">-</option>
                    <option value="1">Conduciendo Vehículo de la empresa </option>
                    <option value="2">Conduciendo Vehículo de un tercero</option>
                    <option value="3">Pasajero vehículo empresa</option>
                    <option value="4">Pasajero vehículo público</option>
                    <option value="5">Motocicleta Propia</option>
                    <option value="6">Bicicleta Propia</option>
                    <option value="7">Peatón</option>
                  </select>
                </div>
              </div>-->
              <div class="form-group">
                <label for="inputEmail" class="col-lg-3 control-label">¿Con qué frecuencia realiza desplazamientos como parte de sus funciones?</label>
                <div class="col-lg-9">
                  <select name="frecuencia_s" class="form-control" required>
                    <option value="">-</option>
                    <option value="1">Diaria</option>
                    <option value="2">Alguna vez a la Semana</option>
                    <option value="3">Una o dos veces al Mes</option>
                    <option value="4">No me desplazo</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="inputEmail" class="col-lg-3 control-label">¿Conduce su propio vehículo para desplazamientos de función?</label>
                <div class="col-lg-9">
                  <select name="desplazamiento_v_p" class="form-control" onChange="maccidentes_t(this.value);" required>
                    <option value="">-</option>
                    <option value="1">SI</option>
                    <option value="0">NO</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="inputEmail" class="col-lg-3 control-label">Generalmente quien programa esas salidas</label>
                <div class="col-lg-9">
                  <select name="programa_s" class="form-control" required>
                    <option value="">-</option>
                    <option value="1">Usted mismo</option>
                    <option value="2">La Empresa</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="inputEmail" class="col-lg-3 control-label">¿Con cuánto tiempo de antelación para prever desplazamientos?</label>
                <div class="col-lg-9">
                  <select name="programa_tiempo" class="form-control" required>
                    <option value="">-</option>
                    <optgroup label="Horas">
                    <option value="1">1-4 Horas</option>
                    <option value="2">5-8 Horas</option>
                    <option value="3">8-12 Horas</option>
                    <option value="4">Más de 12 Horas</option>
                  </optgroup>
                    <optgroup label="Días">
                    <option value="5">1-3 Días</option>
                    <option value="6">4-6 Días</option>
                    <option value="7">Más de 6 Días</option>
                    </optgroup>
                  </select>
                </div>
              </div>


              <!--<div id="accidentes_t" style="display: none;">
              <div class="form-group">
                <label for="inputEmail" class="col-lg-3 control-label">¿Cuántos?</label>
                <div class="col-lg-9">
                  <input type="number" class="form-control" name="accidentes_t_c" placeholder="¿Cuántos accidentes ha tenido?">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-3 control-label">¿Qué rol desempeñaba en el accidente?</label>
                <div class="col-lg-9">
                  <select name="accidentes_t_r" class="form-control">
                    <option value="-">-</option>
                    <option value="1">Peatón</option>
                    <option value="2">Conductor Vehículo</option>
                    <option value="3">Conductor Motocicleta</option>
                    <option value="4">Conductor bicicleta</option>
                    <option value="5">Pasajero vehículo</option>
                    <option value="6">Pasajero motocicleta</option>
                    <option value="7">Pasajero bicicleta</option>
                    <option value="8">N.A.</option>
                  </select>
                </div>
              </div>
            </div>-->

            </div>
          </div>
          <div class="row titulo_categoria">DESPLAZAMIENTOS IN-ITINERE Casa - Trabajo - Casa </div>
          <div class="row cajas">
            <div class="col-md-12">
              <div class="form-group">
                <label for="inputEmail" class="col-lg-3 control-label">¿Los medios desplazamiento que utilizo para los trayectos casa - trabajo son?</label>
                <div class="col-lg-9">
                  <select name="desplazamiento_cs" class="form-control" required>
                    <option value="">-</option>
                    <option value="1">A Pie</option>
                    <option value="2">Vehículo Automotor</option>
                    <option value="3">Moto Ciclomotor</option>
                    <option value="4">Bicicleta</option>
                    <option value="5">Transporte público</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="inputEmail" class="col-lg-3 control-label">Cuanto tiempo en promedio se gasta en estos desplazamientos (casa - trabajo)</label>
                <div class="col-lg-9">
                  <select name="tiempo_desp_ida" class="form-control" required>
                    <option value="">-</option>
                    <option value="Menos de 1 hora">Menos de 1 hora</option>
                    <option value="Entre 1 y 2 horas">Entre 1 y 2 horas</option>
                    <option value="Entre 2 y 3 horas">Entre 2 y 3 horas</option>
                    <option value="Más de 3 horas">Más de 3 horas</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-3 control-label">Cuanto tiempo en promedio se gasta en estos desplazamientos (trabajo - casa)</label>
                <div class="col-lg-9">
                  <select name="tiempo_desp_vuelta" class="form-control" required>
                    <option value="">-</option>
                    <option value="Menos de 1 hora">Menos de 1 hora</option>
                    <option value="Entre 1 y 2 horas">Entre 1 y 2 horas</option>
                    <option value="Entre 2 y 3 horas">Entre 2 y 3 horas</option>
                    <option value="Más de 3 horas">Más de 3 horas</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="inputEmail" class="col-lg-3 control-label">Cuantos kilómetros aproximadamente hay entre su casa y su trabajo (ida y vuelta)</label>
                <div class="col-lg-9">
                  <select name="distancia_cs" class="form-control" required>
                    <option value="">-</option>
                    <option value="Menos de 10 km">Menos de 10 km</option>
                    <option value="Entre 10 y 20 Km">Entre 10 y 20 Km</option>
                    <option value="Entre 20 y 30 Km">Entre 20 y 30 Km</option>
                    <option value="Más de 30 km">Más de 30 km</option>
                  </select>
                </div>
              </div>
            </div>
          </div>

              <!--<div class="form-group">
                <label for="inputEmail" class="col-lg-3 control-label">¿Ha tenido accidentes de tránsito en estos desplazamientos en los últimos 2 años?</label>
                <div class="col-lg-9">
                  <select name="accidentes_cs" class="form-control" onChange="maccidentes_c(this.value);">
                    <option value="-">-</option>
                    <option value="si">SI</option>
                    <option value="no">NO</option>
                  </select>
                </div>
              </div>
            <div id="accidentes_c" style="display: none;">
              <div class="form-group">
                <label for="inputEmail" class="col-lg-3 control-label">¿Cuántos?</label>
                <div class="col-lg-9">
                  <input type="number" class="form-control" name="accidentes_cs_c" placeholder="¿Cuántos accidentes ha tenido en estos desplazamientos?">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-3 control-label">¿Qué rol desempeñaba en el accidente?</label>
                <div class="col-lg-9">
                  <select name="accidentes_cs_r" class="form-control">
                    <option value="-">-</option>
                    <option value="1">Peatón</option>
                    <option value="2">Conductor Vehículo</option>
                    <option value="3">Conductor Motocicleta</option>
                    <option value="4">Conductor bicicleta</option>
                    <option value="5">Pasajero vehículo</option>
                    <option value="6">Pasajero motocicleta</option>
                    <option value="7">Pasajero bicicleta</option>
                  </select>
                </div>
              </div>
            </div>-->
            <div class="row titulo_categoria">FACTORES DE RIESGO I </div>
            <div class="row cajas">
              <div class="col-md-12">
              <div class="form-group">
                <label for="inputEmail" class="col-lg-3 control-label">PRINCIPALES FACTORES DE RIESGO
                  (Tanto en los trayectos ida-vuelta del domicilio al
                  trabajo como en los desplazamientos en misión)</label>
                  <div class="col-lg-9">
                    <select name="factores_riesgo" class="form-control" required>
                      <option value="">-</option>
                      <option value="1">ESTADO DE LA INFRAESTRUCTURA VIAL - VÍAS</option>
                      <option value="2">VEHICULO</option>
                      <option value="3">OTROS ACTORES</option>
                      <option value="4">ORGANIZACIÓN DEL TRABAJO</option>
                      <option value="5">PROPIA CONDUCCION</option>
                      <option value="6">OTROS</option>
                    </select>
                  </div>
                <!---->
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-3 control-label">CAUSAS MOTIVAN RIESGO
(Causas que motivan el riesgo, indique todos los que considere adecuados, en su caso)</label>

                <div class="col-lg-9">
                  <div class="form-check">
                    <input class="form-check-input" name="causa_accidente1" value="1" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      INTENSIDAD TRAFICO
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" name="causa_accidente2" value="1" type="checkbox" id="gridCheck1">
                    <label class="form-check-label" for="gridCheck1">
                      CONDICIONES CLIMATOLOGICAS
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" name="causa_accidente3" value="1" type="checkbox" id="gridCheck2">
                    <label class="form-check-label" for="gridCheck2">
                      TIPO VEHICULO O SUS CARACTERÍSTICAS
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" name="causa_accidente4" value="1" type="checkbox" id="gridCheck3">
                    <label class="form-check-label" for="gridCheck3">
                      ORGANIZACIÓN DEL TRABAJO (Agenda, reuniones, tiempos de entrega, etc.)
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" name="causa_accidente5" value="1" type="checkbox" id="gridCheck4">
                    <label class="form-check-label" for="gridCheck4">
                      SU PROPIA CONDUCCIÓN
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" name="causa_accidente6" value="1" type="checkbox" id="gridCheck5">
                    <label class="form-check-label" for="gridCheck5">
                      TIEMPO REQUERIDO DESPLAZAMIETOS
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" name="causa_accidente7" value="1" type="checkbox" id="gridCheck6">
                    <label class="form-check-label" for="gridCheck6">
                      EXPERIENCIA
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" name="causa_accidente8" value="1" type="checkbox" id="gridCheck7">
                    <label class="form-check-label" for="gridCheck7">
                      ESTADO PSICOFISICO
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" name="causa_accidente9" value="1" type="checkbox" id="gridCheck8">
                    <label class="form-check-label" for="gridCheck8">
                      OTROS ACTORES
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" name="causa_accidente10" value="1 " type="checkbox" id="gridCheck9">
                    <label class="form-check-label" for="gridCheck9">
                      SEÑALIZACION
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" name="causa_accidente11" value="1" type="checkbox" id="gridCheck10">
                    <label class="form-check-label" for="gridCheck10">
                      FALTA DE FORMACIÓN
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" name="causa_accidente12" value="1" type="checkbox" id="gridCheck11">
                    <label class="form-check-label" for="gridCheck11">
                      DISPOSITIVOS COMUNICACIÓN
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" name="otro" value="1" type="checkbox" id="gridCheck12">
                    <label class="form-check-label" for="gridCheck12">
                      OTROS
                    </label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-lg-9 col-lg-offset-2">
                  <button type="reset" class="btn btn-default">Resetear</button>
                  <button type="submit" class="btn btn-primary">Crear</button>
                </div>
              </div>
            </div>
          </div>

        </fieldset>
      </form>
<?php } ?>
  </div>
</div>

</div>
</section>
<script type="text/javascript">
function mlicencia(id) {
    if (id == "1") {
        $("#licencia").show();
    }

    if (id == "0") {
        $("#licencia").hide();
    }
}
function accidente_t(id) {
    if (id == "1") {
        $("#accidente_t").show();
    }

    if (id == "0") {
        $("#accidente_t").hide();
    }
}
function accidente_p(id) {
    if (id == "1") {
        $("#accidente_p").show();
    }

    if (id == "0") {
        $("#accidente_p").hide();
    }
}
function accidente_pj(id) {
    if (id == "1") {
        $("#accidente_pj").show();
    }

    if (id == "0") {
        $("#accidente_pj").hide();
    }
}
function accidente_d(id) {
    if (id == "1") {
        $("#accidente_d").show();
    }

    if (id == "0") {
        $("#accidente_d").hide();
    }
}
function msalir_t(id) {
    if (id == "1") {
        $("#salir_t").show();
    }

    if (id == "0") {
        $("#salir_t").hide();
    }
}
function maccidentes_t(id) {
    if (id == "1") {
        $("#accidentes_t").show();
    }

    if (id == "0") {
        $("#accidentes_t").hide();
    }
}
function maccidentes_c(id) {
    if (id == "1") {
        $("#accidentes_c").show();
    }

    if (id == "0") {
        $("#accidentes_c").hide();
    }
}
</script>
<?php include(HTML_DIR . 'overall/footer.php'); ?>

</body>
</html>
