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
           <a class="mbr-buttons__btn btn btn-danger" href="?view=recepcion">INGRESO</a>
        </li></ul></div>
        <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
            <a class="mbr-buttons__btn btn btn-danger active" href="?view=clientes">GESTIONAR CLIENTES</a>
        </li></ul></div>
        <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
            <a class="mbr-buttons__btn btn btn-danger" href="?view=clientes&mode=add">CREAR CLIENTE</a>
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
           if(false != $_clientes) {
            $HTML = '<table class="table"><thead><tr>
              <th>Nit</th>
              <th>Cliente</th>
              <th>Contacto</th>
              <th>Telefono</th>
              <th>E-mail</th>
              <th style="width: 15%">Acciones</th>
              </tr>
              </thead>
            <tbody>';
             foreach($_clientes as $id_cliente => $cliente_array) {
                 $HTML .= '<tr>
                   <td>'.$_clientes[$id_cliente]['nit'].'</td>  
                   <td>'.$_clientes[$id_cliente]['user'].'</td>
                   <td>'.$_clientes[$id_cliente]['contacto'].'</td>
                   <td>'.$_clientes[$id_cliente]['telefono'].'</td>
                   <td>'.$_clientes[$id_cliente]['email'].'</td>
                   <td>
                     <div class="btn-group">
                      <a href="#" class="btn btn-primary">Acciones</a>
                      <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="?view=clientes&mode=edit&id='.$_clientes[$id_cliente]['id_cliente'].'">Editar</a></li>
                        <li><a onclick="DeleteItem(\'¿Está seguro de eliminar este cliente?\',\'?view=clientes&mode=delete&id='.$_clientes[$id_cliente]['id_cliente'].'\')">Eliminar</a></li>
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