<?php
if(isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['area'] == 3) {
  $isset_id = isset($_GET['id']) and is_numeric($_GET['id']) and $_GET['id'] >= 1;
  require('core/models/class.PlanMuestreo.php');
  //$config_foros = new PlanMuestreo();
  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    case 'before':
      if($_POST){
        include(HTML_DIR . 'laboratorio/plan_muestreo/add_plan_muestreo.php');
      }else{
        include(HTML_DIR . 'laboratorio/plan_muestreo/before_plan_muestreo.php');
      }
    break;
    case 'parametros':
        include(HTML_DIR . 'laboratorio/parametros/parametros.php');
    break;
    case 'add':
      if($_POST) {
        $config_foros->Add();
      } else {
        include(HTML_DIR . 'laboratorio/plan_muestreo/add_plan_muestreo.php');
      }
    break;
    case 'edit':
    if($isset_id and array_key_exists($_GET['id'],$_foros)) {
      if($_POST) {
        $config_foros->Edit();
      } else {
        include(HTML_DIR . 'foros/edit_foro.php');
      }
    } else {
      header('location: ?view=configforos');
    }
    break;
    case 'delete':
      if($isset_id) {
        $config_foros->Delete();
      } else {
        header('location: ?view=configforos');
      }
    break;
    default:
      include(HTML_DIR . 'laboratorio/plan_muestreo/all_plan_muestreo.php');
    break;
  }
} else {
  header('location: ?view=index');
}
?>