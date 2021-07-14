<?php
if(isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['categorias'] >= 1) {
  $isset_id = isset($_GET['id']) and is_numeric($_GET['id']) and $_GET['id'] >= 1;
  require('core/models/class.UserEvalua.php');
  $qhse = new UserEvalua();

  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    case '1':
      if($_POST) {

        $qhse->Gerencia();
      } else {
        include(HTML_DIR . 'qhse/usuario_evalua.php');
      }
    break;
    case '2':
      if($_POST) {

        $qhse->Manmedios();
      } else {
        include(HTML_DIR . 'qhse/usuario_evalua.php');
      }
    break;
    case '4':
      if($_POST) {

        $qhse->Manhse();
      } else {
        include(HTML_DIR . 'qhse/usuario_evalua.php');
      }
    break;
    case '3':
      if($_POST) {

        $qhse->Operativos();
      } else {
        include(HTML_DIR . 'qhse/usuario_evalua.php');
      }
    break;
    case 'resultados':
    include(HTML_DIR . 'qhse/resultados.php');

    break;
    default:
      include(HTML_DIR . 'qhse/all_history_evaluacion.php');
    break;
  }
} else {
  header('location: ?view=index');
}
?>
