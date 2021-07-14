<?php include(HTML_DIR . 'overall/head.php'); ?>

<body>
<section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITLE ?></a></section>

<?php include(HTML_DIR . '/overall/nav.php'); ?>

<section class="mbr-section mbr-after-navbar">
<div class="mbr-section__container container mbr-section__container--isolated">

<div class="row container">
  <div class="pull-right">
    <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
         <a class="mbr-buttons__btn btn btn-danger" href="?view=perfil&mode=edit&id=<?php echo $_SESSION['app_id']; ?>">EDITAR PERFIL</a>
     </li></ul></div>
    </div>

    <ol class="breadcrumb">
      <li><a href="?view=index"><i class="fa fa-user"></i> Usuarios </a></li>
    </ol>
</div>

<div class="row categorias_con_foros">
  <div class="col-sm-12">
      <div class="row titulo_categoria">Perfil de <?php $id_usuario = $_SESSION['app_id']; echo $_users[$id_usuario]['user']; ?> </div>

      <div class="row cajas">
        <div class="col-md-2">
          <center>

            <img src="views/app/images/users/default.jpg" class="thumbnail" height="120" />

            <strong><?php echo $_users[$id_usuario]['user']; ?></strong>


        </center>



        </div>
        <div class="col-md-10">
          <blockquote>
            <ul style="list-style:none; padding-left: 4px;">
              <li> Usuario <b><?php echo $_users[$id_usuario]['user']; ?></b> </li>
              <li> Nombre <b><?php echo $_users[$id_usuario]['nombres']; ?></b> </li>
              <li> Apellido <b><?php echo $_users[$id_usuario]['apellidos']; ?></b> </li>
              <li> Área <b><?php echo $_area[$_users[$id_usuario]['area']]['area']; ?></b> </li>
              <li> Cedula <b><?php echo $_users[$id_usuario]['cedula']; ?></b></li>
              <li> Email <b><?php echo $_users[$id_usuario]['email']; ?></b></li>
            </ul>
          </blockquote>

        </div>
      </div>
  </div>
</div>

</div>
</section>

<?php include(HTML_DIR . 'overall/footer.php'); ?>

</body>
</html>
