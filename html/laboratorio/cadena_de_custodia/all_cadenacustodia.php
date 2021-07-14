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
    echo 'No se an encontrado resultados';
  }
}else{
  echo '';
}
?>

 <div class="row container">
    <div class="pull-right">
      <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
           <a class="mbr-buttons__btn btn btn-danger" href="?view=configforos">GESTIONAR FOROS</a>
       </li></ul></div>
        <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
            <a class="mbr-buttons__btn btn btn-danger active" href="?view=categorias">GESTIONAR CATEGORÍAS</a>
        </li></ul></div>
        <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
            <a class="mbr-buttons__btn btn btn-danger" href="?view=categorias&mode=add">CREAR CATEGORÍA</a>
        </li></ul></div>
      </div>

     <ol class="breadcrumb">
       <li><a href="?view=index"><i class="fa fa-tags"></i> Categorías</a></li>
     </ol>
 </div>

 <div class="row categorias_con_foros">
   <div class="col-sm-12">
      <div class="row titulo_categoria">Gestión de Categorías</div>

      <div class="row cajas" align="center">
       
       
        <div class="col-md-3"></div>
        <div class="col-md-6">
           <form class="form-horizontal" action="?view=configforos&mode=add" method="POST" enctype="application/x-www-form-urlencoded">
            <div class="form-group">
              <label for="exampleInputEmail1">NIT Cliente</label>
              <input type="text" name="buscar" class="form-control" placeholder="NIT Cliente" />
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">ID Plan de muestreo</label>
              <input type="text" name="buscar" class="form-control" placeholder="ID Plan de muestreo" id="buscar" />
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Proyecto</label>
              <input type="text" name="buscar" class="form-control" placeholder="Proyecto" id="buscar" />
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1"># Puntos de muestro</label>
              <input type="number" name="buscar" class="form-control" placeholder="Numero de Puntos" id="buscar" />
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Numero de Parametros</label>
              <input type="number" name="buscar" class="form-control" placeholder="Numero de Parametros" id="buscar" />
            </div>
            <button type="submit" class="btn btn-primary">SIGUIENTE</button>
           </form>
        </div>
      </div>
      <div class="col-md-3"></div>
   </div>
 </div>

 </div>
 </section>

 <?php include(HTML_DIR . 'overall/footer.php'); ?>

 </body>
</html>