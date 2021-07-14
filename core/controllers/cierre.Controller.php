<?php
if(isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['activos'] == 3) {
  $isset_id = isset($_GET['id']);
  require('core/models/class.Cierre.php');
  $config_cierre = new Cierre();
  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    case 'add': 
      if($_POST) {
        $config_cierre->Add();
      } else {
        include(HTML_DIR . 'laboratorio/clientes/acta_de_cierre/add_acta_cierre.php');
      }
    break;
    case 'edit':
    if($isset_id and array_key_exists($_GET['id'],$_cadena)) {
      if($_POST) {
        $config_cierre->Edit();
      } else {
        include(HTML_DIR . 'laboratorio/clientes/acta_de_cierre/add_acta_cierre.php');
      }
    } else {
      header('location: ?view=informe');
    }
    break;
    case 'delete':
      if($isset_id) {
        $config_cierre->Delete();
      } else {
        header('location: ?view=informe');
      }
    break;
    
    default:
      include(HTML_DIR . 'laboratorio/clientes/acta_de_cierre/all_acta_cierre.php');
    break;
  }
} else {
  header('location: ?view=index');
}
?>