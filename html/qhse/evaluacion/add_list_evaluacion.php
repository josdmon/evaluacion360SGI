<?php include(HTML_DIR . 'overall/head.php'); ?>

<body>
<section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITLE ?></a></section>

 <?php include(HTML_DIR . '/overall/nav.php'); ?>
 <section class="mbr-section mbr-after-navbar">
   <div class="mbr-section__container container mbr-section__container--isolated">
     <div class="row container">
       <div class="pull-right">
            <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
                <a class="mbr-buttons__btn btn btn-danger active" href="?view=evaluacion">GESTIÓN EVALUACIÓN</a>
            </li></ul></div>
            <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
                <a class="mbr-buttons__btn btn btn-danger" href="?view=evaluacion&mode=add">CREAR ROL DE EVALUADORES</a>
            </li></ul></div>
            <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
                <a class="mbr-buttons__btn btn btn-danger" href="?view=historial_evaluacion&mode=add">CREAR NUEVO GRUPO DE EVALUACIÓN</a>
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
                  echo '<a class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true" href="?view=evaluacion&mode=allList&id='.$id_evaluador.'">Esta es la Evaluación N°: '.$_historialevaluacion[$id_evaluador]['id'].' Con fecha '.$_historialevaluacion[$id_evaluador]['fecha'].'</a>';

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
