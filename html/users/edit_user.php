<?php include(HTML_DIR . 'overall/head.php'); ?>

<body>
<section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITLE ?></a></section>

<?php include(HTML_DIR . '/overall/nav.php'); ?>

<section class="mbr-section mbr-after-navbar">
<div class="mbr-section__container container mbr-section__container--isolated">

  <?php
  if(isset($_GET['success'])) {
    echo '<div class="alert alert-dismissible alert-success">
      <strong>Completado!</strong> El cliente ha sido creada.
    </div>';
  }
  if(isset($_GET['error'])) {
    echo '<div class="alert alert-dismissible alert-danger">
      <strong>Error!</strong></strong> los campos no puede estar vacío.
    </div>';
  }
  ?>

<div class="row container">
   <div class="pull-right">

        <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
            <a class="mbr-buttons__btn btn btn-danger" href="?view=user">GESTION USUARIOS</a>
        </li></ul></div>
        <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
            <a class="mbr-buttons__btn btn btn-danger active" href="?view=user&mode=add">CREAR USUARIO</a>
        </li></ul></div>
     </div>

    <ol class="breadcrumb">
      <li><a href="?view=index"><i class="fa fa-tags"></i> Clientes</a></li>
    </ol>
</div>

<div class="row categorias_con_foros">
  <div class="col-sm-12">
      <div class="row titulo_categoria">Gestión de Clientes</div>

      <div class="row cajas">
        <div class="col-md-12">
          <form class="form-horizontal" action="?view=user&mode=edit&id=<?php echo $_GET['id']; ?>" method="POST" enctype="application/x-www-form-urlencoded">
            <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
            <fieldset>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">User</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="user" placeholder="Nombre punto apellido" value="<?php echo $_users[$_GET['id']]['user']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Nombre</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="nombre" placeholder="Nombre del empleado" value="<?php echo $_users[$_GET['id']]['nombres']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Apellido</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="apellido" placeholder="Apellido del empleado" value="<?php echo $_users[$_GET['id']]['apellidos']; ?>">
                </div>
              </div>

              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-10">
                  <input type="email" class="form-control" name="email" placeholder="Correo electronico" value="<?php echo $_users[$_GET['id']]['email']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Cedula de ciudadanìa</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="cedula" placeholder="Numero c.c." value="<?php echo $_users[$_GET['id']]['cedula']; ?>">
                </div>
              </div>


              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Areà</label>
                <div class="col-lg-10">
                  <select name="area" class="form-control">
                    <?php

                    foreach($_area as $id_area => $array_area) {

                      if($id_area == $_users[$_GET['id']]['area']){
                        echo '<option value="'.$id_area.'" selected>'.$_area[$id_area]['area'].'</option>';
                      } else {
                        echo '<option value="'.$id_area.'">'.$_area[$id_area]['area'].'</option>';
                      }
                    }
                    ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Mando medio / operativo</label>
                <div class="col-lg-10">
                  <select name="categorias" class="form-control">
                    <?php

                    foreach($_categorias as $id_categorias => $array_categorias) {

                      if($id_categorias == $_users[$_GET['id']]['categorias']){
                        echo '<option value="'.$id_categorias.'" selected>'.$_categorias[$id_categorias]['nombre'].'</option>';
                      } else {
                        echo '<option value="'.$id_categorias.'">'.$_categorias[$id_categorias]['nombre'].'</option>';
                      }
                    }
                    ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                  <button type="reset" class="btn btn-default">Resetear</button>
                  <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
  </div>
</div>
<div class="row categorias_con_foros">
  <div class="col-sm-12">
      <div class="row titulo_categoria">Cambiar Password</div>

      <div class="row cajas">
        <div class="col-md-12">
            <form class="form-horizontal" action="?view=user&mode=editPass&id=<?php echo $_GET['id']; ?>" method="POST" enctype="application/x-www-form-urlencoded">
              <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Password</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="pass" placeholder="Password" value="<?php echo $_users[$_GET['id']]['pass']; ?>">
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                  <button type="reset" class="btn btn-default">Resetear</button>
                  <button type="submit" class="btn btn-primary">Cambiar Password</button>
                </div>
              </div>
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
