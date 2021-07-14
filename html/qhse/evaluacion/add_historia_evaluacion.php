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
          <a class="mbr-buttons__btn btn btn-danger active" href="?view=historial_evaluacion&mode=add">CREAR NUEVO GRUPO DE EVALUACIÓN</a>
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
         <form class="form-horizontal" action="?view=historial_evaluacion&mode=add" method="POST" enctype="application/x-www-form-urlencoded">
         <?php
         if(false != $_evaluacion) {
          $HTML = '<table class="table table-striped table-condensed table-hover"><thead><tr>

          <th colspan="2">QUIÉN EVALUA </th>
          <th></th>
          <th colspan="2">A QUIÉN EVALUA</th>
          </tr></thead>
          <tbody>';$i=0;
          $db = new Conexion();
          $query = $db->query("SELECT * FROM historial_evaluacion");

          if ($rec = $db->recorrer($query)) {
            // code...
            do{
              $historia = $rec['id'];
            }while ($rec = $db->recorrer($query));
          }

          $sql = $db->query("SELECT * FROM resultadosevaluacion WHERE historial_evaluacion = $historia ORDER BY evaluador");
          if ($row = $db->recorrer($sql)){
              do {
     $i=$i+1;
                $estado = $row['comunicacion'] >= 1 ? '<span class="glyphicon glyphicon-ok-circle"> </span> Cerrado' : '<span class="glyphicon glyphicon-thumbs-down"> </span> Abierto';
                     $HTML .= '<tr>
                     <td><input name="evalua'.$i.'" type="hidden" value="'.$_users[$row['evaluador']]['id'].'">'.$_users[$row['evaluador']]['nombres'].'</td>
                     <td>'.$_users[$row['evaluador']]['apellidos'].'</td>
                     <td> <span class="glyphicon glyphicon-arrow-right"></span> </td>
                     <td><input name="usuario'.$i.'" type="hidden" value="'.$_users[$row['id_usuario']]['id'].'"><input name="area'.$i.'" type="hidden" value="'.$_users[$row['id_usuario']]['area'].'">'.$_users[$row['id_usuario']]['nombres'].'</td>
                     <td><input name="categoria'.$i.'" type="hidden" value="'.$_users[$row['id_usuario']]['categorias'].'">'.$_users[$row['id_usuario']]['apellidos'].'</td>

                   </tr>';
              } while ($row = $db->recorrer($sql));

               $HTML .= '</tbody></table>';
             } else {
           $HTML = '<div class="alert alert-dismissible alert-info"><strong>INFORMACIÓN: </strong> Todavía no existe ningún registro.</div>';
         }}
         $db->liberar($query);
         $db->liberar($sql);
         $db->close();
         echo $HTML;
         ?>
         <div class="form-group">
           <div class="col-lg-10 col-lg-offset-2">
             <input type="hidden" name="history" value="<?= $historia+1;?>">
             <input type="hidden" name="historial" value="ok">
             <input type="hidden" name="contador" value="<?= $i; ?>">
             <button type="submit" class="btn btn-primary" onclick="DeleteItem('¿Está seguro de crear un nuevo grupo de evaluación?','?view=historial_evaluacion&mode=add')">CREAR Nuevo grupo con  <?= $i; ?> Usuarios</button>
           </div>
         </div>
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
