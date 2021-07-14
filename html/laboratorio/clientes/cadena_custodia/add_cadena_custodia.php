 <?php include(HTML_DIR . 'overall/head.php'); ?>

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
            <a class="mbr-buttons__btn btn btn-danger" href="?view=cadena_pdf">GESTIÒN CADENA DE CUSTODIA</a>
        </li></ul></div>
        <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
            <a class="mbr-buttons__btn btn btn-danger active" href="?view=cadena_pdf&mode=add">CREAR CADENA DE CUSTODIA</a>
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
          <form class="form-horizontal" action="?view=cadena_pdf&mode=add" method="POST" enctype="multipart/form-data">
            <fieldset>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Nombre de la cadena</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" maxlength="250" required name="codigo" placeholder="Codigo">
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
