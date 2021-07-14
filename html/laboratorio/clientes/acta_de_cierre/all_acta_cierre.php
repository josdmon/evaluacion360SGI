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
            <a class="mbr-buttons__btn btn btn-danger active" href="?view=cierre">GESTIÒN DE ORDEN DE SERVICIO Y ACTA DE CIERRE</a>
        </li></ul></div>
        <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
            <a class="mbr-buttons__btn btn btn-danger" href="?view=cierre&mode=add">CREAR ACTA DE CIERRE</a>
        </li></ul></div>
        <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
            <a class="mbr-buttons__btn btn btn-danger" href="?view=informes">INFORMES</a>
        </li></ul></div>
        </div>

        <ol class="breadcrumb">
          <li><a href="?view=index"><i class="fa fa-comments"></i> Resultados</a></li>
        </ol>
    </div>

    <div class="row categorias_con_foros">
      <div class="col-sm-12">
          <div class="row titulo_categoria">Gestión de Acta de cierre y Orden de servicio</div>

          <div class="row cajas">
            <div class="col-md-12">
              <?php
              if(false != $_allordenservicio) {
               $HTML = '<table class="table"><thead><tr>
               <th>Codigo de orden de servicio</th>
               <th>Cliente</th>
               <th>Nombre de orden de servicio</th>
               <th>acta de cierre</th>
               <th>Fecha</th>
               </tr></thead>
               <tbody>';
                foreach($_allordenservicio as $id_orservicio => $content_array) {
                    
                    $HTML .= '<tr>
                      <td>'.$_allordenservicio[$id_orservicio]['id'].'</td>
                      <td>'.$_clientes[$_allordenservicio[$id_orservicio]['id_cliente']]['user'].'</td>
                      <td><a target=\"_blank\" href="views/app/images/archivos/orden_de_servicio/'.$_allordenservicio[$id_orservicio]['nombre_archivo'].'" <span class="glyphicon glyphicon-file" aria-hidden="true"></span>'.$_allordenservicio[$id_orservicio]['nombre_archivo'].'</a></td>
                      <td><a target=\"_blank\" href="views/app/images/archivos/acta_de_cierre/'.$_allordenservicio[$id_orservicio]['acta_cierre'].'" <span class="glyphicon glyphicon-file" aria-hidden="true"></span>'.$_allordenservicio[$id_orservicio]['acta_cierre'].'</a></td>
                      <td>'.$_allordenservicio[$id_orservicio]['fecha'].'</td>
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