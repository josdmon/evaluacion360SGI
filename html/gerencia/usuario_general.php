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
	            <a class="mbr-buttons__btn btn btn-danger" href="?view=gerente&mode=areas&id=<?= $history; ?>">ÁREAS</a>
	          </li></ul></div>
            <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
  		        <a class="mbr-buttons__btn btn btn-danger" href="?view=gerente&mode=resultado_general&id=<?= $history; ?>">RESULTADO GENERAL</a>
  		      </li></ul></div>
	        </div>
	        <div class="pull-right">
		      <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
	            <a class="mbr-buttons__btn btn btn-danger active" href="?view=gerente&mode=usuario_general&id=<?= $history; ?>">USUARIOS</a>
	          </li></ul></div>
	        </div>
	        <ol class="breadcrumb">
		       <li><a href="?view=index"><i class="fa fa-tags"></i> Resultados Evaluación</a></li>
		     </ol>
		</div>
		<div class="row categorias_con_foros">
		   <div class="col-sm-12">
		       <div class="row titulo_categoria">Gestión de Usuarios</div>
		       <div class="row cajas">
			  	<div class="list-group col-md-12">
            <?php
            if(false != $_usereva) {
  					foreach($_usereva as $id_user => $cliente_array) {

  					   	//	$usr = $row["id"];
  					   	//	$ctg = $row["categorias"];
  					   	echo '<a class="list-group-item" href="?view=gerente&usr='.$_usereva[$id_user]['id'].'&ctg='.$_usereva[$id_user]['categorias'].'&mode=resultados&ar='.$_usereva[$id_user]['area'].'&id='.$history.'" style="margin: 0 auto;">'.strtoupper($_usereva[$id_user]['nombres']).' '.strtoupper($_usereva[$id_user]['apellidos'])."\r\n";
  					   	}
  					   	 echo "</a> \r\n";
  					}else{
  						echo '<div class="alert alert-dismissible alert-info"><strong>INFORMACIÓN: </strong> No hay usuarios.</div>';
  					}?>
			  	</div>
				</div>
			  </div>
		   </div>
		</div>
	   </div>
	</section>


	<?php include(HTML_DIR . 'overall/footer.php'); ?>

 </body>
</html>
