<?php
if(isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['permisos'] == 2 or $_users[$_SESSION['app_id']]['area'] == 5) {
  require('core/models/class.HistoriaEvaluacion.php');
  $isset_id = isset($_GET['id']);
  $config_recep = new HistoriaEvaluacion();
  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    case 'add':

      if($_POST) {
        $config_recep->Add();
      } else {
        include(HTML_DIR . 'qhse/evaluacion/add_historia_evaluacion.php');
      }

    break;
    case 'delete':
      if($isset_id) {
        $config_recep->Delete();
      } else {
        header('location: ?view=historial_evaluacion');
      }
    break;
    default:
      include(HTML_DIR . 'qhse/evaluacion/add_historia_evaluacion.php');
    break;
  }
} else {
  header('location: ?view=index');
}
?>
