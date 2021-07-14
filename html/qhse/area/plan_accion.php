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
  		        <a class="mbr-buttons__btn btn btn-danger active" href="?view=gerente_de_personal&mode=plan_accion&id='.$history.'">PLAN ACCIÓN EMPLEADOS</a>
  		      </li></ul></div>';
		  	}elseif(isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['area'] == 5){
		  	echo '<div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
	              <a class="mbr-buttons__btn btn btn-danger" href="?view=evaluacion">EVALUACION</a>
	            </li></ul></div>';
		  	}
		    ?>
		      <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
		        <a class="mbr-buttons__btn btn btn-danger" href="?view=evaluador">RESULTADOS</a>
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
          $area = $_users[$_SESSION['app_id']]['area'];
          $sql = $db->query("SELECT * FROM plan_accion_evaluado WHERE historia_evaluacion = $history AND area = $area;");
          if($row = $db->recorrer($sql)) {
           $HTML = '<table class="table table-striped table-hover table-condensed"><thead><tr>
           <th>Usuario</th>
           <th>Plan de Acción</th>
           <th>Aprobación Jefe</th>
           <th>Aprobar</th>
           </tr></thead>
           <tbody>';
           do{
             $aprobo = (($row['apro_jefe_area']) == 1) ? 'Aprobo':'No Aprobo';
               $HTML .= '<tr>
                 <td>'.$_users[$row['user']]['nombres'].' '.$_users[$row['user']]['apellidos'].'</td>
                 <td><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$row['nombre_archivo'].'" title=\"'.$row['nombre_archivo'].'\"<span class="glyphicon glyphicon-file" aria-hidden="true"></span>'.$row['nombre_archivo'].'</a></td>
                 <td>'.$aprobo.'</td>
                 <td><form class="form-horizontal" action="?view=plan_accion_hseq&mode=aprobar" method="POST" enctype="multipart/form-data">
                  <input type="hidden" name="id" value="'.$row['id'].'">
                  <input type="hidden" name="apro_jefe_area" value="1">
                  <input type="hidden" name="historia_evaluacion" value="'.$history.'">
                  <button type="submit" class="btn btn-primary">Aprobar</button>
                  </form>

                </tr>';
              }while ($row = $db->recorrer($sql));
              $db->liberar($sql);
              $db->close();

            $HTML .= '</tbody></table>';
          } else {
            $HTML = '<div class="alert alert-dismissible alert-info"><strong>INFORMACIÓN: </strong> Todavía no existe ningún registro.</div>';
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
