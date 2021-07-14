<?php include(HTML_DIR . 'overall/head.php'); ?>

<body>
<section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITLE ?></a></section>

<?php include(HTML_DIR . '/overall/nav.php'); ?>

<section class="mbr-section mbr-after-navbar">
 <div class="mbr-section__container container mbr-section__container--isolated">

 <?php
 if(isset($_GET['success'])) {
   echo '<div class="alert alert-dismissible alert-success">
     <strong>Realizado!</strong> el foro se ha borrado correctamente.
   </div>';
 }
 ?>

   <div class="row container">
       <div class="pull-right">
         <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
             <a class="mbr-buttons__btn btn btn-danger active" href="?view=subcontratados">GESTIÒN DE SUBCONTRATADOS</a>
         </li></ul></div>
         <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
           <a class="mbr-buttons__btn btn btn-danger" href="?view=subcontratados&mode=add">CREAR SUBCONTRATADOS</a>
         </li></ul></div>
    </div>

       <ol class="breadcrumb">
         <li><a href="?view=index"><i class="fa fa-comments"></i> Subcontratados</a></li>
       </ol>
   </div>

   <div class="row categorias_con_foros">
     <div class="col-sm-12">
         <div class="row titulo_categoria">Gestión de Subcontratados</div>

         <div class="row cajas">
           <div class="col-md-12">
             <form class="form-horizontal" action="?view=subcontratados&mode=edit&id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data">
               <fieldset>
                 <div class="form-group">
                   <label class="col-lg-2 control-label">FECHA RECIBIDO</label>
                   <div class="col-lg-4">
                     <input type="date" class="form-control" required name="fecha_r" value="<?php echo $_subcontratado[$_GET['id']]['fecha_r']; ?>">
                   </div>
                 </div>
                 <div class="form-group">
                   <label class="col-lg-2 control-label">FECHA ENTREGA</label>
                   <div class="col-lg-4">
                     <input type="date" class="form-control" required name="fecha_e" value="<?php echo $_subcontratado[$_GET['id']]['fecha_e']; ?>">
                   </div>
                 </div>
                 <input type="hidden" name="proveedor" value="<?php echo $_GET['p']; ?>">
                 <input type="hidden" name="fecha_s" value="<?php echo $_GET['f']; ?>">
                 <input type="hidden" name="contador" value="1">
                 <div class="form-group">
                   <div class="col-lg-10 col-lg-offset-2">
                     <button type="reset" class="btn btn-default">Resetear</button>
                     <button type="submit" class="btn btn-primary">Crear</button>
                   </div>
                 </div>
               </fieldset>
             </form>
           </div>
         </div>
     </div>
   </div>
 </div>
</section>

<?php include(HTML_DIR . 'overall/footer.php'); ?>

</body>
</html>
