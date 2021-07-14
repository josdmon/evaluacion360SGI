<?php include(HTML_DIR . 'overall/head.php'); ?>

<body>
<section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITLE ?></a></section>

 <?php include(HTML_DIR . '/overall/nav.php'); ?>
 <section class="mbr-section mbr-after-navbar">
   <div class="mbr-section__container container mbr-section__container--isolated">
     <div class="row container">
      <div class="pull-right">
        <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
           <a class="mbr-buttons__btn btn btn-danger active" href="?view=usuario_evalua&mode=encuesta">ENCUESTA</a>
        </li></ul></div>

       <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
         <a class="mbr-buttons__btn btn btn-danger" href="?view=usuario_evalua&mode=evaluacion">EVALUACIÒN DE DESEMPEÑO</a>
       </li></ul></div>
      </div>

          <ol class="breadcrumb">
            <li><a href="?view=index"><i class="fa fa-tags"></i> H S E Q</a></li>
          </ol>
     </div>


     <div class="row categorias_con_foros">
       <div class="col-sm-12">
        <div class="row titulo_categoria">Gestión de encuestas</div>
        <div class="row cajas">
          <div class="col-md-12">

            <a href="?view=usuario_evalua&mode=encuesta20" class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true">ENCUESTA SEGURIDAD VIAL 2020</a>
            <a href="?view=usuario_evalua&mode=addencuestasistemahse" class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true">ENCUESTA DE PARTICIPACIÓN EN EL SISTEMA HSE</a>
          </div>
        </div>
       </div>
     </div>
   </div>
 </section>


 <?php include(HTML_DIR . 'overall/footer.php'); ?>
</body>
</html>
