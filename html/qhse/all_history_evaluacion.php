<?php include(HTML_DIR . 'overall/head.php'); ?>

<body>
<section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITLE ?></a></section>

 <?php include(HTML_DIR . '/overall/nav.php'); ?>
 <section class="mbr-section mbr-after-navbar">
   <div class="mbr-section__container container mbr-section__container--isolated">
     <div class="row container">
 		    <div class="pull-right">
 		    <?php
 		    if(isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['permisos'] == 3){
 		    echo '<div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
 		        <a class="mbr-buttons__btn btn btn-danger  "href="?view=gerente_de_personal">PUNTAJES EMPLEADOS</a>
 		      </li></ul></div>';
 		  	}elseif(isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['permisos'] == 6){
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
        <div class="row titulo_categoria">Gestión de evaluaciòn</div>
        <div class="row cajas">
          <div class="col-md-12">
            <?php
              if(false != $_historialevaluacion) {
                foreach($_historialevaluacion as $id_evaluador => $array_evaluador) {
                  echo '<a class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true" href="?view=evaluador&mode=resultados&id='.$id_evaluador.'">Esta es la Evaluación N°: '.$_historialevaluacion[$id_evaluador]['id'].' Con fecha '.$_historialevaluacion[$id_evaluador]['fecha'].'</a>';
                }
              } else {
                echo 'No existe Historial';
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
