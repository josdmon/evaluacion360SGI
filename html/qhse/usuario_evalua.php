 <?php include(HTML_DIR . 'overall/head.php'); ?>

 <body>
 <section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITLE ?></a></section>

 	<?php include(HTML_DIR . '/overall/nav.php'); ?>
  <div class="col-sm-12">



	<section class="mbr-section mbr-after-navbar">
	  <div class="mbr-section__container container mbr-section__container--isolated">
	    <?php
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
		     <?php
		    if(isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['permisos'] == 3){
		    echo '<div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
		        <a class="mbr-buttons__btn btn btn-danger  "href="?view=gerente_de_personal">PUNTAJES EMPLEADOS</a>
		      </li></ul></div>';
		  	}elseif(isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['permisos'] == 6){
		  	echo '<div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
	              <a class="mbr-buttons__btn btn btn-danger" href="?view=evaluacion">GENERAR EVALUACION</a>
	            </li></ul></div>';
		  	}
		    ?>

		      <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
		        <a class="mbr-buttons__btn btn btn-danger" href="?view=evaluador">RESULTADOS</a>
		      </li></ul></div>

	          <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
	            <a class="mbr-buttons__btn btn btn-danger active" href="?view=usuario_evalua&mode=evaluacion">USUARIO A EVALUAR</a>
	          </li></ul></div>
	        </div>

		     <ol class="breadcrumb">
		       <li><a href="?view=index"><i class="fa fa-tags"></i> Evaluación</a></li>
		     </ol>
		</div>
    <div style="text-align:center;" >
    <video width="420" height="340" id="mivideo" controls id="mivideo">
        <source src="views/images/sgi.mp4" type="video/mp4;" >
    </video>
  </div>
  <script>
  mivideo = document.getElementById('mivideo');
  mivideo.autoplay = true;
  mivideo.load();
  </script>
		<div class="row categorias_con_foros">

		       <div class="row titulo_categoria">Gestión de Usuarios</div>
		       <div class="row cajas">
			  	<div class="list-group col-md-12">
			  	<?php
				  	$db = new Conexion();
				  	$e = $_users[$_SESSION['app_id']]['id'];
					$sql = $db->query("SELECT * FROM resultadosevaluacion WHERE evaluador = '$e' AND comunicacion = 0;");
					if ($row = $db->recorrer($sql)){
						do{
					   		$s=$row["id_usuario"];
                $history=$row["historial_evaluacion"];
					   		$sql1 = $db->query("SELECT * FROM users WHERE  id = $s;");
					   		$reg = $db->recorrer($sql1);
					   		$usr = $reg["id"];
					   		$ctg = $reg["categorias"];
					   	echo '<a class="list-group-item" href="?view=eva_empleados&usr='.$usr.'&ctg='.$ctg.'&edr='.$e.'&his='.$history.'" style="margin: 0 auto;">'.strtoupper($reg["nombres"]).' '.strtoupper($reg["apellidos"])."\r\n";
					   	}while ($row = $db->recorrer($sql));
					   	 echo "</a> \r\n";
					}else{
						echo '<div class="alert alert-dismissible alert-info"><strong>INFORMACIÓN: </strong> No hay usuarios a evaluar.</div>';
					}

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
