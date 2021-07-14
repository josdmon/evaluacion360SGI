<?php
if(isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['activo'] == 4) {
  $isset_id = isset($_GET['id']);
  require('core/models/class.CadenaCustodia.php');
  $config_cadena = new CadenaCustodia();
  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    case 'add': 
      if($_POST) {
        $config_cadena->Add();
      } else {
        include(HTML_DIR . 'laboratorio/clientes/cadena_custodia/add_cadena_custodia.php');
      }
    break;
    case 'edit':
    if($isset_id and array_key_exists($_GET['id'],$_cadena)) {
      if($_POST) {
        $config_cadena->Edit();
      } else {
        include(HTML_DIR . 'laboratorio/clientes/cadena_custodia/edit_cadena_custodia.php');
      }
    } else {
      header('location: ?view=recepcion');
    }
    break;
    case 'delete':
      if($isset_id) {
        $config_cadena->Delete();
      } else {
        header('location: ?view=cadena_pdf');
      }
    break;
    
    default:
      include(HTML_DIR . 'laboratorio/clientes/cadena_custodia/all_cadena_custodia.php');
    break;
  }
} else {
  header('location: ?view=index');
}
?>