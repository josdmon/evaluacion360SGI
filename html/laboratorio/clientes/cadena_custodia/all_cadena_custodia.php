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
            <a class="mbr-buttons__btn btn btn-danger" href="?view=cadena_pdf&mode=add">CREAR CADENA DE CUSTODIA</a>
          </li></ul></div>
          <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
              <a class="mbr-buttons__btn btn btn-danger active" href="?view=cadena_pdf">GESTIÒN CADENA DE CUSTODIA</a>
          </li></ul></div>
          <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
              <a class="mbr-buttons__btn btn btn-danger" href="?view=recepcion">RECEPCIÒN</a>
          </li></ul></div>
        </div>

        <ol class="breadcrumb">
          <li><a href="?view=index"><i class="fa fa-comments"></i> Cadena de custodia</a></li>
        </ol>
    </div>

    <div class="row categorias_con_foros">
      <div class="col-sm-12">
          <div class="row titulo_categoria">Gestión de Cadena de custodia</div>

          <div class="row cajas">
            <div class="col-md-12">
              <?php
              if(false != $_cadena) {
               $HTML = '<table class="table table-striped table-hover table-condensed"><thead><tr>
               
               <th>Nombre de la cadena</th>
               <th>Cliente</th>
               <th>Nombre del archivo</th>
               <th>Fecha</th>
               <th style="width: 20%">Acciones</th>
               </tr></thead>
               <tbody>';
                foreach($_cadena as $id_cadena => $content_array) {
                    
                    $HTML .= '<tr>
                      
                      <td>'.$_cadena[$id_cadena]['nombre_cadena'].'</td>
                      <td>'.$_clientes[$_cadena[$id_cadena]['id_cliente']]['user'].'</td>
                      <td><a target=\"_blank\" href="views/app/images/archivos/cadena_de_custodia/'.$_cadena[$id_cadena]['nombre_archivo'].'" <span class="glyphicon glyphicon-file" aria-hidden="true"></span>'.$_cadena[$id_cadena]['nombre_archivo'].'</a></td>
                      <td>'.$_cadena[$id_cadena]['fecha'].'</td>
                      
                      <td>
                        <div class="btn-group">
                         <a href="#" class="btn btn-primary">Acciones</a>
                         <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>
                         <ul class="dropdown-menu">
                           <li><a href="?view=recepcion&mode=edit&id='.$_cadena[$id_cadena]['id'].'">Editar</a></li>
                           <li><a onclick="DeleteItem(\'¿Está seguro de eliminar esta categoría?\',\'?view=cadena_pdf&mode=delete&id='.$_cadena[$id_cadena]['id'].'\')">Eliminar</a></li>
                         </ul>
                       </div>
                      </td>
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