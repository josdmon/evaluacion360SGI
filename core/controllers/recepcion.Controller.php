<?php
if(isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['activo'] == 4) {
  $isset_id = isset($_GET['id']);
  require('core/models/class.ConfigRecepcion.php');
  $config_recep = new ConfigRecepcion();
  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    case 'add': 
      if($_POST) {
        $config_recep->Add();
      } else {
        include(HTML_DIR . 'laboratorio/recepcion/add_recepcion.php');
      }
    break;
    case 'edit':
    if($isset_id and array_key_exists($_GET['id'],$_recepcion)) {
      if($_POST) {
        $config_recep->Edit();
      } else {
        include(HTML_DIR . 'laboratorio/recepcion/edit_recepcion.php');
      }
    } else {
      header('location: ?view=recepcion');
    }
    break;
    case 'delete':
      if($isset_id) {
        $config_recep->Delete();
      } else {
        header('location: ?view=recepcion');
      }
    break;
    
    default:
      include(HTML_DIR . 'laboratorio/recepcion/all_recepcion.php');
    break;
  }
} else {
  header('location: ?view=index');
}
?> 