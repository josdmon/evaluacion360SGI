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

 <div class="row container">
    <div class="pull-right">
         <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
            <a class="mbr-buttons__btn btn btn-danger active" href="?view=user">GESTION USUARIOS</a>
        </li></ul></div>
        <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
            <a class="mbr-buttons__btn btn btn-danger" href="?view=user&mode=add">CREAR USUARIO</a>
        </li></ul></div>
      </div>

     <ol class="breadcrumb">
       <li><a href="?view=index"><i class="fa fa-tags"></i> Clientes</a></li>
     </ol>
 </div>

 <div class="row categorias_con_foros">
   <div class="col-sm-12">
       <div class="row titulo_categoria">Gestión de Clientes</div>

       <div class="row cajas">
         <div class="col-md-12">
           <?php
           if(false != $_users) {
            $HTML = '<table class="table table-striped table-hover table-condensed"><thead><tr>
              <th style="width: 2%">Id</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Cedula</th>
              <th>E-mail</th>
              <th>area</th>
              <th style="width: 15%">Acciones</th>
              </tr>
              </thead>
            <tbody>';
             foreach($_users as $id_user => $cliente_array) {
                 $HTML .= '<tr>
                   <td>'.$_users[$id_user]['id'].'</td>
                   <td>'.$_users[$id_user]['nombres'].'</td>
                   <td>'.$_users[$id_user]['apellidos'].'</td>
                   <td>'.$_users[$id_user]['cedula'].'</td>
                   <td>'.$_users[$id_user]['email'].'</td>
                   <td>'.$_area[$_users[$id_user]['area']]['area'].'</td>
                   <td>
                     <div class="btn-group">
                      <a href="#" class="btn btn-primary">Acciones</a>
                      <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="?view=user&mode=edit&id='.$_users[$id_user]['id'].'">Editar</a></li>
                        <li><a onclick="DeleteItem(\'¿Está seguro de eliminar este cliente?\',\'?view=user&mode=delete&id='.$_users[$id_user]['id'].'\')">Eliminar</a></li>
                      </ul>
                    </div>
                   </td>
                 </tr>';
             }
             $HTML .= '</tbody></table>';
           } else {
             $HTML = '<div class="alert alert-dismissible alert-info"><strong>INFORMACIÓN: </strong> Todavía no existe ningun cliente.</div>';
           }
           echo $HTML;
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
