<?php
if(isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['permisos'] == 5) {

  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    case 'encuesta':
      include(HTML_DIR . 'qhse/encuesta/all_encuesta.php');
    break;
    case 'encuesta_vial':
      include(HTML_DIR . 'qhse/encuesta/all_encuesta_vial.php');
    break;
    case 'encuesta_vial2020':
      include(HTML_DIR . 'qhse/encuesta/all_encuesta_vial20.php');
    break;
    case 'encuesta_participacion_hse':
      include(HTML_DIR . 'qhse/encuesta/all_encuesta_participacion.php');
    break;
    case 'evaluacion':
      include(HTML_DIR . 'qhse/evaluacion/all_evaluacion_admin.php');
    break;
    case 'excel':
      include(HTML_DIR . 'qhse/encuesta/excel.php');
    break;
    case 'excel2020':
      include(HTML_DIR . 'qhse/encuesta/excel2020sv.php');
    break;
    case 'excelsv':
      include(HTML_DIR . 'qhse/encuesta/excelsv.php');
    break;
    default:
      include(HTML_DIR . 'qhse/admin_hseq.php');
    break;
  }
} else {
  header('location: ?view=index');
}
?>
