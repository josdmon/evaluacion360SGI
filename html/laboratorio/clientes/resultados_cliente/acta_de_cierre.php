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
         <a class="mbr-buttons__btn btn btn-danger" href="?view=resultados_clientes&mode=orden_servicio">Orden de servicio</a>
      </li></ul></div>
          <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
              <a class="mbr-buttons__btn btn btn-danger" href="?view=resultados_clientes&mode=cadena_custodia">Cadena de custodia</a>
          </li></ul></div>
          <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
              <a class="mbr-buttons__btn btn btn-danger" href="?view=resultados_clientes&mode=recepcion">Recepción</a>
          </li></ul></div>
          <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
             <a class="mbr-buttons__btn btn btn-danger" href="?view=resultados_clientes&mode=resultados">Reporte de resultados</a>
          </li></ul></div>
          <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
              <a class="mbr-buttons__btn btn btn-danger" href="?view=resultados_clientes&mode=informe">Informe</a>
          </li></ul></div>
          <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
              <a class="mbr-buttons__btn btn btn-danger active" href="?view=resultados_clientes&mode=acta_de_cierre">Acta de cierre</a>
          </li></ul></div>

      </div>

     <ol class="breadcrumb">
       <li><a href="?view=index"><i class="fa fa-tags"></i> Acta de cierre</a></li>
     </ol>
 </div>

 <div class="row categorias_con_foros">
   <div class="col-sm-12">
       <div class="row titulo_categoria">Gestión de Acta de cierre y Orden de servicio</div>

       <div class="row cajas">
         <div class="col-md-12">
           <?php
              if(false != $_ordenservicio) {
               $HTML = '<table class="table"><thead><tr>
               <th>Codigo de orden de servicio</th>
               <th>Nombre de orden de servicio</th>
               <th>acta de cierre</th>
               <th>Fecha</th>
               </tr></thead>
               <tbody>';
                foreach($_ordenservicio as $id_orservicio => $content_array) {

                    $HTML .= '<tr>
                      <td>'.$_ordenservicio[$id_orservicio]['id'].'</td>
                      <td><a target=\"_blank\" href="views/app/images/archivos/orden_de_servicio/'.$_ordenservicio[$id_orservicio]['nombre_archivo'].'" <span class="glyphicon glyphicon-file" aria-hidden="true"></span>'.$_ordenservicio[$id_orservicio]['nombre_archivo'].'</a></td>
                      <td><a target=\"_blank\" href="views/app/images/archivos/acta_de_cierre/'.$_ordenservicio[$id_orservicio]['acta_cierre'].'" <span class="glyphicon glyphicon-file" aria-hidden="true"></span>'.$_ordenservicio[$id_orservicio]['acta_cierre'].'</a></td>
                      <td>'.$_ordenservicio[$id_orservicio]['fecha'].'</td>
                    </tr>';
                }
                $HTML .= '</tbody></table>';
              } else {
                $HTML = '<div class="alert alert-dismissible alert-info"><strong>INFORMACIÓN: </strong> Todavía no existe ningún registro.</div>';
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
