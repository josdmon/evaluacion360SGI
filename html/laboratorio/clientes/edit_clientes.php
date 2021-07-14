<?php include(HTML_DIR . 'overall/head.php'); ?>

<body>
<section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITLE ?></a></section>

<?php include(HTML_DIR . '/overall/nav.php'); ?>

<section class="mbr-section mbr-after-navbar">
<div class="mbr-section__container container mbr-section__container--isolated">

  <?php
  if(isset($_GET['success'])) {
    echo '<div class="alert alert-dismissible alert-success">
      <strong>Compleato!</strong> la categoría  ha sido editada.
    </div>';
  }
  if(isset($_GET['error'])) {
    echo '<div class="alert alert-dismissible alert-danger">
      <strong>Error!</strong></strong> el nombre de la categoría no puede estar vacío.
    </div>';
  }
  ?>
 
<div class="row container">
   <div class="pull-right">
        <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
           <a class="mbr-buttons__btn btn btn-danger" href="?view=recepcion">INGRESO</a>
        </li></ul></div>
        <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
            <a class="mbr-buttons__btn btn btn-danger" href="?view=clientes">GESTIONAR CLIENTES</a>
        </li></ul></div>
        <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
            <a class="mbr-buttons__btn btn btn-danger" href="?view=clientes&mode=add">CREAR CLIENTE</a>
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
          <form class="form-horizontal" action="?view=clientes&mode=edit&id=<?php echo $_GET['id']; ?>" method="POST" enctype="application/x-www-form-urlencoded">
            <fieldset>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Cliente</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="user" placeholder="Nombre de cliente" value="<?php echo $_clientes[$_GET['id']]['user']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Contacto</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="contacto" placeholder="Nombre de contacto" value="<?php echo $_clientes[$_GET['id']]['contacto']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Dirección</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="direccion" placeholder="Numero de la dirección" value="<?php echo $_clientes[$_GET['id']]['direccion']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Telefono</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="telefono" placeholder="Numero de contacto" value="<?php echo $_clientes[$_GET['id']]['telefono']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Ciudad</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="ciudad" placeholder="Nombre de la Ciudad" value="<?php echo $_clientes[$_GET['id']]['ciudad']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Departamento</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="departamento" placeholder="Nombre del Departamento" value="<?php echo $_clientes[$_GET['id']]['departamento']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">E-mail</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="email" placeholder="Nombre del Correo" value="<?php echo $_clientes[$_GET['id']]['email']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Nit</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="nit" placeholder="Numero del NIT" value="<?php echo $_clientes[$_GET['id']]['nit']; ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Password</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" name="pass" placeholder="Numero del NIT" value="<?php echo $_clientes[$_GET['id']]['pass']; ?>">
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                  <button type="reset" class="btn btn-default">Resetear</button>
                  <button type="submit" class="btn btn-primary">Editar</button>
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