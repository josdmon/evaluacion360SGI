<?php
if(isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['permisos'] == 3) {

  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    case 'resultados':

        include(HTML_DIR . 'qhse/area/resultados.php');
    break;
    case 'plan_accion':

        include(HTML_DIR . 'qhse/area/plan_accion.php');
    break;
    case 'usuarios':

        include(HTML_DIR . 'qhse/area/usuarios.php');
    break;
    default:

        include(HTML_DIR . 'qhse/area/all_history_evaluacion.php');
    break;


  }
} else {
  header('location: ?view=index');
}
?>
