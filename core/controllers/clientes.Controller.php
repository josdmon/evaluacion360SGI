<?php
if(isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['permisos'] == 2 or $_users[$_SESSION['app_id']]['activo'] == 4) {
  $isset_id = isset($_GET['id']) and is_numeric($_GET['id']) and $_GET['id'] >= 1;
  require('core/models/class.Clientes.php');
  $clientes = new Clientes();
  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    case 'add':
      if($_POST) {
        $clientes->Add();
      } else {
        include(HTML_DIR . 'laboratorio/clientes/add_clientes.php');
      }
    break;
    case 'edit':
      if($isset_id and array_key_exists($_GET['id'],$_clientes)) {
        if($_POST) {
          $clientes->Edit();
        } else {
          include(HTML_DIR . 'laboratorio/clientes/edit_clientes.php');
        }
      } else {
        header('location: ?view=clientes');
      }
    break;
    case 'delete':
      if($isset_id) {
        $clientes->Delete();
      } else {
        header('location: ?view=clientes');
      }
    break;
    default:
      include(HTML_DIR . 'laboratorio/clientes/all_clientes.php');
    break;
  }
} else {
  header('location: ?view=index');
}
?>