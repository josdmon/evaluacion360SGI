<?php
if(isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['permisos'] == 2 or $_users[$_SESSION['app_id']]['area'] == 5) {
  $isset_id = isset($_GET['evaluador']) and isset($_GET['id_user']) and $_GET['id_user'] >= 1 and $_GET['evaluador'] >= 1;
  //require('core/models/class.Evaluacion.php');
  //$config_recep = new Evaluacion();
  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    case 'informe':
      if($_POST) {
        $config_recep->Add();
      } else {
        include(HTML_DIR . 'qhse/informe/pdf.php');
      }
    break;
    case 'user':

        include(HTML_DIR . 'qhse/user_informe.php');


    break;
    case 'delete':
      if($isset_id) {
        $config_recep->Delete();
      } else {
        header('location: ?view=evaluacion');
      }
    break;
    default:
      include(HTML_DIR . 'qhse/informe/resultados.php');
    break;
  }
} else {
  header('location: ?view=index');
}
?>
