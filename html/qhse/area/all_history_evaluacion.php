<?php include(HTML_DIR . 'overall/head.php'); ?>

<body>
<section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITLE ?></a></section>

 <?php include(HTML_DIR . '/overall/nav.php'); ?>
 <section class="mbr-section mbr-after-navbar">
   <div class="mbr-section__container container mbr-section__container--isolated">
     <div class="row container">
 		    <div class="pull-right">
 		        <ol class="breadcrumb">
             <li><a href="?view=gerente_de_personal"><i class="fa fa-comments"></i> Evaluación</a></li>
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
                  echo '<a class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true" href="?view=gerente_de_personal&mode=usuarios&id='.$id_evaluador.'">Esta es la Evaluación N°: '.$_historialevaluacion[$id_evaluador]['id'].' Con fecha '.$_historialevaluacion[$id_evaluador]['fecha'].'</a>';
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
