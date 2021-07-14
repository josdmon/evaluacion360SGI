<?php include(HTML_DIR . 'overall/head.php'); ?>

<body>
<section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITLE ?></a></section>

 <?php include(HTML_DIR . '/overall/nav.php'); ?>
 <section class="mbr-section mbr-after-navbar">
   <div class="mbr-section__container container mbr-section__container--isolated">
   <div class="row container">
       <div class="pull-right">
        <?php
       /*if(isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['permisos'] == 3){
       echo '<div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
           <a class="mbr-buttons__btn btn btn-danger  "href="?view=gerente_de_personal">PUNTAJES EMPLEADOS</a>
         </li></ul></div>';
       }elseif(isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['area'] == 5){
       echo '<div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
               <a class="mbr-buttons__btn btn btn-danger" href="?view=evaluacion">GENERAR EVALUACION</a>
             </li></ul></div>';
       }*/
       ?>

         <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
           <a class="mbr-buttons__btn btn btn-danger" href="?view=usuario_evalua&mode=encuesta">ENCUESTA</a>
         </li></ul></div>

           <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
             <a class="mbr-buttons__btn btn btn-danger" href="?view=usuario_evalua&mode=evaluacion">EVALUACIÒN DE DESEMPEÑO</a>
           </li></ul></div>
         </div>

        <ol class="breadcrumb">
          <li><a href="?view=index"><i class="fa fa-tags"></i> H S E Q</a></li>
        </ol>
   </div>

    </div>
 </section>


 <?php include(HTML_DIR . 'overall/footer.php'); ?>
</body>
</html>
