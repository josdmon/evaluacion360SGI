<?php include(HTML_DIR . 'overall/head.php'); ?>

 <body>
 <section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITLE ?></a></section>

 <?php include(HTML_DIR . '/overall/nav.php'); ?>

 <section class="mbr-section mbr-after-navbar">
 <div class="mbr-section__container container mbr-section__container--isolated">

   <?php
   $history = $_GET['id'];
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
            <a class="mbr-buttons__btn btn btn-danger active" href="?view=gerente_de_personal">Informe</a>
        </li></ul></div>
      </div>

     <ol class="breadcrumb">
       <li><a href="?view=index"><i class="fa fa-tags"></i> Iformes</a></li>
     </ol>
 </div>

 <div class="row categorias_con_foros">
   <div class="col-sm-12">
       <div class="row titulo_categoria">Gestión de Informes de resultados evaluación 360</div>

       <div class="row cajas">
         <div class="col-md-12">
           <?php
           if(false != $_usereva) {
            $HTML = '<table class="table"><thead><tr>

              <th>Nombre</th>
              <th>Apellido</th>
              <th>área</th>
              <th>Email</th>
              <th style="width: 10%">Acciones</th>
              <th style="width: 10%">Enviar Correo</th>
              </tr>
              </thead>
            <tbody>';
             foreach($_usereva as $id_user => $cliente_array) {
                 $HTML .= '<tr>

                   <td>'.$_usereva[$id_user]['nombres'].'</td>
                   <td>'.$_usereva[$id_user]['apellidos'].'</td>
                   <td>'.$_area[$_usereva[$id_user]['area']]['area'].'</td>
                   <td>'.$_usereva[$id_user]['email'].'</td>
                   <td>
                     <a  target=\"_blank\" href="?view=user_informe&mode=informe&usr='.$_usereva[$id_user]['id'].'&id='.$history.'"" title=\"'.$_usereva[$id_user]['nombres'].'\">
                       <span class="glyphicon glyphicon-list-alt"> PDF</span>
                     </a>
                   </td>
                   <td style="text-align:center;"><a><span class="glyphicon glyphicon-envelope"></a></td>
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
