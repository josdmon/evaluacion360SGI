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
             <a class="mbr-buttons__btn btn btn-danger active" href="?view=plan_accion_hseq">PLAN DE ACCIÓN</a>
         </li></ul></div>
         <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
           <a class="mbr-buttons__btn btn btn-danger" href="?view=plan_accion_hseq&mode=add_gerencial">MEDIOS Y GERENCIALES</a>
         </li></ul></div>
         <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
             <a class="mbr-buttons__btn btn btn-danger" href="?view=plan_accion_hseq&mode=add_operativo">OPERATIVOS</a>
         </li></ul></div>
         <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
             <a class="mbr-buttons__btn btn btn-danger" href="?view=plan_accion_hseq&mode=add_general">GENERAL ÁREAS</a>
         </li></ul></div>
       </div>

       <ol class="breadcrumb">
         <li><a href="?view=index"><i class="fa fa-comments"></i> Plan de acción</a></li>
       </ol>
   </div>

   <div class="row categorias_con_foros">
     <div class="col-sm-12">
         <div class="row titulo_categoria">Gestión del plan de acción</div>

         <div class="row cajas">
           <div class="col-md-12">
             <?php
             if(false != $_planaccionhseq) {
              $HTML = '<table class="table table-striped table-hover table-condensed"><thead><tr>
              <th>Competencia</th>
              <th>Operativos</th>
              <th>Gerenciales</th>
              <th>General</th>
              </tr></thead>
              <tbody>';
               foreach($_planaccionhseq as $id_planacciongerencial => $content_array) {

                   $HTML .= '<tr>
                     <td>'.$_planaccionhseq[$id_planacciongerencial]['competencia'].'</td>
                     <td><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[$id_planacciongerencial]['operativos'].'" title=\"'.$_planaccionhseq[$id_planacciongerencial]['operativos'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[$id_planacciongerencial]['operativos'].'</a></td>

                     <td><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[$id_planacciongerencial]['mandos_m'].'" title=\"'.$_planaccionhseq[$id_planacciongerencial]['mandos_m'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[$id_planacciongerencial]['mandos_m'].'</a></td>

                     <td><a target=\"_blank\" href="views/app/images/archivos/plan_accion_hseq/'.$_planaccionhseq[$id_planacciongerencial]['general'].'" title=\"'.$_planaccionhseq[$id_planacciongerencial]['general'].'\"<span  aria-hidden="true"></span>'.$_planaccionhseq[$id_planacciongerencial]['general'].'</a></td>

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
