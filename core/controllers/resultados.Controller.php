<?php 
if(isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['activo'] == 4) {
  $isset_id = isset($_GET['id']) and is_numeric($_GET['id']) and $_GET['id'] >= 1;
  require('core/models/class.Resultados.php');
  $config_recep = new Resultados();
  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    case 'add':
      if($_POST) {
        $config_recep->Add();
      } else {
        include(HTML_DIR . 'laboratorio/resultados/add_resultado.php');
      }
    break;
    case 'anexo':
      if($_POST) {
        $config_recep->Anexo();
      } else {
        include(HTML_DIR . 'laboratorio/resultados/add_ane_resultado.php');
      }
    break;
    case 'edit':
    if($isset_id and array_key_exists($_GET['id_muestra'],$_resultados)) {
      if($_POST) {
        $config_recep->Edit();
      } else {
        include(HTML_DIR . 'laboratorio/resultados/edit_resultado.php');
      }
    } else {
      header('location: ?view=resultados');
    }
    break;
    case 'delete':
      if($isset_id) {
        $config_recep->Delete();
      } else {
        header('location: ?view=resultados');
      }
    break;
    default:
      include(HTML_DIR . 'laboratorio/resultados/all_resultado.php');
    break;
  }
} else {
  header('location: ?view=index');
}
?>