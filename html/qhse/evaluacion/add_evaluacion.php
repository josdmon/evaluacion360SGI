 <?php include(HTML_DIR . 'overall/head.php'); ?>

<body>
  <script type="text/javascript">

        function crearDin(){

           var padre = document.getElementById("padre");
           var input = document.createElement("INPUT");
           input.type = 'text';

           padre.appendChild(input);
        }
        window.onload = function(){

           var btnAdd = document.getEmentById("#btn_agregar");
           btnAdd.onclick = crearDin;
        }

  </script>

<section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITLE ?></a></section>

<?php include(HTML_DIR . '/overall/nav.php'); ?>

<section class="mbr-section mbr-after-navbar">
<div class="mbr-section__container container mbr-section__container--isolated">

  <?php
  $db = new Conexion();
  $query = $db->query("SELECT * FROM historial_evaluacion");

  if ($rec = $db->recorrer($query)) {
    // code...
    do{
      $historia = $rec['id'];
    }while ($rec = $db->recorrer($query));
  }
  $db->liberar($query);
  $db->close();

  if(isset($_GET['success'])) {
    echo '<div class="alert alert-dismissible alert-success">
      <strong>Completado!</strong>
    </div>';
  }
  if(isset($_GET['error'])) {
    if($_GET['error'] == 4) {
      echo '<div class="alert alert-dismissible alert-danger">
        <strong>Error!</strong></strong> Ya existe esta relación de usuarios a evaluar.
      </div>';
    } else {
      echo '<div class="alert alert-dismissible alert-danger">
        <strong>Error!</strong></strong> debe existir una categoría para asociar al foro.
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
           <a class="mbr-buttons__btn btn btn-danger active" href="?view=evaluacion&mode=add">CREAR ROL DE EVALUADORES</a>
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
      <div class="row titulo_categoria">Crear rol de evaluadores</div>

      <div class="row cajas">
        <div class="col-md-12">
          <form class="form-horizontal" action="?view=evaluacion&mode=add" method="POST" enctype="application/x-www-form-urlencoded">
            <fieldset>

              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label"><Cliente>Evaluador</Cliente></label>
                <div class="col-lg-10">
                  <select name="evalua" class="form-control">
                    <?php
                      if(false != $_users) {
                        foreach($_users as $id_evaluador => $array_evaluador) {
                          echo '<option value="'.$id_evaluador.'">'.$_users[$id_evaluador]['nombres'].' '.$_users[$id_evaluador]['apellidos'].'</option>';
                        }
                      } else {
                        echo '<option value="0">No existe usuario</option>';
                      }
                    ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Usuario a evaluar</label>

                <div class="col-lg-10">
                  <select name="usuario" class="form-control">
                    <?php
                      if(false != $_users) {
                        foreach($_users as $id_evaluador => $array_evaluador) {
                          echo '<option value="'.$id_evaluador.'">'.$_users[$id_evaluador]['nombres'].' '.$_users[$id_evaluador]['apellidos'].'</option>';
                        }
                      } else {
                        echo '<option value="0">No existe usuario</option>';
                      }
                    ?>
                  </select>
                </div>
              </div>
              <input type="hidden" name="historial" value="<?= $historia; ?>">

              <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                  <button type="reset" class="btn btn-default">Resetear</button>
                  <button type="submit" class="btn btn-primary">Crear</button>
                </div>
              </div>
            </fieldset>
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
