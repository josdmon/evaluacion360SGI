<?php include(HTML_DIR . 'overall/head.php'); ?>

 <body>
 <section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITLE ?></a></section>

 	<?php include(HTML_DIR . '/overall/nav.php'); ?>
	<section class="mbr-section mbr-after-navbar">
	  <div class="mbr-section__container container mbr-section__container--isolated">
	    <?php
      $history = $_GET['id'];
		  if(isset($_GET['success'])) {
		    echo '<div class="alert alert-dismissible alert-success">
		      <strong>Completado!</strong> el foro ha sido creado.
		    </div>';
		  }
		  if(isset($_GET['error'])) {
		    if($_GET['error'] == 1) {
		      echo '<div class="alert alert-dismissible alert-danger">
		        <strong>Error!</strong></strong> todos los campos deben estar llenos.
		      </div>';
		    } else {
		      echo '<div class="alert alert-dismissible alert-danger">
		        <strong>Error!</strong></strong> debe existir una categoría para asociar al foro.
		      </div>';
		    }
		  }
		?>
		<div class="row container">
		    <div class="pull-right">
          <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
	            <a class="mbr-buttons__btn btn btn-danger active" href="?view=gerente_de_personal&mode=usuarios&id=<?= $history; ?>">PUNTAJES EMPLEADOS</a>
	          </li></ul></div>
            <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
    		        <a class="mbr-buttons__btn btn btn-danger  "href="?view=gerente_de_personal&mode=plan_accion&id=<?= $history; ?>">PLAN ACCIÓN EMPLEADOS</a>
    		      </li></ul></div>

          <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
            <a class="mbr-buttons__btn btn btn-danger" href="?view=evaluador">RESULTADOS</a>
          </li></ul></div>

            <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
              <a class="mbr-buttons__btn btn btn-danger" href="?view=usuario_evalua&mode=evaluacion">USUARIO A EVALUAR</a>
            </li></ul></div>

	        </div>

		     <ol class="breadcrumb">
		       <li><a href="?view=gerente_de_personal"><i class="fa fa-tags"></i> Resultados Evaluación</a></li>
		     </ol>
		</div>
		<div class="row categorias_con_foros">
		   <div class="col-sm-12">
		       <div class="row titulo_categoria">Gestión de Usuarios</div>
		       <div class="row cajas">
			  	<div class="list-group col-md-12">
			  	<?php
				  	$db = new Conexion();
				  	$area = $_users[$_SESSION['app_id']]['area'];

					$sql2 = $db->query("SELECT * FROM resultadosevaluacion WHERE area = '$area' AND comunicacion >=1 AND historial_evaluacion = $history;");
					if ($row = $db->recorrer($sql2)){
					    $i=0; $com=0; $eft=0; $etc=0; $hbd=0; $ldg=0; $prf=0;
					    do {
					   		$i++;
					   		$com+=$row["comunicacion"];
					   		$eft+=$row["efectividad"];
					   		$etc+=$row["etica"];
					   		$hbd+=$row["habilidad"];
					   		$ldg+=$row["liderasgo"];
					   		$prf+=$row["profesional"];

					   } while ($row = $db->recorrer($sql2));

					$com1=number_format($com/$i,2); $eft1=number_format($eft/$i,2); $etc1=number_format($etc/$i,2); $hbd1=number_format($hbd/$i,2); $ldg1=number_format($ldg/$i,2); $prf1=number_format($prf/$i,2);

						include(HTML_DIR . 'qhse/competencia_baja/general.php');
					$HTML = '<div class="row">
			                <div class="col-lg-12">
			                    <h1 class="page-header">Resultados Obtenidos Área ('.$_area[$area]["area"].')</h1>
			                </div>
			                <!-- /.col-lg-12 -->
			            </div>
					   <div class="col-lg-12">
			                    <div class="panel panel-default">
			                        <div class="panel-heading ">
					   <table class="table table-striped"><thead><tr>
					   <th>COMPETENCIA </th>
		               <th>CALIFICACIÓN</th>

		               </tr></thead>
		               </div>
		               <div class="panel-body">
		               <tbody>
		               <tr><td>COMUNICACIÓN</td><td>'.$com1.'</td></tr>
	                    <tr><td>EFECTIVIDAD</td><td>'.$eft1.'</td></tr>
	                    <tr><td>HABILIDAD COGNITIVA</td><td>'.$hbd1.'</td></tr>
	                    <tr><td>LIDERAZGO</td><td>'.$ldg1.'</td></tr>
	                    <tr><td>PROFESIONALISMO</td><td>'.$prf1.'</td></tr>
	                    <tr><td>ETICA</td><td>'.$etc1.'</td></tr>
	                    </tbody></table></div></div></div>
					   <div id="page-wrapper">

			            <div class="row">
			                <div class="col-lg-12">
			                    <div class="panel panel-default">
			                        <div class="panel-heading">
			                            Resultados graficos de la evaluación de desempeño
			                        </div>
			                        <div class="panel-body">
			                            <div id="myfirstchart" style="height: 250px;"></div>
			                        </div>
			                    </div>
			                </div>
			            </div>
			           </div>


			            <div class="row">
			                <div class="col-lg-12">
			                    <div class="panel panel-default">
			                        <div class="alert alert-danger" role="alert">
			                            PUNTAJE MÁS BAJO DE '.strtoupper($_area[$area]["area"]).'
			                        </div>
			                        <div class="panel-body">
			                            '.$MEJORA.'
			                        </div>
			                    </div>
			            </div>
			           </div>
			            ';
					} else {
					$HTML = '<div class="alert alert-dismissible alert-info"><strong>INFORMACIÓN: </strong> Todavía no existe ningún resultado.</div>';
					}
					echo $HTML;
					?>
					<div id="page-wrapper">
						<div class="row">
			                <div class="col-lg-12">
			                    <div class="panel panel-default">
			                        <div class="panel-heading">
			                            Usuarios del área de <?php echo $_area[$area]["area"]; ?>
			                        </div>
			                        <div class="panel-body">
			  	<?php
				  	$db = new Conexion();
				  	$e = $_users[$_SESSION['app_id']]['area'];
				  	$id = $_users[$_SESSION['app_id']]['id'];
				  	$sql = $db->query("SELECT * FROM users WHERE area = '$e' AND id != '$id';");
					if($row = $db->recorrer($sql)){
						do{
					   		$usr = $row["id"];
					   	echo'<a class="list-group-item" href="?view=gerente_de_personal&usr='.$usr.'&mode=resultados&id='.$history.'" style="margin: 0 auto;">'.strtoupper($row["nombres"]).' '.strtoupper($row["apellidos"])."\r\n";
					   	}while ($row = $db->recorrer($sql));
					   	 echo "</a> \r\n";
					}else{
						echo '<div class="alert alert-dismissible alert-info"><strong>INFORMACIÓN: </strong> No hay usuarios.</div>';
					}
				?></div></div></div></div></div>
			  	</div>
			  </div>
		   </div>
		</div>
	   </div>
	</section>


	<?php include(HTML_DIR . 'overall/footer.php'); ?>
	<script type="text/javascript">
		new Morris.Bar({

		  element: 'myfirstchart',

		  data: [
		  {y: 'Comunicación', a: <?php echo $com1; ?>},
		  {y: 'Efectividad', a: <?php echo $eft1; ?>},
		  {y: 'H Cognitiva', a: <?php echo $hbd1; ?>},
		  {y: 'Liderazgo', a: <?php echo $ldg1; ?>},
		  {y: 'Profesional', a: <?php echo $prf1; ?>},
		  {y: 'Etica', a: <?php echo $etc1; ?>},],
        xkey: 'y',
        ykeys: ['a'],
        labels: ['Calificación '],
        hideHover: 'auto',
        resize: true
		});
	</script>
 </body>
</html>
