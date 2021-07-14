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

    $sql = $db->query("SELECT * FROM encuesta_sistem_hse WHERE id_usuario = '$u';");
    $row = $db->recorrer($sql);
    if (isset($row)) {
      echo '<div class="alert alert-dismissible alert-info"><strong>INFORMACIÓN: </strong> No hay encuestas a llenar.</div>';
    }else{
      ?>
      <div class="row titulo_categoria">Encuesta Diagnóstica Estándar PESV</div>
      <form class="form-horizontal" action="?view=usuario_evalua&mode=addencuestasistemahse" method="POST" enctype="application/x-www-form-urlencoded">
        <input type="hidden" name="user" value="<?php echo $u; ?>">
        <div class="row cajas">
          <div class="col-lg-12">
            <div class="form-group">
              <label for="inputEmail" class="col-lg-3 control-label">Cargo</label>
              <div class="col-lg-9">
                <input class="form-control form-control-sm" type="text" placeholder="Cargo" name="cargo" required>
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="col-lg-3 control-label">De manera general describa sus actividades laborales rutinarias : </label>
              <div class="col-lg-9">
                <input class="form-control form-control-sm" type="text" name="rutina" placeholder="Actividades laborales rutinarias" required>
              </div>
            </div>
            <div class="form-group">

              <label for="inputEmail" class="col-lg-3 control-label">Las actividades laborales que realiza esporádicamente: </label>
              <div class="col-lg-9">
                <input class="form-control form-control-sm" type="text" name="esporaica" placeholder="Actividades laborales que realiza esporádicamente" required>
              </div>
            </div>
            <div class="col-lg-12">
              <h3>A continuación encontrará un listado del factores de riesgo, favor indicar si esta expuesto, si no esta expuesto favor marcar. Si llegará a ser afirmativa su respuesta indique cuantas horas al día esta expuesto (responda columna 1 hasta la 4) y los controles del peligro (responda columna 5 hasta la 7) Ver ejemplo</h3>
            </div>
            <table class="table table-striped">
              <div class="row">

					 	 <tr class="success">
						  <div class="col-lg-4"><td style="text-align: center; " class="col-lg-4"> Descripción </td></div>
						  <div class="col-lg-4"><td style="text-align: center; "><h6>no esta expuesto</h6></td><td style="text-align: center; "><h6>Exposición mayor a   8 horas*día</h6></td><td style="text-align: center; "><h6>Exposición  menor  o igual a   8 horas*día</6></td><td style="text-align: center; "><h6>Exporádica, semanal, mensual</h6></td><td style="text-align: center; "><h6>Existe  control</h6></td><td style="text-align: center; "><h6>No existe control</h6></td>
						  </div>
              <div class="col-lg-4"><td style="text-align: center; " class="col-lg-4"> Describir el control propuesto</td></div>
						 </tr>
						</div>
            <div class="row">
           	 <tr>
          	  <div class="col-lg-4">
          		<td>Ejemplo: Iluminación </td>
          	  </div>

          	  <div class="col-lg-4">

                <td><div class="radio"><label><input type="radio" name="fisico1" required disabled></label></div></td>
          	  	<td><div class="radio"><label><input type="radio" name="fisico1" required checked disabled></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="fisico1" required disabled disabled></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="fisico1" required disabled></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="fisicontrol1" disabled style="width: 25px; height: 25px;"></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="fisicontrol1" checked disabled style="width: 25px; height: 25px;"></label></div></td>

          	  </div>
              <div class="col-lg-4">
                <td>
                  <textarea class="form-control" name="fisico_control1" rows="3" readonly>Ingresa la luz del sol directamente al escritorio e instalar persianas.</textarea>
                </td>
              </div>

          	 </tr>
          	</div>

            <div class="row">
           	 <tr>
          	  <div class="col-lg-4">
          		<td>Esta expuesto a ruido  </td>
          	  </div>

          	  <div class="col-lg-4">

                <td><div class="radio"><label><input type="radio" name="fisico2" value="1" required></label></div></td>
          	  	<td><div class="radio"><label><input type="radio" name="fisico2" value="2" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="fisico2" value="3" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="fisico2" value="4" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="fisicontrol2" value="1" style="width: 25px; height: 25px;"></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="fisicontrol2" value="2" style="width: 25px; height: 25px;"></label></div></td>

          	  </div>
              <div class="col-lg-4">
                <td><textarea class="form-control" name="fisico_control2" rows="3"></textarea></td>
              </div>

          	 </tr>
          	</div>


            <div class="row">
           	 <tr>
          	  <div class="col-lg-4">
          		<td>Considera que su puesto de trabajo tiene Iluminación excesiva </td>
          	  </div>

          	  <div class="col-lg-4">

                <td><div class="radio"><label><input type="radio" name="fisico3" value="1" required></label></div></td>
          	  	<td><div class="radio"><label><input type="radio" name="fisico3" value="2" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="fisico3" value="3" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="fisico3" value="4" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="fisicontrol3" value="1" style="width: 25px; height: 25px;"></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="fisicontrol3" value="2" style="width: 25px; height: 25px;"></label></div></td>

          	  </div>
              <div class="col-lg-4">
                <td><textarea class="form-control" name="fisico_control3" rows="3"></textarea></td>
              </div>

          	 </tr>
          	</div>
            <div class="row">
           	 <tr>
          	  <div class="col-lg-4">
          		<td>Considera que su puesto de trabajo tiene Iluminación deficiente </td>
          	  </div>

          	  <div class="col-lg-4">

                <td><div class="radio"><label><input type="radio" name="fisico4" value="1" required></label></div></td>
          	  	<td><div class="radio"><label><input type="radio" name="fisico4" value="2" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="fisico4" value="3" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="fisico4" value="4" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="fisicontrol4" value="1" style="width: 25px; height: 25px;"></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="fisicontrol4" value="2" style="width: 25px; height: 25px;"></label></div></td>

          	  </div>
              <div class="col-lg-4">
                <td><textarea class="form-control" name="fisico_control4" rows="3"></textarea></td>
              </div>

          	 </tr>
          	</div>
            <div class="row">
           	 <tr>
          	  <div class="col-lg-4">
          		<td>En su actividad esta expuesto a vibraciones </td>
          	  </div>

          	  <div class="col-lg-4">

                <td><div class="radio"><label><input type="radio" name="fisico5" value="1" required></label></div></td>
          	  	<td><div class="radio"><label><input type="radio" name="fisico5" value="2" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="fisico5" value="3" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="fisico5" value="4" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="fisicontrol5" value="1" style="width: 25px; height: 25px;"></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="fisicontrol5" value="2" style="width: 25px; height: 25px;"></label></div></td>

          	  </div>
              <div class="col-lg-4">
                <td><textarea class="form-control" name="fisico_control5" rows="3"></textarea></td>
              </div>

          	 </tr>
          	</div>

            <div class="row">
           	 <tr>
          	  <div class="col-lg-4">
          		<td>Esta expuesto a radiaciones no ionizantes (solares) </td>
          	  </div>

          	  <div class="col-lg-4">

                <td><div class="radio"><label><input type="radio" name="fisico6" value="1" required></label></div></td>
          	  	<td><div class="radio"><label><input type="radio" name="fisico6" value="2" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="fisico6" value="3" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="fisico6" value="4" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="fisicontrol6" value="1" style="width: 25px; height: 25px;"></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="fisicontrol6" value="2" style="width: 25px; height: 25px;"></label></div></td>

          	  </div>
              <div class="col-lg-4">
                <td><textarea class="form-control" name="fisico_control6" rows="3"></textarea></td>
              </div>

          	 </tr>
          	</div>

            <div class="row">
           	 <tr>
          	  <div class="col-lg-4">
          		<td>Esta expuesto a calor excesivo </td>
          	  </div>

          	  <div class="col-lg-4">

                <td><div class="radio"><label><input type="radio" name="fisico7" value="1" required></label></div></td>
          	  	<td><div class="radio"><label><input type="radio" name="fisico7" value="2" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="fisico7" value="3" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="fisico7" value="4" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="fisicontrol7" value="1" style="width: 25px; height: 25px;"></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="fisicontrol7" value="2" style="width: 25px; height: 25px;"></label></div></td>

          	  </div>
              <div class="col-lg-4">
                <td><textarea class="form-control" name="fisico_control7" rows="3"></textarea></td>
              </div>

          	 </tr>
          	</div>

            <div class="row">
           	 <tr>
          	  <div class="col-lg-4">
          		<td>Esta expuesto a Frio excesivo </td>
          	  </div>

          	  <div class="col-lg-4">

                <td><div class="radio"><label><input type="radio" name="fisico8" value="1" required></label></div></td>
          	  	<td><div class="radio"><label><input type="radio" name="fisico8" value="2" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="fisico8" value="3" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="fisico8" value="4" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="fisicontrol8" value="1" style="width: 25px; height: 25px;"></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="fisicontrol8" value="2" style="width: 25px; height: 25px;"></label></div></td>

          	  </div>
              <div class="col-lg-4">
                <td><textarea class="form-control" name="fisico_control8" rows="3"></textarea></td>
              </div>

          	 </tr>
          	</div>

            <div class="row">
           	 <tr>
          	  <div class="col-lg-4">
          		<td>Esta expuesto a Sólidos, líquidos, gases y vapores que afecten su salud </td>
          	  </div>

          	  <div class="col-lg-4">

                <td><div class="radio"><label><input type="radio" name="quimico1" value="1" required></label></div></td>
          	  	<td><div class="radio"><label><input type="radio" name="quimico1" value="2" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="quimico1" value="3" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="quimico1" value="4" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="quimicontrol1" value="1" style="width: 25px; height: 25px;"></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="quimicontrol1" value="2" style="width: 25px; height: 25px;"></label></div></td>

          	  </div>
              <div class="col-lg-4">
                <td><textarea class="form-control" name="quimico_control1" rows="3"></textarea></td>
              </div>

          	 </tr>
          	</div>
            <div class="row">
           	 <tr>
          	  <div class="col-lg-4">
          		<td>Esta expuesto a polvo o material particulado </td>
          	  </div>

          	  <div class="col-lg-4">

                <td><div class="radio"><label><input type="radio" name="quimico2" value="1" required></label></div></td>
          	  	<td><div class="radio"><label><input type="radio" name="quimico2" value="2" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="quimico2" value="3" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="quimico2" value="4" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="quimicontrol2" value="1" style="width: 25px; height: 25px;"></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="quimicontrol2" value="2" style="width: 25px; height: 25px;"></label></div></td>

          	  </div>
              <div class="col-lg-4">
                <td><textarea class="form-control" name="quimico_control2" rows="3"></textarea></td>
              </div>

          	 </tr>
          	</div>
            <div class="row">
           	 <tr>
          	  <div class="col-lg-4">
          		<td>Esta expuesto al derrame y contacto con sustancias químicas </td>
          	  </div>

          	  <div class="col-lg-4">

                <td><div class="radio"><label><input type="radio" name="quimico3" value="1" required></label></div></td>
          	  	<td><div class="radio"><label><input type="radio" name="quimico3" value="2" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="quimico3" value="3" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="quimico3" value="4" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="quimicontrol3" value="1" style="width: 25px; height: 25px;"></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="quimicontrol3" value="2" style="width: 25px; height: 25px;"></label></div></td>

          	  </div>
              <div class="col-lg-4">
                <td><textarea class="form-control" name="quimico_control3" rows="3"></textarea></td>
              </div>

          	 </tr>
          	</div>
            <div class="row">
           	 <tr>
          	  <div class="col-lg-4">
          		<td>Esta expuesto al contacto con virus, bacterias, hongos </td>
          	  </div>

          	  <div class="col-lg-4">

                <td><div class="radio"><label><input type="radio" name="biologico1" value="1" required></label></div></td>
          	  	<td><div class="radio"><label><input type="radio" name="biologico1" value="2" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="biologico1" value="3" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="biologico1" value="4" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="biologicontrol1" value="1" style="width: 25px; height: 25px;"></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="biologicontrol1" value="2" style="width: 25px; height: 25px;"></label></div></td>

          	  </div>
              <div class="col-lg-4">
                <td><textarea class="form-control" name="biologico_control1" rows="3"></textarea></td>
              </div>

          	 </tr>
          	</div>
            <div class="row">
           	 <tr>
          	  <div class="col-lg-4">
          		<td>Esta expuesto a  picaduras y mordeduras de animales y/o insectos </td>
          	  </div>

          	  <div class="col-lg-4">

                <td><div class="radio"><label><input type="radio" name="biologico2" value="1" required></label></div></td>
          	  	<td><div class="radio"><label><input type="radio" name="biologico2" value="2" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="biologico2" value="3" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="biologico2" value="4" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="biologicontrol2" value="1" style="width: 25px; height: 25px;"></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="biologicontrol2" value="2" style="width: 25px; height: 25px;"></label></div></td>

          	  </div>
              <div class="col-lg-4">
                <td><textarea class="form-control" name="biologico_control2" rows="3"></textarea></td>
              </div>

          	 </tr>
          	</div>
            <div class="row">
           	 <tr>
          	  <div class="col-lg-4">
          		<td>Esta expuesto a accidentes de tránsito (Choques, atropellamientos o volcamientos) </td>
          	  </div>

          	  <div class="col-lg-4">

                <td><div class="radio"><label><input type="radio" name="vial1" value="1" required></label></div></td>
          	  	<td><div class="radio"><label><input type="radio" name="vial1" value="2" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="vial1" value="3" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="vial1" value="4" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="vialcontrol1" value="1" style="width: 25px; height: 25px;"></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="vialcontrol1" value="2" style="width: 25px; height: 25px;"></label></div></td>

          	  </div>
              <div class="col-lg-4">
                <td><textarea class="form-control" name="vial_control1" rows="3"></textarea></td>
              </div>

          	 </tr>
          	</div>
            <div class="row">
           	 <tr>
          	  <div class="col-lg-4">
          		<td>Esta expuesto a robos, secuestros y/o atentados. </td>
          	  </div>

          	  <div class="col-lg-4">

                <td><div class="radio"><label><input type="radio" name="publico1" value="1" required></label></div></td>
          	  	<td><div class="radio"><label><input type="radio" name="publico1" value="2" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="publico1" value="3" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="publico1" value="4" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="publicontrol1" value="1" style="width: 25px; height: 25px;"></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="publicontrol1" value="2" style="width: 25px; height: 25px;"></label></div></td>

          	  </div>
              <div class="col-lg-4">
                <td><textarea class="form-control" name="publico_control1" rows="3"></textarea></td>
              </div>

          	 </tr>
          	</div>
            <div class="row">
           	 <tr>
          	  <div class="col-lg-4">
          		<td>Esta expuesto a Instalaciones inapropiadas (pisos, techos, escaleras, muros, barandas) </td>
          	  </div>

          	  <div class="col-lg-4">

                <td><div class="radio"><label><input type="radio" name="locativo1" value="1" required></label></div></td>
          	  	<td><div class="radio"><label><input type="radio" name="locativo1" value="2" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="locativo1" value="3" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="locativo1" value="4" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="locativocontrol1" value="1" style="width: 25px; height: 25px;"></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="locativocontrol1" value="2" style="width: 25px; height: 25px;"></label></div></td>

          	  </div>
              <div class="col-lg-4">
                <td><textarea class="form-control" name="locativo_control1" rows="3"></textarea></td>
              </div>

          	 </tr>
          	</div>
            <div class="row">
           	 <tr>
          	  <div class="col-lg-4">
          		<td>Asume Posturas prolongadas (De pie, agachado, etc.) </td>
          	  </div>

          	  <div class="col-lg-4">

                <td><div class="radio"><label><input type="radio" name="ergonomia1" value="1" required></label></div></td>
          	  	<td><div class="radio"><label><input type="radio" name="ergonomia1" value="2" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="ergonomia1" value="3" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="ergonomia1" value="4" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="ergonomiacontrol1" value="1" style="width: 25px; height: 25px;"></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="ergonomiacontrol1" value="2" style="width: 25px; height: 25px;"></label></div></td>

          	  </div>
              <div class="col-lg-4">
                <td><textarea class="form-control" name="ergonomia_control1" rows="3"></textarea></td>
              </div>

          	 </tr>
          	</div>
            <div class="row">
           	 <tr>
          	  <div class="col-lg-4">
          		<td>Manipula continuamente cargas superiores a 5 kg </td>
          	  </div>

          	  <div class="col-lg-4">

                <td><div class="radio"><label><input type="radio" name="ergonomia2" value="1" required></label></div></td>
          	  	<td><div class="radio"><label><input type="radio" name="ergonomia2" value="2" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="ergonomia2" value="3" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="ergonomia2" value="4" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="ergonomiacontrol2" value="1" style="width: 25px; height: 25px;"></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="ergonomiacontrol2" value="2" style="width: 25px; height: 25px;"></label></div></td>

          	  </div>
              <div class="col-lg-4">
                <td><textarea class="form-control" name="ergonomia_control2" rows="3"></textarea></td>
              </div>

          	 </tr>
          	</div>
            <div class="row">
           	 <tr>
          	  <div class="col-lg-4">
          		<td>Realiza movimiento repetitivos </td>
          	  </div>

          	  <div class="col-lg-4">

                <td><div class="radio"><label><input type="radio" name="ergonomia3" value="1" required></label></div></td>
          	  	<td><div class="radio"><label><input type="radio" name="ergonomia3" value="2" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="ergonomia3" value="3" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="ergonomia3" value="4" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="ergonomiacontrol3" value="1" style="width: 25px; height: 25px;"></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="ergonomiacontrol3" value="2" style="width: 25px; height: 25px;"></label></div></td>

          	  </div>
              <div class="col-lg-4">
                <td><textarea class="form-control" name="ergonomia_control3" rows="3"></textarea></td>
              </div>

          	 </tr>
          	</div>
            <div class="row">
           	 <tr>
          	  <div class="col-lg-4">
          		<td>Su trabajo ejerce una carga dinámica (Su trabajo exige constante movimiento  y esfuerzo corporal) </td>
          	  </div>

          	  <div class="col-lg-4">

                <td><div class="radio"><label><input type="radio" name="ergonomia4" value="1" required></label></div></td>
          	  	<td><div class="radio"><label><input type="radio" name="ergonomia4" value="2" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="ergonomia4" value="3" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="ergonomia4" value="4" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="ergonomiacontrol4" value="1" style="width: 25px; height: 25px;"></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="ergonomiacontrol4" value="2" style="width: 25px; height: 25px;"></label></div></td>

          	  </div>
              <div class="col-lg-4">
                <td><textarea class="form-control" name="ergonomia_control4" rows="3"></textarea></td>
              </div>

          	 </tr>
          	</div>
            <div class="row">
           	 <tr>
          	  <div class="col-lg-4">
          		<td>Manipula o esta en contacto con materiales, herramienta o equipos en su lugar de trabajo </td>
          	  </div>

          	  <div class="col-lg-4">

                <td><div class="radio"><label><input type="radio" name="mecanico1" value="1" required></label></div></td>
          	  	<td><div class="radio"><label><input type="radio" name="mecanico1" value="2" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="mecanico1" value="3" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="mecanico1" value="4" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="mecanicontrol1" value="1" style="width: 25px; height: 25px;"></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="mecanicontrol1" value="2" style="width: 25px; height: 25px;"></label></div></td>

          	  </div>
              <div class="col-lg-4">
                <td><textarea class="form-control" name="mecanico_control1" rows="3"></textarea></td>
              </div>

          	 </tr>
          	</div>
            <div class="row">
           	 <tr>
          	  <div class="col-lg-4">
          		<td>Tiene contacto directo con instalaciones eléctricas de baja, media tensión </td>
          	  </div>

          	  <div class="col-lg-4">

                <td><div class="radio"><label><input type="radio" name="mecanico2" value="1" required></label></div></td>
          	  	<td><div class="radio"><label><input type="radio" name="mecanico2" value="2" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="mecanico2" value="3" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="mecanico2" value="4" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="mecanicontrol2" value="1" style="width: 25px; height: 25px;"></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="mecanicontrol2" value="2" style="width: 25px; height: 25px;"></label></div></td>

          	  </div>
              <div class="col-lg-4">
                <td><textarea class="form-control" name="mecanico_control2" rows="3"></textarea></td>
              </div>

          	 </tr>
          	</div>
            <div class="row">
           	 <tr>
          	  <div class="col-lg-4">
          		<td>Tiene contacto directo con instalaciones eléctricas de alta tensión </td>
          	  </div>

          	  <div class="col-lg-4">

                <td><div class="radio"><label><input type="radio" name="mecanico3" value="1" required></label></div></td>
          	  	<td><div class="radio"><label><input type="radio" name="mecanico3" value="2" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="mecanico3" value="3" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="mecanico3" value="4" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="mecanicontrol3" value="1" style="width: 25px; height: 25px;"></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="mecanicontrol3" value="2" style="width: 25px; height: 25px;"></label></div></td>

          	  </div>
              <div class="col-lg-4">
                <td><textarea class="form-control" name="mecanico_control3" rows="3"></textarea></td>
              </div>

          	 </tr>
          	</div>
            <div class="row">
           	 <tr>
          	  <div class="col-lg-4">
          		<td>Su trabajo es repetitivo y monótono </td>
          	  </div>

          	  <div class="col-lg-4">

                <td><div class="radio"><label><input type="radio" name="psicosocial1" value="1" required></label></div></td>
          	  	<td><div class="radio"><label><input type="radio" name="psicosocial1" value="2" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="psicosocial1" value="3" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="psicosocial1" value="4" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="psicosocialcontrol1" value="1" style="width: 25px; height: 25px;"></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="psicosocialcontrol1" value="2" style="width: 25px; height: 25px;"></label></div></td>

          	  </div>
              <div class="col-lg-4">
                <td><textarea class="form-control" name="psicosocial_control1" rows="3"></textarea></td>
              </div>

          	 </tr>
          	</div>
            <div class="row">
           	 <tr>
          	  <div class="col-lg-4">
          		<td>Su trabajo exige alto nivel de concentración </td>
          	  </div>

          	  <div class="col-lg-4">

                <td><div class="radio"><label><input type="radio" name="psicosocial2" value="1" required></label></div></td>
          	  	<td><div class="radio"><label><input type="radio" name="psicosocial2" value="2" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="psicosocial2" value="3" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="psicosocial2" value="4" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="psicosocialcontrol2" value="1" style="width: 25px; height: 25px;"></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="psicosocialcontrol2" value="2" style="width: 25px; height: 25px;"></label></div></td>

          	  </div>
              <div class="col-lg-4">
                <td><textarea class="form-control" name="psicosocial_control2" rows="3"></textarea></td>
              </div>

          	 </tr>
          	</div>
            <div class="row">
           	 <tr>
          	  <div class="col-lg-4">
          		<td>Esta expuesto a turno extensos </td>
          	  </div>

          	  <div class="col-lg-4">

                <td><div class="radio"><label><input type="radio" name="psicosocial3" value="1" required></label></div></td>
          	  	<td><div class="radio"><label><input type="radio" name="psicosocial3" value="2" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="psicosocial3" value="3" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="psicosocial3" value="4" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="psicosocialcontrol3" value="1" style="width: 25px; height: 25px;"></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="psicosocialcontrol3" value="2" style="width: 25px; height: 25px;"></label></div></td>

          	  </div>
              <div class="col-lg-4">
                <td><textarea class="form-control" name="psicosocial_control3" rows="3"></textarea></td>
              </div>

          	 </tr>
          	</div>
            <div class="row">
           	 <tr>
          	  <div class="col-lg-4">
          		<td>Requiere viajar de manera continua en avión </td>
          	  </div>

          	  <div class="col-lg-4">

                <td><div class="radio"><label><input type="radio" name="otro1" value="1" required></label></div></td>
          	  	<td><div class="radio"><label><input type="radio" name="otro1" value="2" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="otro1" value="3" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="otro1" value="4" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="otrocontrol1" value="1" style="width: 25px; height: 25px;"></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="otrocontrol1" value="2" style="width: 25px; height: 25px;"></label></div></td>

          	  </div>
              <div class="col-lg-4">
                <td><textarea class="form-control" name="otro_control1" rows="3"></textarea></td>
              </div>

          	 </tr>
          	</div>
            <div class="row">
           	 <tr>
          	  <div class="col-lg-4">
          		<td>Requiere viajar a diferentes zonas de manera continua en bus o carro </td>
          	  </div>

          	  <div class="col-lg-4">

                <td><div class="radio"><label><input type="radio" name="otro2" value="1" required></label></div></td>
          	  	<td><div class="radio"><label><input type="radio" name="otro2" value="2" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="otro2" value="3" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="otro2" value="4" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="otrocontrol2" value="1" style="width: 25px; height: 25px;"></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="otrocontrol2" value="2" style="width: 25px; height: 25px;"></label></div></td>

          	  </div>
              <div class="col-lg-4">
                <td><textarea class="form-control" name="otro_control2" rows="3"></textarea></td>
              </div>

          	 </tr>
          	</div>
            <div class="row">
           	 <tr>
          	  <div class="col-lg-4">
          		<td>Trabajos en alturas superiores o inferiores a 1.5  </td>
          	  </div>

          	  <div class="col-lg-4">

                <td><div class="radio"><label><input type="radio" name="otro3" value="1" required></label></div></td>
          	  	<td><div class="radio"><label><input type="radio" name="otro3" value="2" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="otro3" value="3" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="otro3" value="4" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="otrocontrol3" value="1" style="width: 25px; height: 25px;"></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="otrocontrol3" value="2" style="width: 25px; height: 25px;"></label></div></td>

          	  </div>
              <div class="col-lg-4">
                <td><textarea class="form-control" name="otro_control3" rows="3"></textarea></td>
              </div>

          	 </tr>
          	</div>
            <div class="row">
           	 <tr>
          	  <div class="col-lg-4">
          		<td>Trabajos en cuevas o zanjas, espacios confinados </td>
          	  </div>

          	  <div class="col-lg-4">

                <td><div class="radio"><label><input type="radio" name="otro4" value="1" required></label></div></td>
          	  	<td><div class="radio"><label><input type="radio" name="otro4" value="2" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="otro4" value="3" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="otro4" value="4" required></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="otrocontrol4" value="1" style="width: 25px; height: 25px;"></label></div></td>
            		<td><div class="radio"><label><input type="radio" name="otrocontrol4" value="2" style="width: 25px; height: 25px;"></label></div></td>

          	  </div>
              <div class="col-lg-4">
                <td><textarea class="form-control" name="otro_control4" rows="3"></textarea></td>
              </div>

          	 </tr>
          	</div>

          </table>
          <div class="col-lg-12">
            <h3>IDENTIFICACION DE ASPECTOS AMBIENTALES (SELECCIONE LOS ASPECTOS AMBIENTALES MAS SIGNIFICATIVOS DE SU AREA)</h3>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="aspectos_ambientales1" id="inlineCheckbox1" value="1">
            <label class="form-check-label" for="inlineCheckbox1">CONSUMO DE AGUA</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="aspectos_ambientales2" id="inlineCheckbox2" value="1">
            <label class="form-check-label" for="inlineCheckbox2">GENERACION DE RESIDUOS SOLIDOS</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="aspectos_ambientales3" id="inlineCheckbox3" value="1">
            <label class="form-check-label" for="inlineCheckbox3">GENERACION DE GASES CONTAMINATES</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="aspectos_ambientales4" id="inlineCheckbox4" value="1">
            <label class="form-check-label" for="inlineCheckbox4">CONSUMO DE ENERGIA</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="aspectos_ambientales5" id="inlineCheckbox5" value="1">
            <label class="form-check-label" for="inlineCheckbox5">GENERACION DE RESIDUOS PELIGROSOS (TONNERS, BOMBILLAS, PARTES DE COMPUTADORES)</label>
          </div>
          <table class="table table-striped">
            <h3>SUGERENCIAS A REALIZAR</h3>
            <tr><div class="col-lg-6">
              <td class="col-lg-6"><h4>CAPACITACIONES EN HSE:</h4><h5> Favor sugiera las capacitaciones en salud, seguridad y ambiente considera importantes para este periodo</h5></td>
            </div>
            <div class="col-lg-6">
              <td class="col-lg-6"><textarea class="form-control" name="capaci_hse" rows="3" required></textarea></td>
            </div></tr>
            <tr><div class="col-lg-6">
              <td><h4>CAPACITACIONES TÉCNICAS: </h4><h5> Favor sugiera las capacitaciones técnicas que usted considera convenientes para el desarrollo de las funciones propias de su cargo </h5></td>
            </div>
            <div class="col-lg-6">
              <td><textarea class="form-control" name="capaci_tecn" rows="3" required></textarea></td>
            </div></tr>
            <tr><div class="col-lg-6">
              <td><h4>ACTIVIDADES EN HSE: </h4><h5> Favor sugiera actividades  o controles en salud, seguridad y ambiente que permitan mejorar los aspectos de seguridad salud en el trabajo y ambiente </h5></td>
            </div>
            <div class="col-lg-6">
              <td><textarea class="form-control" name="activi_hse" rows="3" required></textarea></td>
            </div></tr>
            <tr><div class="col-lg-6">
              <td><h4>ACTIVIDADES POR DESTACAR: </h4><h5> Que actividades o campañas en salud seguridad y ambiente se destacaron el año anterior </h5></td>
            </div>
            <div class="col-lg-6">
              <td><textarea class="form-control" name="activ_destaca" rows="3" required></textarea></td>
            </div></tr>
          </table>
          <div class="form-group">
            <div class="col-lg-9 col-lg-offset-2">
              <button type="reset" class="btn btn-default">Resetear</button>
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
          </div>
          </div>
        </div>
      </form>

<?php } ?>
  </div>
</div>

</div>
</section>

<?php include(HTML_DIR . 'overall/footer.php'); ?>

</body>
</html>
