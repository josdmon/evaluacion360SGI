 <?php include(HTML_DIR . 'overall/head.php'); ?>
ini_set('max_file_uploads', '50');

<body>
<section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITLE ?></a></section>

<?php include(HTML_DIR . '/overall/nav.php'); ?>

<section class="mbr-section mbr-after-navbar">
<div class="mbr-section__container container mbr-section__container--isolated">

  <?php
  if(isset($_GET['success'])) {
    echo '<div class="alert alert-dismissible alert-success">
      <strong>Completado!</strong> el foro ha sido creado.
    </div>';
  }
  if(isset($_GET['error'])) {
    if($_GET['error'] == 1) {
      echo '<div class="alert alert-dismissible alert-danger">
        <strong>Error!</strong></strong> todos los campos deben estar llenos.
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
            <a class="mbr-buttons__btn btn btn-danger" href="?view=recepcion">GESTIONAR RECEPCION</a>
        </li></ul></div>
        <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
            <a class="mbr-buttons__btn btn btn-danger active" href="?view=recepcion&mode=add">CREAR RECEPCION</a>
        </li></ul></div>
        <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
            <a class="mbr-buttons__btn btn btn-danger" href="?view=resultados">RESULTADOS</a>
        </li></ul></div>

    </div>

    <ol class="breadcrumb">
      <li><a href="?view=index"><i class="fa fa-comments"></i> Recepción</a></li>
    </ol>
</div>

<div class="row categorias_con_foros">
  <div class="col-sm-12">
      <div class="row titulo_categoria">Gestión de Recepción</div>
      <div class="row cajas">
        <div class="col-md-12">
          <form class="form-horizontal" action="?view=recepcion&mode=add" method="POST" enctype="multipart/form-data">
            <fieldset>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Codigo de la Muestra</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" maxlength="250" required name="codigo" placeholder="Codigo">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Proyecto</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" maxlength="250" name="proyecto" required placeholder="Proyecto de la muestra">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Plan de muestreo</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" maxlength="250" name="plan_muestreo" required placeholder="Proyecto de la muestra">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Cliente</label>
                <div class="col-lg-10">
                  <select name="cliente" class="form-control">
                    <?php
                      if(false != $_clientes) {
                        foreach($_clientes as $id_cliente => $array_cliente) {
                          echo '<option value="'.$id_cliente.'">'.$_clientes[$id_cliente]['user'].'</option>';
                        }
                      } else {
                        echo '<option value="0">No existe usuario</option>';
                      }
                    ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label">Selección de PDF</label>
                <div class="col-lg-10">
                  <input type="file" class="filestyle" required name="archivo">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label">FECHA</label>
                <div class="col-lg-10">
                  <input type="date" class="form-control" required name="fecha">
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                  <button type="reset" class="btn btn-default">Resetear</button>
                  <button type="submit" class="btn btn-primary">Crear</button>
                </div>
              </div>
            </fieldset>
          </form>
          <div class="row titulo_categoria">Añadir multiples códigos</div>
          <div class="form-group">
          <form action="importData.php" method="post" enctype="multipart/form-data" id="importFrm">
            <div class="form-group"></div>
            <input type="file" name="file" />
            <div class="form-group"></div>
            <input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORTAR CSV">
	    <button type="reset" class="btn btn-default">Resetear</button>
          </form>
          </div>
          <form action="up_multiple.php" method="post" enctype="multipart/form-data">
            <div class="form-group"></div>
            <input type="file" id="file" name="files[]" multiple="multiple"  />
            <div class="form-group"></div>
            <input type="submit" value="CARGAR ARCHIVOS" />
	    <button type="reset" class="btn btn-default">Resetear</button>
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
