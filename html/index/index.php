<?php include(HTML_DIR. 'overall/head.php'); ?>

<body>
<section class="engine"><a rel="nofollow" href="#">Ocrend Software</a></section>
<?php include(HTML_DIR.'overall/nav.php'); ?>
<?php if(!isset($_SESSION['app_id']) and !isset($_SESSION['app_id_cliente'])){
echo '<section class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--full-height mbr-section--bg-adapted mbr-parallax-background" id="header4-1" style="background-image: url(views/app/images/6.jpg);">
    <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-box__magnet--center-left mbr-after-navbar">

        <div class="mbr-box__container mbr-section__container container">
            <div class="mbr-box mbr-box--stretched"><div class="mbr-box__magnet mbr-box__magnet--center-left">
                <div class="row"><div class=" col-sm-6">
                    <div class="mbr-hero animated fadeInUp">
                        <h1 class="mbr-hero__text">BIENVENIDOS A SGI</h1>
                        <p class="mbr-hero__subtext">La gestión empresarial en SGI sas. se sustenta en el desarrollo sostenible bajo un equilibrio económico, social y ambiental, teniendo en cuenta las necesidades de los grupos de interés.</p>
                    </div>

                </div></div>
            </div></div>
        </div>

    </div>
</section>'; } ?>
<section class="mbr-section mbr-after-navbar">
  <div class="mbr-section__container container mbr-section__container--isolated">

  <?php
  if(isset($_GET['success'])) {//isset -> Determina si una variable está definida y no es NULL
    echo '<div class="alert alert-dismissible alert-success">
      <strong>Activado!</strong> tu usuario ha sido activado correctamente.
    </div>';
  }
  if(isset($_GET['error'])) {//isset -> Determina si una variable está definida y no es NULL
    echo '<div class="alert alert-dismissible alert-danger">
      <strong>Error!</strong>no se ha podido activar tu usuario.
    </div>';
  }
  ?>

    <div class="row container">

      <?php
        if(isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['permisos'] == 2) {//isset -> Determina si una variable está definida y no es NULL
          echo '
            <div class="pull-right">
            <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
              <a class="mbr-buttons__btn btn btn-danger" href="?view=configforos">GESTIONAR FOROS</a>
            </li></ul></div>
            <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
              <a class="mbr-buttons__btn btn btn-danger" href="?view=categorias">GESTIONAR CATEGORÍAS</a>
            </li></ul></div>
            <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
              <a class="mbr-buttons__btn btn btn-danger" href="?view=evaluacion">EVALUACION</a>
            </li></ul></div>
            <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
              <a class="mbr-buttons__btn btn btn-danger" href="?view=user">EMPLEADOS</a>
            </li></ul></div>
            <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
              <a class="mbr-buttons__btn btn btn-danger" href="?view=pdf">PDF</a>
            </li></ul></div>
            <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
              <a class="mbr-buttons__btn btn btn-danger" href="?view=clientes">CLIENTES</a>
            </li></ul></div>';
        }elseif (isset($_SESSION['app_id_cliente']) and $_clientes[$_SESSION['app_id_cliente']]['id_cliente'] >= 1){
          echo '
            <div class="pull-right">
            <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
              <a class="mbr-buttons__btn btn btn-danger" href="?view=resultados_clientes">LABORATORIO</a>
            </li></ul></div>';
        }elseif (isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['area'] >= 1){
          if (isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['categorias'] >= 1) {
           echo '<div class="pull-right"><div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
              <a class="mbr-buttons__btn btn btn-danger" href="?view=usuario_evalua">H S E Q</a>
            </li></ul></div></div>';}
            if (isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['activo'] == 4) {
            if (isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['area'] == 3) {
              /*echo '
              <div class="pull-right">
                <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
                  <a class="mbr-buttons__btn btn btn-danger" href="?view=plan_muestreo">CADENA DE CUSTODIA</a>
                </li></ul></div>
              </div>';*/
              echo '
                <div class="pull-right">
                  <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
                    <a class="mbr-buttons__btn btn btn-danger" href="?view=recepcion">RECEPCIÒN Y RESULTADOS</a>
                  </li></ul></div>
                  <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
                    <a class="mbr-buttons__btn btn btn-danger" href="?view=subcontratados">SUBCONTRATADOS</a>
                  </li></ul></div>
                </div>';}

                if (isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['area'] == 9) {
                   echo ' <div class="pull-right">
                <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
                  <a class="mbr-buttons__btn btn btn-danger" href="?view=informes">INFORMES Y ACTA DE CIERRE</a>
                </li></ul></div></div>';
                }}
            if (isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['area'] == 5 and $_users[$_SESSION['app_id']]['permisos'] == 5) {
              echo '
              <div class="pull-right">
                <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
                  <a class="mbr-buttons__btn btn btn-danger" href="?view=user">EMPLEADOS</a>
                </li></ul></div>
                <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item">
                  <a class="mbr-buttons__btn btn btn-danger" href="?view=hseq">H S E Q</a>
                </li></ul></div>
              </div>';
            }
            if (isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['permisos'] == 1) {

              echo '<div class="pull-right">
              <div class="mbr-navbar__column">
                <ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active">
                  <li class="mbr-navbar__item">
                    <a class="mbr-buttons__btn btn btn-danger" href="?view=gerente&mode=resultado_general">PUNTAJE GENERAL EMPRESA y ÁREAS</a>
                  </li>
                </ul>
              </div>
              <div class="mbr-navbar__column">
                <ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active">
                  <li class="mbr-navbar__item">
                    <a class="mbr-buttons__btn btn btn-danger" href="?view=user_informe">INFORMES</a>
                  </li>
                </ul>
              </div>
              </div>';
            }
        }
    ?>


    </div>

  </div>
</section>

<?php include(HTML_DIR.'overall/footer.php'); ?>
</body>
</html>
