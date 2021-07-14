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
		        <a class="mbr-buttons__btn btn btn-danger active" href="?view=gerente">RESULTADOS</a>
		      </li></ul></div>
          <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
	            <a class="mbr-buttons__btn btn btn-danger" href="?view=gerente&mode=usuarios&ar=<?= $_GET['ar']; ?>&id=<?= $history; ?>">USUARIOS ÁREA</a>
	        </li></ul></div>
          <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
  	            <a class="mbr-buttons__btn btn btn-danger" href="?view=gerente&mode=usuario_general&id=<?= $history; ?>">USUARIOS COMPAÑIA</a>
  	      </li></ul></div>
          <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
	            <a class="mbr-buttons__btn btn btn-danger" href="?view=gerente&mode=areas&id=<?= $history; ?>">ÁREAS DE LA EMPRESA</a>
	        </li></ul></div>
	       </div>

		     <ol class="breadcrumb">
		       <li><a href="?view=index"><i class="fa fa-tags"></i> Evaluación</a></li>
		     </ol>
		</div>
		<div class="row categorias_con_foros">
		   <div class="col-sm-12">
		      <div class="row titulo_categoria">Gestión de Resultados de <?php $e = $_GET['usr']; echo strtoupper($_usereva[$e]['nombres']).' '.strtoupper($_usereva[$e]['apellidos']); ?></div>
		       <div class="row cajas">
			  	<div class="list-group col-md-12">
			  	<?php
				  	$db = new Conexion();

					$e = $_GET['usr'];
					$c = $_GET['ctg'];
					$sql = $db->query("SELECT * FROM resultadosevaluacion WHERE id_usuario = '$e' AND comunicacion >=1 AND historial_evaluacion = $history;");
					$sql2 = $db->query("SELECT * FROM resultadosevaluacion WHERE id_usuario = '$e' AND evaluador = '$e' AND historial_evaluacion = $history;");
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
					   		if ($c == 1) {
					   			$grc+=$row["gerencia"];
					   			$m_grc+=$row["m_gerencial"];
					   		}elseif ($c == 2) {
					   			$grc+=$row["gerencia"];
					   			$m_md+=$row["m_medio"];
					   		}elseif ($c == 3) {
					   			$t_op+=$row["t_operativo"];
					   		}
					   } while ($row = $db->recorrer($sql));

					   if ($aut = $db->recorrer($sql2)) {

				   			$com2=number_format($aut["comunicacion"],2);
				   			$eft2=number_format($aut["efectividad"],2);
				   			$etc2=number_format($aut["etica"],2);
				   			$hbd2=number_format($aut["habilidad"],2);
				   			$ldg2=number_format($aut["liderasgo"],2);
				   			$prf2=number_format($aut["profesional"],2);
					   		if ($c == 1) {
					   			$grc2=number_format($aut["gerencia"],2);
					   			$m_grc2=number_format($aut["m_gerencial"],2);
					   		}elseif ($c == 2) {
					   			$grc2=number_format($aut["gerencia"],2);
					   			$m_md2=number_format($aut["m_medio"],2);
					   		}elseif ($c == 3) {
					   			$t_op2=number_format($aut["t_operativo"],2);
					   		}
						}else{
							$com2=0; $eft2=0; $etc2=0; $hbd2=0; $ldg2=0; $prf2=0; $grc2=0; $m_grc2=0; $grc2=0; $m_md2=0; $t_op2=0;
						}

						$com1=number_format($com/$i,2); $eft1=number_format($eft/$i,2); $etc1=number_format($etc/$i,2); $hbd1=number_format($hbd/$i,2); $ldg1=number_format($ldg/$i,2); $prf1=number_format($prf/$i,2);
						$grc1=number_format($grc/$i,2); $m_grc1=number_format($m_grc/$i,2); $m_md1=number_format($m_md/$i,2); $t_op1=number_format($t_op/$i,2);
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
					   <th>COMPETENCIA </th>
		               <th>CALIFICACIÓN</th>
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
					   if ($c == 1) {
				   			$HTML .=
				   			'<tr><td>GERENCIA</td><td>'.$grc1.'</td><td>'.$grc2.'</td></tr>
		                    <tr><td>HSQ MANDO GERENCIAL</td><td>'.$m_grc1.'</td><td>'.$m_grc2.'</td></tr>';
		                    include(HTML_DIR . 'qhse/competencia_baja/mando_g.php');

		          }elseif ($c == 2) {
				   			$HTML .=
				   			'<tr><td>GERENCIA</td><td>'.$grc1.'</td><td>'.$grc2.'</td></tr>
		                    <tr><td>HSE MANDO MEDIO</td><td>'.$m_md1.'</td><td>'.$m_md2.'</td></tr>';
		                    include(HTML_DIR . 'qhse/competencia_baja/mando_m.php');

				   		}elseif ($c == 3) {
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
                     if ($com1 < $limite) {
                      $HTML .= 'Entre la competencia más baja es Comunicación con un puntaje de '.$com1.' <br/>Por ello es necesario realizar uno de los siguientes cursos en línea.<br/>';
                       $sql = $db->query("SELECT * FROM lin_plan_accion WHERE plan_accion = '1';");
                       if ($row = $db->recorrer($sql)){
                         $i=0;
                         do {
                            ++$i;
                            $HTML .= '<a  target=\"_blank\" href="'.$row['lin'].'">
                              <span class="glyphicon glyphicon-list-alt"> ' .$row['nombre']. ' </span>
                            </a><br/><br/>';
                          }while ($row = $db->recorrer($sql));
                       }
                     }if ($eft1 < $limite) {
                      $HTML .= 'Entre la competencia más baja es Efectividad con un puntaje de '.$eft1.' <br/>Por ello es necesario realizar uno de los siguientes cursos en línea.<br/>';
                       $sql = $db->query("SELECT * FROM lin_plan_accion WHERE plan_accion = '2';");
                       if ($row = $db->recorrer($sql)){
                         $i=0;
                         do {
                            ++$i;
                            $HTML .= '<a  target=\"_blank\" href="'.$row['lin'].'">
                              <span class="glyphicon glyphicon-list-alt"> ' .$row['nombre']. ' </span>
                            </a><br/><br/>';
                          }while ($row = $db->recorrer($sql));
                       }
                     }if ($hbd1 < $limite) {
                      $HTML .= 'Entre la competencia más baja es Habilidad Cognitiva con un puntaje de '.$hbd1.' <br/>Por ello es necesario realizar uno de los siguientes cursos en línea.<br/>';
                       $sql = $db->query("SELECT * FROM lin_plan_accion WHERE plan_accion = '3';");
                       if ($row = $db->recorrer($sql)){
                         $i=0;
                         do {
                            ++$i;
                            $HTML .= '<a  target=\"_blank\" href="'.$row['lin'].'">
                              <span class="glyphicon glyphicon-list-alt"> ' .$row['nombre']. ' </span>
                            </a><br/><br/>';
                          }while ($row = $db->recorrer($sql));
                       }
                     }if ($hbd1 < $limite) {
                      $HTML .= 'Entre la competencia más baja es Liderazgo con un puntaje de '.$hbd1.' <br/>Por ello es necesario realizar uno de los siguientes cursos en línea.<br/>';
                       $sql = $db->query("SELECT * FROM lin_plan_accion WHERE plan_accion = '4';");
                       if ($row = $db->recorrer($sql)){
                         $i=0;
                         do {
                            ++$i;
                            $HTML .= '<a  target=\"_blank\" href="'.$row['lin'].'">
                              <span class="glyphicon glyphicon-list-alt"> ' .$row['nombre']. ' </span>
                            </a><br/><br/>';
                          }while ($row = $db->recorrer($sql));
                       }
                     }if ($prf1 < $limite) {
                      $HTML .= 'Entre la competencia más baja es Profesionalismo con un puntaje de '.$prf1.' <br/>Por ello es necesario realizar uno de los siguientes cursos en línea.<br/>';
                       $sql = $db->query("SELECT * FROM lin_plan_accion WHERE plan_accion = '5';");
                       if ($row = $db->recorrer($sql)){
                         $i=0;
                         do {
                            ++$i;
                            $HTML .= '<a  target=\"_blank\" href="'.$row['lin'].'">
                              <span class="glyphicon glyphicon-list-alt"> ' .$row['nombre']. ' </span>
                            </a><br/><br/>';
                          }while ($row = $db->recorrer($sql));
                       }
                     }if ($etc1 < $limite) {
                      $HTML .= 'Entre la competencia más baja es Etica con un puntaje de '.$etc1.' <br/>Por ello es necesario realizar uno de los siguientes cursos en línea.<br/>';
                       $sql = $db->query("SELECT * FROM lin_plan_accion WHERE plan_accion = '6';");
                       if ($row = $db->recorrer($sql)){
                         $i=0;
                         do {
                            ++$i;
                            $HTML .= '<a  target=\"_blank\" href="'.$row['lin'].'">
                              <span class="glyphicon glyphicon-list-alt"> ' .$row['nombre']. ' </span>
                            </a><br/><br/>';
                          }while ($row = $db->recorrer($sql));
                       }
                     }






                  if ($c == 2) {
                    if ($m_md1 < $limite) {
                     $HTML .= 'Entre las competencias más bajas esta HSE Mando Medio con un puntaje de '.$m_md1.' <br/>Por ello es necesario realizar uno de los siguientes cursos en línea.<br/>';
                      $sql = $db->query("SELECT * FROM lin_plan_accion WHERE plan_accion = '9';");
                      if ($row = $db->recorrer($sql)){
                        $i=0;
                        do {
                           ++$i;
                           $HTML .= '<a  target=\"_blank\" href="'.$row['lin'].'">
                             <span class="glyphicon glyphicon-list-alt"> ' .$row['nombre']. ' </span>
                           </a><br/><br/>';
                         }while ($row = $db->recorrer($sql));
                      }
                    }if ($grc1 < $limite) {
                     $HTML .= 'Entre las competencias más bajas es Gerencia con un puntaje de '.$grc1.' <br/>Por ello es necesario realizar uno de los siguientes cursos en línea.<br/>';
                      $sql = $db->query("SELECT * FROM lin_plan_accion WHERE plan_accion = '8';");
                      if ($row = $db->recorrer($sql)){
                        $i=0;
                        do {
                           ++$i;
                           $HTML .= '<a  target=\"_blank\" href="'.$row['lin'].'">
                             <span class="glyphicon glyphicon-list-alt"> ' .$row['nombre']. ' </span>
                           </a><br/><br/>';
                         }while ($row = $db->recorrer($sql));
                      }
                    }

                  }if ($c == 3) {
                    if ($t_op1 < $limite) {
                     $HTML .= 'Entre las competencias más bajas es Gerencia con un puntaje de '.$t_op1.' <br/>Por ello es necesario realizar uno de los siguientes cursos en línea.<br/>';
                      $sql = $db->query("SELECT * FROM lin_plan_accion WHERE plan_accion = '7';");
                      if ($row = $db->recorrer($sql)){
                        $i=0;
                        do {
                           ++$i;
                           $HTML .= '<a  target=\"_blank\" href="'.$row['lin'].'">
                             <span class="glyphicon glyphicon-list-alt"> ' .$row['nombre']. ' </span>
                           </a><br/><br/>';
                         }while ($row = $db->recorrer($sql));
                      }
                    }
                  }if ($c == 1) {
                    if ($m_grc1 < $limite) {
                     $HTML .= 'Entre las competencias más bajas es HSE Mando Gerencial con un puntaje de '.$m_grc1.' <br/>Por ello es necesario realizar uno de los siguientes cursos en línea.<br/>';
                      $sql = $db->query("SELECT * FROM lin_plan_accion WHERE plan_accion = '9';");
                      if ($row = $db->recorrer($sql)){
                        $i=0;
                        do {
                           ++$i;
                           $HTML .= '<a  target=\"_blank\" href="'.$row['lin'].'">
                             <span class="glyphicon glyphicon-list-alt"> ' .$row['nombre']. ' </span>
                           </a><br/><br/>';
                         }while ($row = $db->recorrer($sql));
                      }
                    }
                    if ($grc1 < $limite) {
                     $HTML .= 'Entre las competencias más bajas es Gerencia con un puntaje de '.$grc1.' <br/>Por ello es necesario realizar uno de los siguientes cursos en línea.<br/>';
                      $sql = $db->query("SELECT * FROM lin_plan_accion WHERE plan_accion = '8';");
                      if ($row = $db->recorrer($sql)){
                        $i=0;
                        do {
                           ++$i;
                           $HTML .= '<a  target=\"_blank\" href="'.$row['lin'].'">
                             <span class="glyphicon glyphicon-list-alt"> ' .$row['nombre']. ' </span>
                           </a><br/><br/>';
                         }while ($row = $db->recorrer($sql));
                      }
                    }
                  }
                  $semanaSiguiente = (92 * 24 * 60 * 60);
                  $dia_db=strtotime($_historialevaluacion[$history]["fecha"]);
                  $s = $semanaSiguiente + $dia_db;
                  $ss = date('Y-m-d', ($dia_db+$semanaSiguiente));
                    $HTML .='<p><b>NOTA 2:</b> los links a los cursos propuestos son una guía inicial. Sin embargo el Jefe inmediato y la persona que debe aplicar el “Plan de Mejora” podrán establecer por mutuo acuerdo otros cursos gratuitos virtuales que puedan ser tomados para adquirir los conocimientos y desarrollar las habilidades y comportamientos necesarios que le permitan al colaborador mejorar su competencia más débil. Estos cursos virtuales gratuitos implican que cada persona deba crear un perfil en cada plataforma elegida para hacer el curso respectivo. El objeto de esta consultoría no se relaciona con la creación de dichos perfiles, para lo cual cada empleado o colaborador deberá recurrir a la ayuda y asistencia técnica que el área de TICs de SGI s.a.s. puede brindarle.</p><br/><br/><p><b>NOTA 3:</b> Para dar con el seguimiento del curso se deberá subir el diploma del curso, Esto se realizara antes de la siguiente fecha <b>'. $ss.'</b>.</p><br/><br/>



  		                        </div>
  		                    </div>
  			            </div>';
                  }else{
                     if ($c == 2) {
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
                                     if ($m_md1 < $limite) {
                                      $HTML .= 'Entre las competencias más bajas esta HSE Mando Medio con un puntaje de '.$m_md1.' <br/>Por ello es necesario realizar uno de los siguientes cursos en línea.<br/>';
                                       $sql = $db->query("SELECT * FROM lin_plan_accion WHERE plan_accion = '9';");
                                       if ($row = $db->recorrer($sql)){
                                         $i=0;
                                         do {
                                            ++$i;
                                            $HTML .= '<a  target=\"_blank\" href="'.$row['lin'].'">
                                              <span class="glyphicon glyphicon-list-alt"> ' .$row['nombre']. ' </span>
                                            </a><br/><br/>';
                                          }while ($row = $db->recorrer($sql));
                                       }
                                     }if ($grc1 < $limite) {
                                      $HTML .= 'Entre las competencias más bajas es Gerencia con un puntaje de '.$grc1.' <br/>Por ello es necesario realizar uno de los siguientes cursos en línea.<br/>';
                                       $sql = $db->query("SELECT * FROM lin_plan_accion WHERE plan_accion = '8';");
                                       if ($row = $db->recorrer($sql)){
                                         $i=0;
                                         do {
                                            ++$i;
                                            $HTML .= '<a  target=\"_blank\" href="'.$row['lin'].'">
                                              <span class="glyphicon glyphicon-list-alt"> ' .$row['nombre']. ' </span>
                                            </a><br/><br/>';
                                          }while ($row = $db->recorrer($sql));
                                       }
                                     }
                       $semanaSiguiente = (92 * 24 * 60 * 60);
                       $dia_db=strtotime($_historialevaluacion[$history]["fecha"]);
                       $s = $semanaSiguiente + $dia_db;
                       $ss = date('Y-m-d', ($dia_db+$semanaSiguiente));
                         $HTML .='<p><b>NOTA 2:</b> los links a los cursos propuestos son una guía inicial. Sin embargo el Jefe inmediato y la persona que debe aplicar el “Plan de Mejora” podrán establecer por mutuo acuerdo otros cursos gratuitos virtuales que puedan ser tomados para adquirir los conocimientos y desarrollar las habilidades y comportamientos necesarios que le permitan al colaborador mejorar su competencia más débil. Estos cursos virtuales gratuitos implican que cada persona deba crear un perfil en cada plataforma elegida para hacer el curso respectivo. El objeto de esta consultoría no se relaciona con la creación de dichos perfiles, para lo cual cada empleado o colaborador deberá recurrir a la ayuda y asistencia técnica que el área de TICs de SGI s.a.s. puede brindarle.</p><br/><br/><p><b>NOTA 3:</b> Para dar con el seguimiento del curso se deberá subir el diploma del curso, Esto se realizara antes de la siguiente fecha <b>'. $ss.'</b>.</p><br/><br/>


       		                        </div>
       		                    </div>
       			            </div>';

                     }}if ($c == 3 && $t_op1 < $limite) {
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
       		                          Entre las competencias más bajas esta HSE Trabajador Operativo con un puntaje de '.$t_op1.' <br/>Por ello es necesario realizar uno de los siguientes cursos en línea.<br/>';
                                    $sql = $db->query("SELECT * FROM lin_plan_accion WHERE plan_accion = '7';");
                                    if ($row = $db->recorrer($sql)){
                                      $i=0;
                                      do {
                                         ++$i;
                                         $HTML .= '<a  target=\"_blank\" href="'.$row['lin'].'">
                                           <span class="glyphicon glyphicon-list-alt"> ' .$row['nombre']. ' </span>
                                         </a><br/><br/>';
                                       }while ($row = $db->recorrer($sql));
                                    }
                       $HTML .='<p><b>NOTA 2:</b> los links a los cursos propuestos son una guía inicial. Sin embargo el Jefe inmediato y la persona que debe aplicar el “Plan de Mejora” podrán establecer por mutuo acuerdo otros cursos gratuitos virtuales que puedan ser tomados para adquirir los conocimientos y desarrollar las habilidades y comportamientos necesarios que le permitan al colaborador mejorar su competencia más débil. Estos cursos virtuales gratuitos implican que cada persona deba crear un perfil en cada plataforma elegida para hacer el curso respectivo. El objeto de esta consultoría no se relaciona con la creación de dichos perfiles, para lo cual cada empleado o colaborador deberá recurrir a la ayuda y asistencia técnica que el área de TICs de SGI s.a.s. puede brindarle.</p><br/><br/><p><b>NOTA 3:</b> Para dar con el seguimiento del curso se deberá subir el diploma del curso, Esto se realizara antes de la siguiente fecha <b>'. $ss.'</b>.</p><br/><br/>


       		                        </div>
       		                    </div>
       			            </div>';
                     }if ($c == 1) {
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


                     if ($m_grc1 < $limite) {
                      $HTML .= 'Entre las competencias más bajas es HSE Mando Gerencial con un puntaje de '.$m_grc1.' <br/>Por ello es necesario realizar uno de los siguientes cursos en línea.<br/>';
                       $sql = $db->query("SELECT * FROM lin_plan_accion WHERE plan_accion = '9';");
                       if ($row = $db->recorrer($sql)){
                         $i=0;
                         do {
                            ++$i;
                            $HTML .= '<a  target=\"_blank\" href="'.$row['lin'].'">
                              <span class="glyphicon glyphicon-list-alt"> ' .$row['nombre']. ' </span>
                            </a><br/><br/>';
                          }while ($row = $db->recorrer($sql));
                       }
                     }
                     if ($grc1 < $limite) {
                      $HTML .= 'Entre las competencias más bajas es Gerencia con un puntaje de '.$grc1.' <br/>Por ello es necesario realizar uno de los siguientes cursos en línea.<br/>';
                       $sql = $db->query("SELECT * FROM lin_plan_accion WHERE plan_accion = '8';");
                       if ($row = $db->recorrer($sql)){
                         $i=0;
                         do {
                            ++$i;
                            $HTML .= '<a  target=\"_blank\" href="'.$row['lin'].'">
                              <span class="glyphicon glyphicon-list-alt"> ' .$row['nombre']. ' </span>
                            </a><br/><br/>';
                          }while ($row = $db->recorrer($sql));
                       }
                     }
                       $semanaSiguiente = (92 * 24 * 60 * 60);
                       $dia_db=strtotime($_historialevaluacion[$history]["fecha"]);
                       $s = $semanaSiguiente + $dia_db;
                       $ss = date('Y-m-d', ($dia_db+$semanaSiguiente));
                         $HTML .='<p><b>NOTA 2:</b> los links a los cursos propuestos son una guía inicial. Sin embargo el Jefe inmediato y la persona que debe aplicar el “Plan de Mejora” podrán establecer por mutuo acuerdo otros cursos gratuitos virtuales que puedan ser tomados para adquirir los conocimientos y desarrollar las habilidades y comportamientos necesarios que le permitan al colaborador mejorar su competencia más débil. Estos cursos virtuales gratuitos implican que cada persona deba crear un perfil en cada plataforma elegida para hacer el curso respectivo. El objeto de esta consultoría no se relaciona con la creación de dichos perfiles, para lo cual cada empleado o colaborador deberá recurrir a la ayuda y asistencia técnica que el área de TICs de SGI s.a.s. puede brindarle.</p><br/><br/><p><b>NOTA 3:</b> Para dar con el seguimiento del curso se deberá subir el diploma del curso, Esto se realizara antes de la siguiente fecha <b>'. $ss.'</b>.</p><br/><br/>


       		                        </div>
       		                    </div>
       			            </div>';
                     }}

                  }
                  $db->liberar($sql);
                  $db->liberar($sql2);
                  $db->close();


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
		  {y: 'H Cognitiva', a: <?php echo $hbd1; ?>, b: <?php echo $hbd2; ?>},
		  {y: 'Liderazgo', a: <?php echo $ldg1; ?>, b: <?php echo $ldg2; ?>},
		  {y: 'Profesional', a: <?php echo $prf1; ?>, b: <?php echo $prf2; ?>},
		  {y: 'Etica', a: <?php echo $etc1; ?>, b: <?php echo $etc2; ?>},
		  <?php
		  	if ($c == 1) {
		  ?>
		  		{y: 'Gerencia', a: <?php echo $grc1; ?>, b: <?php echo $grc2; ?>},
		  		{y: 'HSQ M. alto', a: <?php echo $m_grc1; ?>, b: <?php echo $m_grc2; ?>},
		  <?php
		  	}elseif ($c == 2) {
		  ?>
		  		{y: 'Gerencia', a: <?php echo $grc1; ?>, b: <?php echo $grc2; ?>},
		  		{y: 'HSQ M. medio', a: <?php echo $m_md1; ?>, b: <?php echo $m_md2; ?>},
		  <?php
		  	}elseif ($c == 3) {
		  ?>
		  		{y: 'HSQ T. Operativo', a: <?php echo $t_op1; ?>, b: <?php echo $t_op2; ?>},
		  <?php
		  	}
		  ?>
		  ],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Calificación ', 'Autoevaluación '],
        hideHover: 'auto',
        resize: true
		});
	</script>
</body>
</html>
