<?php include(HTML_DIR . 'overall/head.php'); ?>

<body>
<section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITLE ?></a></section>

<?php include(HTML_DIR . '/overall/nav.php'); ?>

<section class="mbr-section mbr-after-navbar">
<div class="mbr-section__container container mbr-section__container--isolated">

  <?php
  if($success==1) {
    echo '<div class="alert alert-dismissible alert-success">
      <strong>Completado!</strong> La contraseña ha sido cambiada.
    </div>';
  }
  if($error == 1) {
    echo '<div class="alert alert-dismissible alert-danger">
      <strong>Error!</strong></strong> Contraseña incorrecta.
    </div>';
  }

  ?>

<div class="row categorias_con_foros">
  <div class="col-sm-12">
      <div class="row titulo_categoria">Verificar Contraseña </div>

      <div class="row cajas">
        <div class="col-md-12">
          <form class="form-horizontal" action="?view=perfil&mode=pass&id=<?php echo $_SESSION['app_id']; ?>" method="POST" enctype="application/x-www-form-urlencoded">
            <div class="form-group">
              <label for="inputEmail" class="col-lg-2 control-label">Contraseña</label>
              <div class="col-lg-10">
                <input type="password" class="form-control" name="pass" placeholder="Contraseña">
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button type="reset" class="btn btn-default">Resetear</button>
                <button type="submit" class="btn btn-primary">Verificar</button>
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
