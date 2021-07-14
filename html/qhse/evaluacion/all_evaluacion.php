<?php include(HTML_DIR . 'overall/head.php'); ?>
<body>
<section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITLE ?></a></section>

<?php include(HTML_DIR . '/overall/nav.php'); ?>

<section class="mbr-section mbr-after-navbar">
  <div class="mbr-section__container container mbr-section__container--isolated">

  <?php
  if(isset($_GET['success'])) {
    echo '<div class="alert alert-dismissible alert-success">
      <strong>Realizado!</strong> la relación de usuarios a evaluar se ha borrado correctamente.
    </div>';
  }
  ?>

    <div class="row container">
        <div class="pull-right">

           <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
               <a class="mbr-buttons__btn btn btn-danger active" href="?view=evaluacion">GESTION EVALUACION</a>
           </li></ul></div>
           <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
               <a class="mbr-buttons__btn btn btn-danger" href="?view=evaluacion&mode=add">CREAR GRUPO DE EVALUADORES</a>
           </li></ul></div>
           <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
               <a class="mbr-buttons__btn btn btn-danger" href="?view=historial_evaluacion&mode=add">CREAR NUEVO GRUPO DE EVALUACIÓN</a>
           </li></ul></div>
        </div>

        <ol class="breadcrumb">
          <li><a href="?view=hseq&mode=evaluacion"><i class="fa fa-comments"></i> Evaluación</a></li>
        </ol>
    </div>

    <div class="row categorias_con_foros">
      <div class="col-sm-12">
          <div class="row titulo_categoria">Gestión de Evaluación</div>

          <div class="row cajas">
            <div class="col-md-12">
              <?php
              if(false != $_evaluacion) {
               $HTML = '<table class="table table-striped table-condensed table-hover"><thead><tr>

               <th colspan="2">QUIÉN EVALUA </th>
               <th></th>
               <th colspan="2">A QUIÉN EVALUA</th>
               <th>ESTADO</th>
               <th>OPCIONES</th>

               </tr></thead>
               <tbody>';
               $db = new Conexion();
               $id = $_GET['id'];
               $sql = $db->query("SELECT * FROM resultadosevaluacion WHERE historial_evaluacion = $id  ORDER BY evaluador ");
               if ($row = $db->recorrer($sql)){
                   do {

                     $estado = $row['comunicacion'] >= 1 ? '<span class="glyphicon glyphicon-ok-circle"> </span> Cerrado' : '<span class="glyphicon glyphicon-thumbs-down"> </span> Abierto';
                          $HTML .= '<tr>
                          <td>'.$_users[$row['evaluador']]['nombres'].'</td>
                          <td>'.$_users[$row['evaluador']]['apellidos'].'</td>
                          <td> <span class="glyphicon glyphicon-arrow-right"></span> </td>
                          <td>'.$_users[$row['id_usuario']]['nombres'].'</td>
                          <td>'.$_users[$row['id_usuario']]['apellidos'].'</td>
                          <td>'. $estado .'</td>
                          <td>
                            <a onclick="DeleteItem(\'¿Está seguro de eliminar esta categoría?\',\'?view=evaluacion&mode=delete&evaluador='.$row['evaluador'].'&id_user='.$row['id_usuario'].'&history='.$id.'\')">
                              <span class="glyphicon glyphicon-remove-circle"> Eliminar</span>
                            </a>
                          </td>
                        </tr>';
                   } while ($row = $db->recorrer($sql));

                    $HTML .= '</tbody></table>';
                  } else {
                $HTML = '<div class="alert alert-dismissible alert-info"><strong>INFORMACIÓN: </strong> Todavía no existe ningún registro.</div>';
              }}
              $db->liberar($sql);
              $db->close();
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
