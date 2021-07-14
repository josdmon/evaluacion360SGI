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
		        <a class="mbr-buttons__btn btn btn-danger" href="?view=gerente"> HISTORIAL EVALUACIÒN</a>
		      </li></ul></div>
		      <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
		        <a class="mbr-buttons__btn btn btn-danger active" href="?view=gerente&mode=resultado_general&id=<?= $history; ?>">RESULTADO GENERAL</a>
		      </li></ul></div>

          <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
            <a class="mbr-buttons__btn btn btn-danger" href="?view=gerente&mode=areas&id=<?= $history; ?>">RESULTADOS POR ÁREA</a>
          </li></ul></div>
          <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
            <a class="mbr-buttons__btn btn btn-danger" href="?view=gerente&mode=usuario_general&id=<?= $history; ?>">USUARIOS</a>
          </li></ul></div>
        </div>

		     <ol class="breadcrumb">
		       <li><a href="?view=index"><i class="fa fa-tags"></i> Evaluación</a></li>
		     </ol>
		</div>
		<div class="row categorias_con_foros">
		   <div class="col-sm-12">
		      <div class="row titulo_categoria">Gestión de Resultados</div>
		       <div class="row cajas">
			  	<div class="list-group col-md-12">
			  	<?php
				  	$db = new Conexion();
					$sqll = $db->query("SELECT * FROM resultadosevaluacion WHERE comunicacion >= 1 AND historial_evaluacion = $history;");
          $sql3 = $db->query("SELECT * FROM resultadosevaluacion WHERE comunicacion >=1 AND historial_evaluacion = $history AND t_operativo !=0;");
          $sql4 = $db->query("SELECT * FROM resultadosevaluacion WHERE comunicacion >=1 AND historial_evaluacion = $history AND gerencia >=1;");

					if ($row = $db->recorrer($sqll)){
					    $i=0; $com=0; $eft=0; $etc=0; $hbd=0; $ldg=0; $prf=0;
					    $grc=0; $m_grc=0; $m_md=0; $t=0; $g=0; $t_op=0;
					    do {
					   		$i++;
					   		$com+=$row["comunicacion"];
					   		$eft+=$row["efectividad"];
					   		$etc+=$row["etica"];
					   		$hbd+=$row["habilidad"];
					   		$ldg+=$row["liderasgo"];
					   		$prf+=$row["profesional"];
					   } while ($row = $db->recorrer($sqll));

             do{

               $t++;
               $t_op+=$row["t_operativo"];


             } while ($row = $db->recorrer($sql3));
             do{
               $g++;
               $grc+=$row["gerencia"];
               $m_md+=$row["m_medio"];

             } while ($row = $db->recorrer($sql4));
             $t=$t-1;
             $g=$g-1;
					  	$com3=number_format($com/$i,2); $eft3=number_format($eft/$i,2); $etc3=number_format($etc/$i,2); $hbd3=number_format($hbd/$i,2); $ldg3=number_format($ldg/$i,2); $prf3=number_format($prf/$i,2); $t_op3=number_format($t_op/$t,2);
              $grc3=number_format($grc/$g,2); $m_md3=number_format($m_md/$g,2);

					   $HTML = '<div class="row">
			                <div class="col-lg-12">
			                    <h1 class="page-header">Resultados Obtenidos (TODA LA COMPAÑIA)</h1>
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
		               	<tr><td>COMUNICACIÓN</td><td>'.$com3.'</td></tr>
	                    <tr><td>EFECTIVIDAD</td><td>'.$eft3.'</td></tr>
	                    <tr><td>HABILIDAD COGNITIVA</td><td>'.$hbd3.'</td></tr>
	                    <tr><td>LIDERAZGO</td><td>'.$ldg3.'</td></tr>
	                    <tr><td>PROFESIONALISMO</td><td>'.$prf3.'</td></tr>
	                    <tr><td>ETICA</td><td>'.$etc3.'</td></tr>
                      <tr><td>TRABAJADOR OPERATIVO</td><td>'.$t_op3.'</td></tr>
                      <tr><td>GERENCIA</td><td>'.$grc3.'</td></tr>
                      <tr><td>MANDO MEDIO</td><td>'.$m_md3.'</td></tr>';
	                    include(HTML_DIR . 'qhse/competencia_baja/general_gr.php');

					   $HTML .= '</tbody></table></div></div></div>
					   <div id="page-wrapper">

			            <!-- /.row -->
			            <div class="row">

			                <div class="col-lg-12">
			                    <div class="panel panel-default">
			                        <div class="panel-heading">
			                            Resultados de la evaluación de desempeño 360
			                        </div>
			                        <div class="panel-body">
			                            <div id="general" style="height: 250px;"></div>
			                        </div>
			                    </div>
			                </div>
			            </div>
			           </div>
			            <div class="col-lg-12">
			                    <div class="panel panel-default">
			                        <div class="alert alert-danger" role="alert">
			                            PUNTAJE MÁS BAJO ENTRE LAS COMPETENCIAS
			                        </div>
			                        <div class="panel-body">
			                            '.$MEJORA.'
			                        </div>
			                    </div>
			            </div>';
					} else {
					$HTML = '<div class="alert alert-dismissible alert-info"><strong>INFORMACIÓN: </strong> Todavía no existe ningún resultado.</div>';
					}
					echo $HTML;
					?>
			  	<?php
				  	$sql = $db->query("SELECT * FROM resultadosevaluacion WHERE categoria = 3 AND comunicacion >=1 AND historial_evaluacion = $history;");

					if ($row = $db->recorrer($sql)){
					    $i=0; $com=0; $eft=0; $etc=0; $hbd=0; $ldg=0; $prf=0;
					    $grc=0; $m_grc=0; $m_md=0; $t_op=0;
					    do {
					   		$i++;
					   		$com+=$row["comunicacion"];
					   		$eft+=$row["efectividad"];
					   		$etc+=$row["etica"];
					   		$hbd+=$row["habilidad"];
					   		$ldg+=$row["liderasgo"];
					   		$prf+=$row["profesional"];
					   		$t_op+=$row["t_operativo"];
					   } while ($row = $db->recorrer($sql));
					  	$com11=$com/$i; $eft11=$eft/$i; $etc11=$etc/$i; $hbd11=$hbd/$i; $ldg11=$ldg/$i; $prf11=$prf/$i;
						$t_op11=$t_op/$i;
						$com1 = number_format($com11,2); $eft1 = number_format($eft11,2); $hbd1 = number_format($hbd11,2); $ldg1 = number_format($ldg11,2); $prf1 = number_format($prf11,2); $etc1 = number_format($etc11,2); $t_op1 = number_format($t_op11,2);

					   $HTML = '<div class="row">
			                <div class="col-lg-12">
			                    <h1 class="page-header">Resultados Obtenidos (TRABAJADORES OPERATIVOS)</h1>
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
	                    <tr><td>HSE TRABAJADOR OPERATIVO</td><td>'.$t_op1.'</td></tr>';

	                    include(HTML_DIR . 'qhse/competencia_baja/trabajadorop.php');

					   $HTML .= '</tbody></table></div></div></div>
					   <div id="page-wrapper">

			            <!-- /.row -->
			            <div class="row">

			                <div class="col-lg-12">
			                    <div class="panel panel-default">
			                        <div class="panel-heading">
			                            Resultados de la evaluación de desempeño 360
			                        </div>
			                        <div class="panel-body">
			                            <div id="myfirstchart" style="height: 250px;"></div>
			                        </div>
			                    </div>
			                </div>
			            </div>
			           </div>
			            <div class="col-lg-12">
			                    <div class="panel panel-default">
			                        <div class="alert alert-danger" role="alert">
			                            PUNTAJE MÁS BAJO ENTRE LAS COMPETENCIAS
			                        </div>
			                        <div class="panel-body">
			                            '.$MEJORA.'
			                        </div>
			                    </div>
			            </div>';
					} else {
					$HTML = '<div class="alert alert-dismissible alert-info"><strong>INFORMACIÓN: </strong> Todavía no existe ningún resultado.</div>';
					}
					echo $HTML;
					?>
					<?php
				  	$sql2 = $db->query("SELECT * FROM resultadosevaluacion WHERE categoria = 2 AND comunicacion >=1 AND historial_evaluacion = $history;");
					if ($rows = $db->recorrer($sql2)){
					    $i=0; $com=0; $eft=0; $etc=0; $hbd=0; $ldg=0; $prf=0;
					    $grc=0; $m_md=0;
					    do {
					   		$i++;
					   		$com+=$rows["comunicacion"];
					   		$eft+=$rows["efectividad"];
					   		$etc+=$rows["etica"];
					   		$hbd+=$rows["habilidad"];
					   		$ldg+=$rows["liderasgo"];
					   		$prf+=$rows["profesional"];
					   		$grc+=$rows["gerencia"];
					   		$m_md+=$rows["m_medio"];
					   } while ($rows = $db->recorrer($sql2));
					  	$com2=number_format($com/$i,2); $eft2=number_format($eft/$i,2); $etc2=number_format($etc/$i,2); $hbd2=number_format($hbd/$i,2); $ldg2=number_format($ldg/$i,2); $prf2=number_format($prf/$i,2);
						$grc2=number_format($grc/$i,2); $m_md2=number_format($m_md/$i,2);
					   $HTML = '<div class="row">
			                <div class="col-lg-12">
			                    <h1 class="page-header">Resultados Obtenidos (MANDOS MEDIOS)</h1>
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
		               <tr><td>COMUNICACIÓN</td><td>'.$com2.'</td></tr>
	                    <tr><td>EFECTIVIDAD</td><td>'.$eft2.'</td></tr>
	                    <tr><td>HABILIDAD COGNITIVA</td><td>'.$hbd2.'</td></tr>
	                    <tr><td>LIDERAZGO</td><td>'.$ldg2.'</td></tr>
	                    <tr><td>PROFESIONALISMO</td><td>'.$prf2.'</td></tr>
	                    <tr><td>ETICA</td><td>'.$etc2.'</td></tr>
	                    <tr><td>GERENCIA</td><td>'.$grc2.'</td></tr>
	                    <tr><td>HSQ MANDO MEDIO</td><td>'.$m_md2.'</td></tr>';

	                    include(HTML_DIR . 'qhse/competencia_baja/mando_m_g.php');

					   $HTML .= '</tbody></table></div></div></div>
					   <div id="page-wrapper">

			            <!-- /.row -->
			            <div class="row">

			                <div class="col-lg-12">
			                    <div class="panel panel-default">
			                        <div class="panel-heading">
			                            Resultados de la evaluación de desempeño 360
			                        </div>
			                        <div class="panel-body">
			                            <div id="medios" style="height: 250px;"></div>
			                        </div>
			                    </div>
			                </div>
			            </div>
			           </div>
			            <div class="col-lg-12">
			                    <div class="panel panel-default">
			                        <div class="alert alert-danger" role="alert">
			                            PUNTAJE MÁS BAJO ENTRE LAS COMPETENCIAS
			                        </div>
			                        <div class="panel-body">
			                            '.$MEJORA.'
			                        </div>
			                    </div>
			            </div>';

					} else {
					$HTML = '<div class="alert alert-dismissible alert-info"><strong>INFORMACIÓN: </strong> Todavía no existe ningún resultado.</div>';
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
	<script type="text/javascript">
		new Morris.Bar({

		  element: 'medios',
		  data: [
		  {y: 'Comunicación', a: <?php echo $com2; ?>},
		  {y: 'Efectividad', a: <?php echo $eft2; ?>},
		  {y: 'H. Cognitiva', a: <?php echo $hbd2; ?>},
		  {y: 'Liderasgo', a: <?php echo $ldg2; ?>},
		  {y: 'Profesional', a: <?php echo $prf2; ?>},
		  {y: 'Etica', a: <?php echo $etc2; ?>},
		  {y: 'Gerencia', a: <?php echo $grc2; ?>},
		  {y: 'HSQ M. medio', a: <?php echo $m_md2; ?>},
		  ],
        xkey: 'y',
        ykeys: ['a'],
        labels: ['Calificación'],
        hideHover: 'auto',
        resize: true
		});
		new Morris.Bar({

		  element: 'general',
		  data: [
		  {y: 'Comunicación', a: <?php echo $com3; ?>},
		  {y: 'Efectividad', a: <?php echo $eft3; ?>},
		  {y: 'H. Cognitiva', a: <?php echo $hbd3; ?>},
		  {y: 'Liderasgo', a: <?php echo $ldg3; ?>},
		  {y: 'Profesional', a: <?php echo $prf3; ?>},
		  {y: 'Etica', a: <?php echo $etc3; ?>},
      {y: 'HSQ T. Operat.', a: <?php echo $t_op3; ?>},
      {y: 'Gerencial', a: <?php echo $grc3; ?>},
      {y: 'HSQ M. Medio', a: <?php echo $m_md3; ?>},
		  ],
        xkey: 'y',
        ykeys: ['a'],
        labels: ['Calificación'],
        hideHover: 'auto',
        resize: true
		});
	</script>
	<script type="text/javascript">
		new Morris.Bar({

		  element: 'myfirstchart',
		  data: [
		  {y: 'Comunicación', a: <?php echo $com1; ?>},
		  {y: 'Efectividad', a: <?php echo $eft1; ?>},
		  {y: 'H. Cognitiva', a: <?php echo $hbd1; ?>},
		  {y: 'Liderasgo', a: <?php echo $ldg1; ?>},
		  {y: 'Profesional', a: <?php echo $prf1; ?>},
		  {y: 'Etica', a: <?php echo $etc1; ?>},
		  {y: 'HSQ T. Operativo', a: <?php echo $t_op1; ?>},
		  ],
        xkey: 'y',
        ykeys: ['a'],
        labels: ['Calificación'],
        hideHover: 'auto',
        resize: true
		});
	</script>
</body>
</html>
