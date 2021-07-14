<?php
if(isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['permisos'] == 1 or $_users[$_SESSION['app_id']]['permisos'] == 5) {

  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    case 'resultados':

        include(HTML_DIR . 'gerencia/resultados.php');
    break;
    case 'resultado_general':

        include(HTML_DIR . 'gerencia/resultado_general.php');
    break;
     case 'usuarios':

        include(HTML_DIR . 'gerencia/usuarios.php');
    break;
    case 'usuario_general':

       include(HTML_DIR . 'gerencia/usuario_general.php');
   break;
   case 'areas':

      include(HTML_DIR . 'gerencia/areas.php');
   break;
    default:

      include(HTML_DIR . 'gerencia/all_evaluaciones.php');
    break;
  }
} else {
  header('location: ?view=index');
}
?>
