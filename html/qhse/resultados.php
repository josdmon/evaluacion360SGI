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
		      <strong>Completado!</strong> el archivo fue enviado con exito.
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
		    <?php
		    if(isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['permisos'] == 3){
		    echo '<div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
		        <a class="mbr-buttons__btn btn btn-danger  "href="?view=gerente_de_personal">PUNTAJES EMPLEADOS</a>
		      </li></ul></div>
          <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
  		        <a class="mbr-buttons__btn btn btn-danger  "href="?view=gerente_de_personal&mode=plan_accion&id='.$history.'">PLAN ACCIÓN EMPLEADOS</a>
  		      </li></ul></div>';
		  	}elseif(isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['area'] == 5){
		  	echo '<div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
	              <a class="mbr-buttons__btn btn btn-danger" href="?view=evaluacion">EVALUACION</a>
	            </li></ul></div>';
		  	}
		    ?>
		      <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
		        <a class="mbr-buttons__btn btn btn-danger active" href="?view=evaluador">RESULTADOS</a>
		      </li></ul></div>

	          <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
	            <a class="mbr-buttons__btn btn btn-danger" href="?view=usuario_evalua&mode=evaluacion">USUARIO A EVALUAR</a>
	          </li></ul></div>
	        </div>

          <ol class="breadcrumb">
            <li><a href="?view=hseq&mode=evaluacion"><i class="fa fa-comments"></i> Evaluación</a></li>
          </ol>
		</div>
		<div class="row categorias_con_foros">
		   <div class="col-sm-12">
		      <div class="row titulo_categoria">Gestión de Resultados</div>
		       <div class="row cajas">
			  	<div class="list-group col-md-12">
			  	<?php
				  	$db = new Conexion();

					$e = $_users[$_SESSION['app_id']]['id'];
					$sql = $db->query("SELECT * FROM resultadosevaluacion WHERE id_usuario = '$e' AND comunicacion >=1 AND historial_evaluacion = $history;");
					$sql2 = $db->query("SELECT * FROM resultadosevaluacion WHERE id_usuario = '$e' AND evaluador = '$e' AND historial_evaluacion = $history;");
					if ($row = $db->recorrer($sql)){
					    $i=0; $com=0; $eft=0; $etc=0; $hbd=0; $ldg=0; $prf=0;
					    $grc=0; $m_grc=0; $m_md=0; $m_hse=0; $t_op=0;
					    do {
					   		$i++;
					   		$com+=$row["comunicacion"];
					   		$eft+=$row["efectividad"];
					   		$etc+=$row["etica"];
					   		$hbd+=$row["habilidad"];
					   		$ldg+=$row["liderasgo"];
					   		$prf+=$row["profesional"];
					   		$p_ab1=$row["p_abierta1"];
					   		$p_ab2=$row["p_abierta2"];
					   		$p_ab3=$row["p_abierta3"];
					   		if($p_ab1 != ""){
					   		echo  '<div class="col-lg-12">
			                    <div class="panel panel-default">
			                        <div class="panel-heading">
			                            PREGUNTAS ABIERTAS
			                        </div>
			                        <div class="panel-body">
			                            <p><big><b>Lo que esperan de usted: </b></big>'.$p_ab1.'</p><br>
			                            <p><big><b>Lo que no esperan de usted: </b></big>'.$p_ab2.'</p><br>
			                            <p><big><b>Comentarios adicionales: </b></big>'.$p_ab3.'</p><br>
			                        </div>
			                    </div>
			                </div>';
			            	}
					   		if ($_users[$_SESSION['app_id']]['categorias'] == 1) {
					   			$grc+=$row["gerencia"];
					   			$m_grc+=$row["m_gerencial"];
					   		}elseif ($_users[$_SESSION['app_id']]['categorias'] == 2) {
					   			$grc+=$row["gerencia"];
					   			$m_md+=$row["m_medio"];
					   		}elseif ($_users[$_SESSION['app_id']]['categorias'] == 3) {
					   			$t_op+=$row["t_operativo"];
					   		}elseif ($_users[$_SESSION['app_id']]['categorias'] == 4) {
					   			$grc+=$row["gerencia"];
					   			$m_hse+=$row["m_hse"];
					   		}
					   } while ($row = $db->recorrer($sql));

					   if ($aut = $db->recorrer($sql2)) {

				   			$com2=number_format($aut["comunicacion"],2);
				   			$eft2=number_format($aut["efectividad"],2);
				   			$etc2=number_format($aut["etica"],2);
				   			$hbd2=number_format($aut["habilidad"],2);
				   			$ldg2=number_format($aut["liderasgo"],2);
				   			$prf2=number_format($aut["profesional"],2);
					   		if ($_users[$_SESSION['app_id']]['categorias'] == 1) {
					   			$grc2=number_format($aut["gerencia"],2);
					   			$m_grc2=number_format($aut["m_gerencial"],2);
					   		}elseif ($_users[$_SESSION['app_id']]['categorias'] == 2) {
					   			$grc2=number_format($aut["gerencia"],2);
					   			$m_md2=number_format($aut["m_medio"],2);
					   		}elseif ($_users[$_SESSION['app_id']]['categorias'] == 4) {
					   			$grc2=number_format($aut["gerencia"],2);
					   			$m_hse2=number_format($aut["m_hse"],2);
					   		}elseif ($_users[$_SESSION['app_id']]['categorias'] == 3) {
					   			$t_op2=number_format($aut["t_operativo"],2);
					   		}
						}else{
							$com2=0; $eft2=0; $etc2=0; $hbd2=0; $ldg2=0; $prf2=0; $grc2=0; $m_grc2=0; $grc2=0; $m_md2=0; $m_hse2=0; $t_op2=0;
						}
            $db->liberar($sql);
            $db->liberar($sql2);
            $db->close();

						$com1=number_format($com/$i,2); $eft1=number_format($eft/$i,2); $etc1=number_format($etc/$i,2); $hbd1=number_format($hbd/$i,2); $ldg1=number_format($ldg/$i,2); $prf1=number_format($prf/$i,2);
						$grc1=number_format($grc/$i,2); $m_grc1=number_format($m_grc/$i,2); $m_md1=number_format($m_md/$i,2); $m_hse1=number_format($m_hse/$i,2); $t_op1=number_format($t_op/$i,2);
					   $HTML = '<div class="row">
			                <div class="col-lg-12">
			                    <h1 class="page-header">Resultados Obtenidos (Gráficos)</h1>
			                </div>
			                <!-- /.col-lg-12 -->
			            </div>
					   <div class="col-lg-12">
			                    <div class="panel panel-default">
			                        <div class="panel-heading ">
					   <table class="table table-striped"><thead><tr>
					   <th>COMPETENCIA EVALUADA</th>
		               <th>CALIFICACIÓN 360</th>
		               <th>AUTOEVALUACIÓN</th>
		               </tr></thead>
		               </div>
		               <div class="panel-body">
		               <tbody>
		               	<tr><td>COMUNICACIÓN</td><td>'.$com1.'</td><td>'.$com2.'</td></tr>
	                    <tr><td>EFECTIVIDAD</td><td>'.$eft1.'</td><td>'.$eft2.'</td></tr>
	                    <tr><td>HABILIDAD COGNITIVA</td><td>'.$hbd1.'</td><td>'.$hbd2.'</td></tr>
	                    <tr><td>LIDERAZGO</td><td>'.$ldg1.'</td><td>'.$ldg2.'</td></tr>
	                    <tr><td>PROFESIONALISMO</td><td>'.$prf1.'</td><td>'.$prf2.'</td></tr>
	                    <tr><td>ETICA</td><td>'.$etc1.'</td><td>'.$etc2.'</td></tr>';
					   if ($_users[$_SESSION['app_id']]['categorias'] == 1) {
				   			$HTML .=
				   			'<tr><td>GERENCIA</td><td>'.$grc1.'</td><td>'.$grc2.'</td></tr>
		                    <tr><td>HSQ MANDO GERENCIAL</td><td>'.$m_grc1.'</td><td>'.$m_grc2.'</td></tr>';
		                    include(HTML_DIR . 'qhse/competencia_baja/mando_g.php');
		                }elseif ($_users[$_SESSION['app_id']]['categorias'] == 2) {
				   			$HTML .=
				   			'<tr><td>GERENCIA</td><td>'.$grc1.'</td><td>'.$grc2.'</td></tr>
		                    <tr><td>HSE MANDO MEDIO</td><td>'.$m_md1.'</td><td>'.$m_md2.'</td></tr>';
		                    include(HTML_DIR . 'qhse/competencia_baja/mando_m.php');
				   		}elseif ($_users[$_SESSION['app_id']]['categorias'] == 4) {
				   			$HTML .=
				   			'<tr><td>GERENCIA</td><td>'.$grc1.'</td><td>'.$grc2.'</td></tr>
		                    <tr><td>MANDO HSE</td><td>'.$m_hse1.'</td><td>'.$m_hse2.'</td></tr>';
		                    include(HTML_DIR . 'qhse/competencia_baja/mando_m.php');
				   		}elseif ($_users[$_SESSION['app_id']]['categorias'] == 3) {
				   			$HTML .=
				   			'<tr><td>HSE TRABAJADOR OPERATIVO</td><td>'.$t_op1.'</td><td>'.$t_op2.'</td></tr>';
				   			include(HTML_DIR . 'qhse/competencia_baja/trabajadorop.php');
				   		}

					   $HTML .= '</tbody></table></div></div></div>
					   <div id="page-wrapper">

			            <!-- /.row -->
			            <div class="row">

			                <div class="col-lg-12">
			                    <div class="panel panel-default">
			                        <div class="panel-heading">
			                            Resultados de la evaluación de desempeño 360 Vs Autoevaluación
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
			                            PUNTAJE MÁS BAJO ENTRE TUS COMPETENCIAS
			                        </div>
			                        <div class="panel-body">
			                            '.$MEJORA.'
			                        </div>
			                    </div>
			            </div>';
                  $limite = 3.5;
                  if ($com1 < $limite || $eft1 < $limite || $hbd1 < $limite || $ldg1 < $limite || $prf1 < $limite || $etc1 < $limite) {
                      $HTML .= '<div class="col-lg-12">
    		                    <div class="panel panel-default">
    		                        <div class="alert alert-danger" role="alert">
    		                            <p><b>PLAN DE ACCÓN</b></p>
    		                        </div>
    		                        <div class="panel-body">
                                <p>
                                  <b>TODAS LAS COMPETENCIAS QUE ESTÉN POR DEBAJO DE 3.5 DEBERÁN SER MEJORADAS POR EL EMPLEADO</b><br/>
                                  <b>NOTA 1:</b>  la actividad escogida será objeto de seguimiento por parte de la persona que es su Jefe de área.
                                  Esta persona plasmará el cumplimiento o incumplimiento de sus compromisos de mejora. La revisión
                                  se hará cada 3 meses. La empresa podrá tomar medidas respecto a su cumplimiento o incumplimiento,
                                  lo cual puede afectar directamente su vinculación con la misma, de manera positiva o negativa.
                                  Depende de usted proceder de manera ética y apropiada.
                                </p>
    		                           ';

                      $HTML .= ($com1 < $limite) ? 'Entre las competencias más bajas esta Comunicación con un puntaje de '.$com1.' <br/>Por ello es necesario realizar uno de los siguientes cursos en línea.<br/><a  target=\"_blank\" href="https://bit.ly/2uDWote">
                        <span class="glyphicon glyphicon-list-alt"> Link 1, El proceso de aprendizaje </span>
                      </a><br/><a  target=\"_blank\"href="https://bit.ly/2Wr36Pl">
                        <span class="glyphicon glyphicon-list-alt"> Link 2, Comunicación efectiva para el líder actual,</span>
                      </a><br/><br/>':'';
                      $HTML .= ($eft1 < $limite) ? 'Entre las competencias más bajas esta Efectividad con un puntaje de '.$eft1.' <br/>Por ello es necesario realizar uno de los siguientes cursos en línea.<br/>
                      <a  target=\"_blank\" href="https://bit.ly/2V68pDo">
                        <span class="glyphicon glyphicon-list-alt"> Link 1, Introducción a la Gestión para Resultados en el Desarrollo </span>
                      </a><br/>
                      <a  target=\"_blank\" href="https://bit.ly/2Wr36Pl">
                        <span class="glyphicon glyphicon-list-alt"> Link 2, Comunicación efectiva para el líder actual </span>
                      </a><br/>
                      <a  target=\"_blank\" href="https://bit.ly/2OyFs0b">
                        <span class="glyphicon glyphicon-list-alt"> Link 3, Potencia tu mente </span>
                      </a><br/>
                      <a  target=\"_blank\" href="https://bit.ly/2CMSCT1">
                        <span class="glyphicon glyphicon-list-alt"> Link 4, Aprender </span>
                      </a><br/><br/>':'';
                      $HTML .= ($hbd1 < $limite) ? 'Entre las competencias más bajas esta Habilidad Cognitiva con un puntaje de '.$hbd1.' <br/>Por ello es necesario realizar uno de los siguientes cursos en línea.<br/>
                      <a  target=\"_blank\" href="https://bit.ly/2zhyQzw">
                        <span class="glyphicon glyphicon-list-alt"> Link 1, Como diagnosticar mis competencias de innovación </span>
                      </a><br/>
                      <a  target=\"_blank\" href="https://bit.ly/2KNzoiu">
                        <span class="glyphicon glyphicon-list-alt"> Link 2, Creatividad y Pensamiento Lateral </span>
                      </a><br/>
                      <a  target=\"_blank\" href="https://bit.ly/2OG1ePL">
                        <span class="glyphicon glyphicon-list-alt"> Link 3, Aprendizaje Basado en Problemas </span>
                      </a><br/>
                      <a  target=\"_blank\" href="https://bit.ly/2U79vCx">
                        <span class="glyphicon glyphicon-list-alt"> Link 4, ¿Qué es el aprendizaje y servicio? </span>
                      </a><br/><br/>':'';
                      $HTML .= ($ldg1 < $limite) ? 'Entre las competencias más bajas esta Liderasgo con un puntaje de '.$ldg1.' <br/>Por ello es necesario realizar uno de los siguientes cursos en línea.<br/>
                      <a  target=\"_blank\" href="https://bit.ly/2FGVNMH">
                        <span class="glyphicon glyphicon-list-alt"> Link 1, Curso Gratuito Curso de Análisis de Problemas y Toma de Decisiones </span>
                      </a><br/>
                      <a  target=\"_blank\" href="https://bit.ly/2Wr36Pl">
                        <span class="glyphicon glyphicon-list-alt"> Link 2, Comunicación efectiva para el líder actual </span>
                      </a><br/>
                      <a  target=\"_blank\" href="https://bit.ly/2WK4AV5">
                        <span class="glyphicon glyphicon-list-alt"> Link 3, Como convertirse en un líder exitoso </span>
                      </a><br/>
                      <a  target=\"_blank\" href="https://bit.ly/2y6lTrF">
                        <span class="glyphicon glyphicon-list-alt"> Link 4, Liderazgo para Mandos Intermedios </span>
                      </a><br/><br/>':'';
                      $HTML .= ($prf1 < $limite) ? 'Entre las competencias más bajas esta Efectividad con un puntaje de '.$prf1.' <br/>Por ello es necesario realizar uno de los siguientes cursos en línea.<br/><a  target=\"_blank\" href="https://bit.ly/2JTvoAx">
                        <span class="glyphicon glyphicon-list-alt"> Link 1, Gestión participativa: motivación y liderazgo organizacional </span>
                      </a><br/>
                      <a  target=\"_blank\" href="https://bit.ly/2I4kdT2">
                        <span class="glyphicon glyphicon-list-alt"> Link 2, Estrategia y estilos de negociación </span>
                      </a><br/><br/>':'';
                      $HTML .= ($etc1 < $limite) ? 'Entre las competencias más bajas esta Efectividad con un puntaje de '.$etc1.' <br/>Por ello es necesario realizar uno de los siguientes cursos en línea.<br/>
                      <a  target=\"_blank\" href="https://bit.ly/2I58L9C">
                        <span class="glyphicon glyphicon-list-alt"> Link 1, Historia de la Ética </span>
                      </a><br/>
                      <a  target=\"_blank\" href="https://bit.ly/2CPnXnZ">
                        <span class="glyphicon glyphicon-list-alt"> Link 2, Ética Profesional </span>
                      </a><br/>
                      <a  target=\"_blank\" href="https://bit.ly/2PZtkso">
                        <span class="glyphicon glyphicon-list-alt"> Link 3, Ética de la Felicidad </span>
                      </a><br/><br/>':'';
                    if ($_users[$_SESSION['app_id']]['categorias'] == 2) {
                      $HTML .= ($m_md1 < $limite) ? 'Entre las competencias más bajas esta HSE Mando Medio con un puntaje de '.$m_md1.' <br/>Por ello es necesario realizar uno de los siguientes cursos en línea.<br/><a  target=\"_blank\" href="http://doao.lldmsystems.org/Account/Forgot">
                        <span class="glyphicon glyphicon-list-alt"> Este refuerzo es para HSE Mando Medio </span>
                      </a><br/><br/>':'';
                      $HTML .= ($grc1 < $limite) ? 'Entre las competencias más bajas esta Gerencia con un puntaje de '.$grc1.' <br/>Por ello es necesario realizar uno de los siguientes cursos en línea.<br/>
                      <a  target=\"_blank\" href="https://bit.ly/2FGVNMH">
                        <span class="glyphicon glyphicon-list-alt"> Link 1, Curso Gratuito Curso de Análisis de Problemas y Toma de Decisiones </span>
                      </a><br/><br/>':'';

                    }if ($_users[$_SESSION['app_id']]['categorias'] == 3) {
                      $HTML .= ($t_op1 < $limite) ? 'Entre las competencias más bajas esta HSE Trabajador Operativo con un puntaje de '.$t_op1.' <br/>Por ello es necesario realizar uno de los siguientes cursos en línea.<br/><a  target=\"_blank\" href="http://doao.lldmsystems.org/Account/Forgot">
                        <span class="glyphicon glyphicon-list-alt"> Este refuerzo es para HSE Trabajador Operativo </span>
                      </a><br/><br/>':'';
                    }if ($_users[$_SESSION['app_id']]['categorias'] == 1) {
                      $HTML .= ($m_grc1 < $limite) ? 'Entre las competencias más bajas esta HSE Mando Gerencial con un puntaje de '.$m_grc1.' <br/>Por ello es necesario realizar uno de los siguientes cursos en línea.<br/><a  target=\"_blank\" href="http://doao.lldmsystems.org/Account/Forgot">
                        <span class="glyphicon glyphicon-list-alt"> Este refuerzo es para HSE Mando Gerencial </span>
                      </a><br/><br/>':'';
                      $HTML .= ($grc1 < $limite) ? 'Entre las competencias más bajas esta Gerencia con un puntaje de '.$grc1.' <br/>Por ello es necesario realizar uno de los siguientes cursos en línea.<br/><a  target=\"_blank\" href="http://doao.lldmsystems.org/Account/Forgot">
                        <span class="glyphicon glyphicon-list-alt"> Este refuerzo es para Gerencia </span>
                      </a><br/><br/>':'';
                    }
                    $semanaSiguiente = (92 * 24 * 60 * 60);
                    $dia_db=strtotime($_historialevaluacion[$history]["fecha"]);
                    $s = $semanaSiguiente + $dia_db;
                    $ss = date('Y-m-d', ($dia_db+$semanaSiguiente));
                      $HTML .='<p><b>NOTA 2:</b> los links a los cursos propuestos son una guía inicial. Sin embargo el Jefe inmediato y la persona que debe aplicar el “Plan de Mejora” podrán establecer por mutuo acuerdo otros cursos gratuitos virtuales que puedan ser tomados para adquirir los conocimientos y desarrollar las habilidades y comportamientos necesarios que le permitan al colaborador mejorar su competencia más débil. Estos cursos virtuales gratuitos implican que cada persona deba crear un perfil en cada plataforma elegida para hacer el curso respectivo. El objeto de esta consultoría no se relaciona con la creación de dichos perfiles, para lo cual cada empleado o colaborador deberá recurrir a la ayuda y asistencia técnica que el área de TICs de SGI s.a.s. puede brindarle.</p><br/><br/><p><b>NOTA 3:</b> Para dar con el seguimiento del curso se deberá subir el diploma del curso, Esto se realizara antes de la siguiente fecha <b>'. $ss.'</b>.</p><br/><br/>

                      <form class="form-horizontal" action="?view=plan_accion_hseq&mode=add_plan_accion" method="POST" enctype="multipart/form-data">
                      <input type="hidden" name="id" value="'.$_SESSION['app_id'].'">
                      <input type="hidden" name="area" value="'.$_users[$_SESSION['app_id']]['area'].'">
                      <input type="hidden" name="historia_evaluacion" value="'.$history.'">
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Selección de PDF</label>
                          <div class="col-lg-10">
                            <input type="file" class="filestyle" name="gerencia">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2">
                            <button type="reset" class="btn btn-default">Resetear</button>
                            <button type="submit" class="btn btn-primary">Subir</button>
                          </div>
                        </div>
                      </form>

    		                        </div>
    		                    </div>
    			            </div>';
                    }else{
                       if ($_users[$_SESSION['app_id']]['categorias'] == 2) {
                         if($m_md1 < $limite || $grc1 < $limite){
                         $HTML .= '<div class="col-lg-12">
         		                    <div class="panel panel-default">
         		                        <div class="alert alert-danger" role="alert">
         		                            <p><b>PLAN DE ACCÓN</b></p>
         		                        </div>
         		                        <div class="panel-body">
                                     <p>
                                       <b>TODAS LAS COMPETENCIAS QUE ESTÉN POR DEBAJO DE 3.5 DEBERÁN SER MEJORADAS POR EL EMPLEADO</b><br/>
                                       <b>NOTA 1:</b>  la actividad escogida será objeto de seguimiento por parte de la persona que es su Jefe de área.
                                       Esta persona plasmará el cumplimiento o incumplimiento de sus compromisos de mejora. La revisión
                                       se hará cada 3 meses. La empresa podrá tomar medidas respecto a su cumplimiento o incumplimiento,
                                       lo cual puede afectar directamente su vinculación con la misma, de manera positiva o negativa.
                                       Depende de usted proceder de manera ética y apropiada.
                                     </p>
         		                           ';

                         $HTML .= ($m_md1 < $limite) ? 'Entre las competencias más bajas esta HSE Mando Medio con un puntaje de '.$m_md1.' <br/>Por ello es necesario realizar uno de los siguientes cursos en línea.<br/><a  target=\"_blank\" href="http://doao.lldmsystems.org/Account/Forgot">
                           <span class="glyphicon glyphicon-list-alt"> Este refuerzo es para HSE Mando Medio </span>
                         </a><br/><br/>':'';
                         $HTML .= ($grc1 < $limite) ? 'Entre las competencias más bajas esta HSE Mando Medio con un puntaje de '.$m_md1.' <br/>Por ello es necesario realizar uno de los siguientes cursos en línea.<br/><a  target=\"_blank\" href="http://doao.lldmsystems.org/Account/Forgot">
                           <span class="glyphicon glyphicon-list-alt"> Este refuerzo es para HSE Mando Medio </span>
                         </a><br/><br/>':'';
                         $semanaSiguiente = (92 * 24 * 60 * 60);
                         $dia_db=strtotime($_historialevaluacion[$history]["fecha"]);
                         $s = $semanaSiguiente + $dia_db;
                         $ss = date('Y-m-d', ($dia_db+$semanaSiguiente));
                           $HTML .='<p><b>NOTA 2:</b> los links a los cursos propuestos son una guía inicial. Sin embargo el Jefe inmediato y la persona que debe aplicar el “Plan de Mejora” podrán establecer por mutuo acuerdo otros cursos gratuitos virtuales que puedan ser tomados para adquirir los conocimientos y desarrollar las habilidades y comportamientos necesarios que le permitan al colaborador mejorar su competencia más débil. Estos cursos virtuales gratuitos implican que cada persona deba crear un perfil en cada plataforma elegida para hacer el curso respectivo. El objeto de esta consultoría no se relaciona con la creación de dichos perfiles, para lo cual cada empleado o colaborador deberá recurrir a la ayuda y asistencia técnica que el área de TICs de SGI s.a.s. puede brindarle.</p><br/><br/><p><b>NOTA 3:</b> Para dar con el seguimiento del curso se deberá subir el diploma del curso, Esto se realizara antes de la siguiente fecha <b>'. $ss.'</b>.</p><br/><br/>

                           <form class="form-horizontal" action="?view=plan_accion_hseq&mode=add_plan_accion" method="POST" enctype="multipart/form-data">
                           <input type="hidden" name="id" value="'.$_SESSION['app_id'].'">
                           <input type="hidden" name="area" value="'.$_users[$_SESSION['app_id']]['area'].'">
                           <input type="hidden" name="historia_evaluacion" value="'.$history.'">
                             <div class="form-group">
                               <label class="col-lg-2 control-label">Selección de PDF</label>
                               <div class="col-lg-10">
                                 <input type="file" class="filestyle" name="gerencia">
                               </div>
                             </div>
                             <div class="form-group">
                               <div class="col-lg-10 col-lg-offset-2">
                                 <button type="reset" class="btn btn-default">Resetear</button>
                                 <button type="submit" class="btn btn-primary">Subir</button>
                               </div>
                             </div>
                           </form>

         		                        </div>
         		                    </div>
         			            </div>';

                       }}if ($_users[$_SESSION['app_id']]['categorias'] == 3 && $t_op1 < $limite) {
                         $semanaSiguiente = (92 * 24 * 60 * 60);
                         $dia_db=strtotime($_historialevaluacion[$history]["fecha"]);
                         $s = $semanaSiguiente + $dia_db;
                         $ss = date('Y-m-d', ($dia_db+$semanaSiguiente));
                         $HTML .= '<div class="col-lg-12">
         		                    <div class="panel panel-default">
         		                        <div class="alert alert-danger" role="alert">
         		                            <p><b>PLAN DE ACCÓN</b></p>
         		                        </div>
         		                        <div class="panel-body">
                                     <p>
                                       <b>TODAS LAS COMPETENCIAS QUE ESTÉN POR DEBAJO DE 3.5 DEBERÁN SER MEJORADAS POR EL EMPLEADO</b><br/>
                                       <b>NOTA 1:</b>  la actividad escogida será objeto de seguimiento por parte de la persona que es su Jefe de área.
                                       Esta persona plasmará el cumplimiento o incumplimiento de sus compromisos de mejora. La revisión
                                       se hará cada 3 meses. La empresa podrá tomar medidas respecto a su cumplimiento o incumplimiento,
                                       lo cual puede afectar directamente su vinculación con la misma, de manera positiva o negativa.
                                       Depende de usted proceder de manera ética y apropiada.
                                     </p><br>
         		                          Entre las competencias más bajas esta HSE Trabajador Operativo con un puntaje de '.$m_md1.' <br/>Por ello es necesario realizar uno de los siguientes cursos en línea.<br/><a  target=\"_blank\" href="http://doao.lldmsystems.org/Account/Forgot">
                           <span class="glyphicon glyphicon-list-alt"> Este refuerzo es para HSE Trabajador Operativo </span>
                         </a><br/><br/><p><b>NOTA 2:</b> los links a los cursos propuestos son una guía inicial. Sin embargo el Jefe inmediato y la persona que debe aplicar el “Plan de Mejora” podrán establecer por mutuo acuerdo otros cursos gratuitos virtuales que puedan ser tomados para adquirir los conocimientos y desarrollar las habilidades y comportamientos necesarios que le permitan al colaborador mejorar su competencia más débil. Estos cursos virtuales gratuitos implican que cada persona deba crear un perfil en cada plataforma elegida para hacer el curso respectivo. El objeto de esta consultoría no se relaciona con la creación de dichos perfiles, para lo cual cada empleado o colaborador deberá recurrir a la ayuda y asistencia técnica que el área de TICs de SGI s.a.s. puede brindarle.</p><br/><br/><p><b>NOTA 3:</b> Para dar con el seguimiento del curso se deberá subir el diploma del curso, Esto se realizara antes de la siguiente fecha <b>'. $ss.'</b>.</p><br/><br/>

                           <form class="form-horizontal" action="?view=plan_accion_hseq&mode=add_plan_accion" method="POST" enctype="multipart/form-data">
                           <input type="hidden" name="id" value="'.$_SESSION['app_id'].'">
                           <input type="hidden" name="area" value="'.$_users[$_SESSION['app_id']]['area'].'">
                           <input type="hidden" name="historia_evaluacion" value="'.$history.'">
                             <div class="form-group">
                               <label class="col-lg-2 control-label">Selección de PDF</label>
                               <div class="col-lg-10">
                                 <input type="file" class="filestyle" name="gerencia">
                               </div>
                             </div>
                             <div class="form-group">
                               <div class="col-lg-10 col-lg-offset-2">
                                 <button type="reset" class="btn btn-default">Resetear</button>
                                 <button type="submit" class="btn btn-primary">Subir</button>
                               </div>
                             </div>
                           </form>

         		                        </div>
         		                    </div>
         			            </div>';
                       }if ($_users[$_SESSION['app_id']]['categorias'] == 1) {
                         if($m_grc1 < $limite || $grc1 < $limite){
                         $HTML .= '<div class="col-lg-12">
         		                    <div class="panel panel-default">
         		                        <div class="alert alert-danger" role="alert">
         		                            <p><b>PLAN DE ACCÓN</b></p>
         		                        </div>
         		                        <div class="panel-body">
                                     <p>
                                       <b>TODAS LAS COMPETENCIAS QUE ESTÉN POR DEBAJO DE 3.5 DEBERÁN SER MEJORADAS POR EL EMPLEADO</b><br/>
                                       <b>NOTA 1:</b>  la actividad escogida será objeto de seguimiento por parte de la persona que es su Jefe de área.
                                       Esta persona plasmará el cumplimiento o incumplimiento de sus compromisos de mejora. La revisión
                                       se hará cada 3 meses. La empresa podrá tomar medidas respecto a su cumplimiento o incumplimiento,
                                       lo cual puede afectar directamente su vinculación con la misma, de manera positiva o negativa.
                                       Depende de usted proceder de manera ética y apropiada.
                                     </p>
         		                           ';

                         $HTML .= ($m_grc1 < $limite) ? 'Entre las competencias más bajas esta HSE Mando Gerencial con un puntaje de '.$m_md1.' <br/>Por ello es necesario realizar uno de los siguientes cursos en línea.<br/><a  target=\"_blank\" href="http://doao.lldmsystems.org/Account/Forgot">
                           <span class="glyphicon glyphicon-list-alt"> Este refuerzo es para HSE Mando Gerencial </span>
                         </a><br/><br/>':'';
                         $HTML .= ($grc1 < $limite) ? 'Entre las competencias más bajas esta Gerencia con un puntaje de '.$m_md1.' <br/>Por ello es necesario realizar uno de los siguientes cursos en línea.<br/><a  target=\"_blank\" href="http://doao.lldmsystems.org/Account/Forgot">
                           <span class="glyphicon glyphicon-list-alt"> Este refuerzo es para Gerencia </span>
                         </a><br/><br/>':'';
                         $semanaSiguiente = (92 * 24 * 60 * 60);
                         $dia_db=strtotime($_historialevaluacion[$history]["fecha"]);
                         $s = $semanaSiguiente + $dia_db;
                         $ss = date('Y-m-d', ($dia_db+$semanaSiguiente));
                           $HTML .='<p><b>NOTA 2:</b> los links a los cursos propuestos son una guía inicial. Sin embargo el Jefe inmediato y la persona que debe aplicar el “Plan de Mejora” podrán establecer por mutuo acuerdo otros cursos gratuitos virtuales que puedan ser tomados para adquirir los conocimientos y desarrollar las habilidades y comportamientos necesarios que le permitan al colaborador mejorar su competencia más débil. Estos cursos virtuales gratuitos implican que cada persona deba crear un perfil en cada plataforma elegida para hacer el curso respectivo. El objeto de esta consultoría no se relaciona con la creación de dichos perfiles, para lo cual cada empleado o colaborador deberá recurrir a la ayuda y asistencia técnica que el área de TICs de SGI s.a.s. puede brindarle.</p><br/><br/><p><b>NOTA 3:</b> Para dar con el seguimiento del curso se deberá subir el diploma del curso, Esto se realizara antes de la siguiente fecha <b>'. $ss.'</b>.</p><br/><br/>

                           <form class="form-horizontal" action="?view=plan_accion_hseq&mode=add_plan_accion" method="POST" enctype="multipart/form-data">
                           <input type="hidden" name="id" value="'.$_SESSION['app_id'].'">
                           <input type="hidden" name="area" value="'.$_users[$_SESSION['app_id']]['area'].'">
                           <input type="hidden" name="historia_evaluacion" value="'.$history.'">
                             <div class="form-group">
                               <label class="col-lg-2 control-label">Selección de PDF</label>
                               <div class="col-lg-10">
                                 <input type="file" class="filestyle" name="gerencia">
                               </div>
                             </div>
                             <div class="form-group">
                               <div class="col-lg-10 col-lg-offset-2">
                                 <button type="reset" class="btn btn-default">Resetear</button>
                                 <button type="submit" class="btn btn-primary">Subir</button>
                               </div>
                             </div>
                           </form>

         		                        </div>
         		                    </div>
         			            </div>';
                       }}

                    }


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

		  element: 'myfirstchart',

		  data: [
		  {y: 'Comunicación', a: <?php echo $com1; ?>, b: <?php echo $com2; ?>},
		  {y: 'Efectividad', a: <?php echo $eft1; ?>, b: <?php echo $eft2; ?>},
		  {y: 'H. Cognitiva', a: <?php echo $hbd1; ?>, b: <?php echo $hbd2; ?>},
		  {y: 'Liderazgo', a: <?php echo $ldg1; ?>, b: <?php echo $ldg2; ?>},
		  {y: 'Profesional', a: <?php echo $prf1; ?>, b: <?php echo $prf2; ?>},
		  {y: 'Etica', a: <?php echo $etc1; ?>, b: <?php echo $etc2; ?>},

		  <?php
		  	if ($_users[$_SESSION['app_id']]['categorias'] == 1) {
		  ?>
		  		{y: 'Gerencia', a: <?php echo $grc1; ?>, b: <?php echo $grc2; ?>},
		  		{y: 'HSE M Alto', a: <?php echo $m_grc1; ?>, b: <?php echo $m_grc2; ?>},
		  <?php
		  	}elseif ($_users[$_SESSION['app_id']]['categorias'] == 2) {
		  ?>
		  		{y: 'Gerencia', a: <?php echo $grc1; ?>, b: <?php echo $grc2; ?>},
		  		{y: 'HSE M medio', a: <?php echo $m_md1; ?>, b: <?php echo $m_md2; ?>},
		  <?php
		  	}elseif ($_users[$_SESSION['app_id']]['categorias'] == 4) {
		  ?>
		  		{y: 'Gerencia', a: <?php echo $grc1; ?>, b: <?php echo $grc2; ?>},
		  		{y: 'Mando HSE', a: <?php echo $m_hse1; ?>, b: <?php echo $m_hse2; ?>},
		  <?php
		  	}elseif ($_users[$_SESSION['app_id']]['categorias'] == 3) {
		  ?>
		  		{y: 'HSQ T Operativo', a: <?php echo $t_op1; ?>, b: <?php echo $t_op2; ?>},
		  <?php
		  	}
		  ?>
		  ],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Calificación 360', 'Autoevaluación '],
        hideHover: 'auto',
        resize: true
		});
	</script>
</body>
</html>
