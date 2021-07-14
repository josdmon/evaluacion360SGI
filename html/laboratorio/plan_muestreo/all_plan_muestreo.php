<?php include(HTML_DIR . 'overall/head.php'); ?>

 <body>
 <section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITLE ?></a></section>

 <?php include(HTML_DIR . '/overall/nav.php'); ?>

 <section class="mbr-section mbr-after-navbar">
 <div class="mbr-section__container container mbr-section__container--isolated">

   <?php
   if(isset($_GET['success'])) {
     echo '<div class="alert alert-dismissible alert-success">
       <strong>Activado!</strong> tu usuario ha sido activado correctamente.
     </div>';
   }
   if(isset($_GET['error'])) {
     echo '<div class="alert alert-dismissible alert-danger">
       <strong>Error!</strong></strong> no se ha podido activar tu usuario.
     </div>';
   }
   ?>
   <?php
if (isset($_POST['buscar'])) {
  $db = new Conexion();
  $filtro = $db->real_escape_string($_POST['buscar']);
  $sql = $db->query("SELECT * FROM parametros WHERE parametros LIKE '%$filtro%';");
  if ($db->rows($sql) > 0) {
    while ($parametros = $db->recorrer($sql)) {
      echo $parametros['subcontratados'], 'y la matriz es',$parametros['matriz'], 'y el parametro es',$parametros['parametros'];
    }
  }else{
    echo 'No se han encontrado resultados';
  }
}else{
  echo '';
}
?>

 <div class="row container">
    <div class="pull-right">
      <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
           <a class="mbr-buttons__btn btn btn-danger" href="?view=plan_muestreo&mode=before">CREAR PLAN MUESTREO</a>
       </li></ul></div>
        <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
            <a class="mbr-buttons__btn btn btn-danger active" href="?view=plan_muestreo">PLAN DE MUESTREO</a>
        </li></ul></div>
      </div>

     <ol class="breadcrumb">
       <li><a href="?view=index"><i class="fa fa-tags"></i> Categorías</a></li>
     </ol>
 </div>

 <div class="row categorias_con_foros">
   <div class="col-sm-12">
      <div class="row titulo_categoria">Plan de muestreo</div>

      <div class="row cajas" align="center">
       <form class="form-inline" action="?view=configforos&mode=add" method="POST" enctype="application/x-www-form-urlencoded">
            <div class="form-group">
              <input type="text" name="buscar" class="form-control" required placeholder="ID Plan de muestreo" />
            </div>
            <button type="submit" class="btn btn-primary">BUSCAR</button>
        </form>
       
        
   </div>
 </div>

 </div>
 </section>

 <?php include(HTML_DIR . 'overall/footer.php'); ?>

 </body>
</html>