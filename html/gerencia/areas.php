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
            <a class="mbr-buttons__btn btn btn-danger" href="?view=gerente&mode=resultado_general&id=<?= $history; ?>">RESULTADO GENERAL</a>
          </li></ul></div>

          <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
            <a class="mbr-buttons__btn btn btn-danger active" href="?view=gerente&mode=areas&id=<?= $history; ?>">RESULTADOS POR ÁREA</a>
          </li></ul></div>
          <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
            <a class="mbr-buttons__btn btn btn-danger" href="?view=gerente&mode=usuario_general&id=<?= $history; ?>">USUARIOS</a>
          </li></ul></div>
	        </div>

		     <ol class="breadcrumb">
		       <li><a href="?view=index"><i class="fa fa-tags"></i>Resultados Evaluación</a></li>
		     </ol>
		</div>

		<div class="row categorias_con_foros">
		  <div class="col-sm-12">
		      <div class="row titulo_categoria">Gestión de Áreas</div>

		      <div class="row cajas">
		        <div class="col-md-12">
		          <?php
	                if(false != $_area) {
	                 $HTML = '';
	                  foreach($_area as $id_area => $content_array) {
	                      $HTML .= '
	                      	<div class="list-group">
					  		  <a href="?view=gerente&mode=usuarios&ar='.$_area[$id_area]['id'].'&id='.$history.'" class="list-group-item">'.strtoupper ($_area[$id_area]['area']).'</a>
					  		</div>';
	                  }
	                } else {
	                  $HTML = '<div class="alert alert-dismissible alert-info"><strong>INFORMACIÓN: </strong> Todavía no existe ningún foro.</div>';
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
