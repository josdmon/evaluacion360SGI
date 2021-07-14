<?php
if(isset($_SESSION['app_id'])) {
  $isset_id = isset($_GET['id']) and is_numeric($_GET['id']) and $_GET['id'] >= 1;
  require('core/models/class.PlanAccionHseq.php');
  $config_recep = new PlanAccionHseq();
  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    case 'all_plan_accion':
      if($_POST) {
        $config_recep->AddLinPlanAccion();
      } else {
        include(HTML_DIR . 'qhse/plan_accion/plan_accion_all.php');
      }
    break;
    case 'aprobar':
      if($_POST) {
        $config_recep->Aprobar();
      } else {
        include(HTML_DIR . 'qhse/area/plan_accion.php');
      }
    break;
    case 'add_plan_accion':
      if($_POST) {
        $config_recep->AddPlanAccion();
      } else {
        include(HTML_DIR . 'qhse/resultados.php');
      }
    break;

    case 'plan_accion':
        include(HTML_DIR . 'qhse/plan_accion/plan_accion.php');

    break;
    case 'delete':
      if($isset_id) {
        $config_recep->Delete();
      } else {
        include(HTML_DIR . 'qhse/plan_accion/plan_accion_all.php');
      }
    break;

    /*case 'add_operativo':
      if($_POST) {
        $config_recep->AddOperativo();
      } else {
        include(HTML_DIR . 'qhse/plan_accion/add_plan_accion_operativo.php');
      }
    break;
    case 'add_gerencial':
      if($_POST) {
        $config_recep->AddGerencial();
      } else {
        include(HTML_DIR . 'qhse/plan_accion/add_plan_accion_gerencial.php');
      }
    break;
    case 'add_general':
      if($_POST) {
        $config_recep->AddGeneral();
      } else {
        include(HTML_DIR . 'qhse/plan_accion/add_plan_accion_general.php');
      }
    break;
*/
    default:
      include(HTML_DIR . 'qhse/plan_accion/all_lista_evaluacion.php');
    break;
  }
} else {
  header('location: ?view=index');
}
?>
