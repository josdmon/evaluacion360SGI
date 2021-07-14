<?php
if(isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['activo'] == 3) {
  $isset_id = isset($_GET['id']);
  require('core/models/class.Informes.php');
  $config_informe = new Informes();
  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    case 'add': 
      if($_POST) {
        $config_informe->Add();
      } else {
        include(HTML_DIR . 'laboratorio/clientes/informe/add_informe.php');
      }
    break;
    case 'edit':
    if($isset_id and array_key_exists($_GET['id'],$_cadena)) {
      if($_POST) {
        $config_informe->Edit();
      } else {
        include(HTML_DIR . 'laboratorio/clientes/informe/edit_informe.php');
      }
    } else {
      header('location: ?view=informe');
    }
    break;
    case 'delete':
      if($isset_id) {
        $config_informe->Delete();
      } else {
        header('location: ?view=informe');
      }
    break;
    
    default:
      include(HTML_DIR . 'laboratorio/clientes/informe/all_informe.php');
    break;
  }
} else {
  header('location: ?view=index');
}
?>