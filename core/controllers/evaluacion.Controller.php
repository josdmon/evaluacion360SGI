<?php
if(isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['permisos'] == 2 or $_users[$_SESSION['app_id']]['area'] == 5) {
  $isset_id = isset($_GET['evaluador']) and isset($_GET['id_user']) and $_GET['id_user'] >= 1 and $_GET['evaluador'] >= 1;
  $isset_ids = isset($_GET['id']);
  require('core/models/class.Evaluacion.php');
  $config_recep = new Evaluacion();
  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    case 'add':
      if($_POST) {
        $config_recep->Add();
      } else {
        include(HTML_DIR . 'qhse/evaluacion/add_evaluacion.php');
      }
    break;
    case 'allList':
      if($_GET['id']) {
        include(HTML_DIR . 'qhse/evaluacion/all_evaluacion.php');
      } else {
        include(HTML_DIR . 'qhse/evaluacion/add_list_evaluacion.php');
      }
    break;
    case 'edit':
    if($isset_id and array_key_exists($_GET['id'],$_evaluacion)) {
      if($_POST) {
        $config_recep->Edit();
      } else {
        include(HTML_DIR . 'qhse/evaluacion/edit_evaluacion.php');
      }
    } else {
      header('location: ?view=evaluacion');
    }
    break;
    case 'delete':
      if($isset_id) {
        $config_recep->Delete();
      } else {
        header('location: ?view=evaluacion');
      }
    break;
    default:
      include(HTML_DIR . 'qhse/evaluacion/add_list_evaluacion.php');
    break;
  }
} else {
  header('location: ?view=index');
}
?>
