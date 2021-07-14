<?php include(HTML_DIR . 'overall/head.php'); ?>

<body>
<section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITLE ?></a></section>

<?php include(HTML_DIR . '/overall/nav.php'); ?>

<section class="mbr-section mbr-after-navbar">
<div class="mbr-section__container container mbr-section__container--isolated">

 <?php
 if(isset($_GET['success'])) {
   echo '<div class="alert alert-dismissible alert-success">
     <strong>Completado!</strong>
   </div>';
 }
 if(isset($_GET['error'])) {
   if($_GET['error'] == 4) {
     echo '<div class="alert alert-dismissible alert-danger">
       <strong>Error!</strong></strong>
     </div>';
   } else {
     echo '<div class="alert alert-dismissible alert-danger">
       <strong>Error!</strong></strong>...
     </div>';
   }
 }
 ?>

<div class="row container">
 <div class="pull-right">
      <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
          <a class="mbr-buttons__btn btn btn-danger" href="?view=evaluacion">GESTIÓN EVALUACIÓN</a>
      </li></ul></div>
      <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
          <a class="mbr-buttons__btn btn btn-danger" href="?view=evaluacion&mode=add">CREAR ROL DE EVALUADORES</a>
      </li></ul></div>
      <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
          <a class="mbr-buttons__btn btn btn-danger active" href="?view=evaluacion&mode=addHist">CREAR GRUPO DE EVALUACIÓN</a>
      </li></ul></div>
   </div>

   <ol class="breadcrumb">
     <li><a href="?view=hseq&mode=evaluacion"><i class="fa fa-comments"></i> Evaluación</a></li>
   </ol>
</div>

<div class="row categorias_con_foros">
 <div class="col-sm-12">
     <div class="row titulo_categoria">Crear Historial: Al crear un nuevo grupo se seleccionaran nuevamente los roles de usuarios a evaluar.</div>

     <div class="row cajas">
       <div class="col-md-12">

           <fieldset>
             <div class="form-group">
               <div class="col-lg-10 col-lg-offset-2">
                 <button onclick="DeleteItem('¿Está seguro de crear un nuevo grupo de evaluación?','?view=historial_evaluacion&mode=add&historial=ok')">CREAR</button>
               </div>
             </div>
           </fieldset>

       </div>
     </div>
 </div>
</div>

</div>
</section>

<?php include(HTML_DIR . 'overall/footer.php'); ?>

</body>
</html>
