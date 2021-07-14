<?php include(HTML_DIR . 'overall/head.php'); ?>

<body>
<section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITLE ?></a></section>

 <?php include(HTML_DIR . '/overall/nav.php'); ?>
 <section class="mbr-section mbr-after-navbar">
   <div class="mbr-section__container container mbr-section__container--isolated">
     <div class="row container">
      <div class="pull-right">
        <div class="pull-right">
          <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
             <a class="mbr-buttons__btn btn btn-danger" href="?view=hseq&mode=encuesta">ENCUESTA</a>
          </li></ul></div>

         <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
           <a class="mbr-buttons__btn btn btn-danger active" href="?view=hseq&mode=evaluacion">EVALUACIÒN DE DESEMPEÑO</a>
         </li></ul></div>
        </div>
    </div>
      <ol class="breadcrumb">
        <li><a href="?view=hseq&mode=evaluacion"><i class="fa fa-tags"></i> H S E Q</a></li>
      </ol>
     </div>
     <div class="row categorias_con_foros">
       <div class="col-sm-12">
        <div class="row titulo_categoria">Gestión de evaluaciòn</div>
        <div class="row cajas">
          <div class="col-md-12">
            <a class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true" href="?view=evaluacion">GENERAR EVALUACION</a>
            <a class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true" href="?view=plan_accion_hseq">PLAN DE ACCIÓN</a>
            <a class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true" href="?view=gerente">PUNTAJE GENERAL EMPRESA y ÁREAS</a>
            <a class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true" href="?view=user_informe">INFORMES</a>
          </div>
        </div>
       </div>
     </div>
  </div>
 </section>


 <?php include(HTML_DIR . 'overall/footer.php'); ?>
</body>
</html>
