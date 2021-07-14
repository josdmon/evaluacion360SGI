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
              <a class="mbr-buttons__btn btn btn-danger active" href="?view=resultados">GESTIÒN DE RESULTADOS</a>
          </li></ul></div>
          <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
            <a class="mbr-buttons__btn btn btn-danger" href="?view=resultados&mode=add">CREAR RESULTADO</a>
          </li></ul></div>
          <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
              <a class="mbr-buttons__btn btn btn-danger" href="?view=resultados&mode=anexo">CREAR ANEXO</a>
          </li></ul></div>
          <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
              <a class="mbr-buttons__btn btn btn-danger" href="?view=recepcion">GESTÒN DE RECEPCIÒN</a>
          </li></ul></div>
        </div>

        <ol class="breadcrumb">
          <li><a href="?view=index"><i class="fa fa-comments"></i> Resultados</a></li>
        </ol>
    </div>

    <div class="row categorias_con_foros">
      <div class="col-sm-12">
          <div class="row titulo_categoria">Gestión de Recepción</div>

          <div class="row cajas">
            <div class="col-md-12">
              <?php
              if(false != $_recepcion) {
               $HTML = '<table class="table table-striped table-hover table-condensed"><thead><tr>
               <th>Codigo de la Muestra</th>
               <th>proyecto</th>
               <th>Plan de muestreo</th>
               <th>Cliente</th>
               <th>Nombre del archivo</th>
               <th>Anexo</th>
               <th>Fecha</th>
               </tr></thead>
               <tbody>';
                foreach($_recepcion as $id_recepcion => $content_array) {

                    $HTML .= '<tr>
                      <td>'.$_recepcion[$id_recepcion]['codigo'].'</td>
                      <td>'.$_recepcion[$id_recepcion]['proyecto'].'</td>
                      <td>'.$_recepcion[$id_recepcion]['plan_muestreo'].'</td>
                      <td>'.$_clientes[$_recepcion[$id_recepcion]['id_cliente']]['user'].'</td>
                      <td><a target=\"_blank\" href="views/app/images/archivos/resultados/'.$_recepcion[$id_recepcion]['resultados'].'" title=\"'.$_recepcion[$id_recepcion]['nombre_archivo'].'\"<span class="glyphicon glyphicon-file" aria-hidden="true"></span>'.$_recepcion[$id_recepcion]['resultados'].'</a></td>
                      <td><a target=\"_blank\" href="views/app/images/archivos/resultados/'.$_recepcion[$id_recepcion]['anexo'].'" title=\"'.$_recepcion[$id_recepcion]['anexo'].'\"<span class="glyphicon glyphicon-file" aria-hidden="true"></span>'.$_recepcion[$id_recepcion]['anexo'].'</a></td>
                      <td>'.$_recepcion[$id_recepcion]['f_resultados'].'</td>
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
