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
           <a class="mbr-buttons__btn btn btn-danger active" href="?view=plan_muestreo&mode=parametros">PARAMETROS</a>
       </li></ul></div>
        <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
            <a class="mbr-buttons__btn btn btn-danger" href="?view=plan_muestreo&mode=before">CREAR PLAN DE MUESTREO</a>
        </li></ul></div>
        <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
            <a class="mbr-buttons__btn btn btn-danger" href="?view=plan_muestreo">PLAN DE MUESTREO</a>
        </li></ul></div>
      </div>

     <ol class="breadcrumb">
       <li><a href="?view=index"><i class="fa fa-tags"></i>Plan de muestreo</a></li>
     </ol>
 </div>

 <div class="row categorias_con_foros">
   <div class="col-sm-12">
      <div class="row titulo_categoria">PARAMETROS</div>

      <div class="row cajas" align="center">
        <form class="form-inline" action="?view=configforos&mode=add" method="POST" enctype="application/x-www-form-urlencoded">
          <div class="form-group">
            <input type="text" name="buscar" class="form-control" required placeholder="ID del parametro" />
          </div>
          <button type="submit" class="btn btn-primary">BUSCAR</button>
        </form>
        <div class="col-md-12">
          <?php
          if(false != $_parametros) {
           $HTML = '<table class="table"><thead><tr>
           <th style="width: 10%">Id</th>
           <th>-</th>
           <th>Acreditados</th>
           <th>Matriz</th>
           <th>Parametros</th>
           <th>Metodo</th>
           <th>Tecnica</th>
           </tr></thead>
           <tbody>';
            foreach($_parametros as $id_parametros => $content_array) {
              $acreditados = $_parametros[$id_parametros]['acreditados'] == 1 ? 'Acreditado' : '';
                $HTML .= '<tr>
                  <td>'.$_parametros[$id_parametros]['id'].'</td>
                  <td>'.$_parametros[$id_parametros]['subcontratados'].'</td>
                  <td>'.$acreditados.'</td>
                  <td>'.$_parametros[$id_parametros]['matriz'].'</td>
                  <td>'.$_parametros[$id_parametros]['parametros'].'</td>
                  <td>'.$_parametros[$id_parametros]['metodo'].'</td>
                  <td>'.$_parametros[$id_parametros]['tecnica'].'</td>
                </tr>';
            }
            $HTML .= '</tbody></table>';
          } else {
            $HTML = '<div class="alert alert-dismissible alert-info"><strong>INFORMACIÓN: </strong> Todavía no existe ningún foro.</div>';
          }
          echo $HTML;
          ?>
        </div>
       
      </div>
   </div>

 </div>
 </section>

 <?php include(HTML_DIR . 'overall/footer.php'); ?>

 </body>
</html>