<?php
if(isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['activo'] == 4) {
  $isset_id = isset($_GET['id']);
  require('core/models/class.SubcontratadosLab.php');
  $subcontratado = new SubcontratadosLab();
  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    case 'add':
      if($_POST) {
        $subcontratado->Add();
      } else {
        include(HTML_DIR . 'laboratorio/subcontratados/add_subcontratados.php');
      }
    break;
    case 'edit':
    if($isset_id and array_key_exists($_GET['id'],$_subcontratado)) {
      if($_POST) {
        $subcontratado->Edit();
      } else {
        include(HTML_DIR . 'laboratorio/subcontratados/edit_subcontratados.php');
      }
    } else {
      header('location: ?view=subcontratados');
    }
    break;
    case 'entregado':
      if($isset_id) {
        $subcontratado->Entregado();
      } else {
        header('location: ?view=subcontratados');
      }
    break;
    case 'pdf':
    include(HTML_DIR . 'laboratorio/subcontratados/informe/pdf.php');
    break;
    default:
      include(HTML_DIR . 'laboratorio/subcontratados/all_subcontratados.php');
    break;
  }
} else {
  header('location: ?view=index');
}
?>
