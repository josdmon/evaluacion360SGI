<?php
if(isset($_SESSION['app_id_cliente'])) {
  require('core/models/class.OrdenServicio.php');
  $orden_servicio = new OrdenServicio();
  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    case 'recepcion':
      
        include(HTML_DIR . 'laboratorio/clientes/resultados_cliente/recepcion.php');
      
    break;
    case 'cadena_custodia':
      
        include(HTML_DIR . 'laboratorio/clientes/resultados_cliente/cadena_custodia.php');
      
    break;
    case 'informe':
      
        include(HTML_DIR . 'laboratorio/clientes/resultados_cliente/informe.php');
      
    break;
    case 'acta_de_cierre':
      
        include(HTML_DIR . 'laboratorio/clientes/resultados_cliente/acta_de_cierre.php');
      
    break;
    case 'add':
        if($_POST) {
        $orden_servicio->Add();
      } else {
        include(HTML_DIR . 'laboratorio/clientes/resultados_cliente/add_orden_servicio.php');
      }
    break;
    case 'resultados':
      
        include(HTML_DIR . 'laboratorio/clientes/resultados_cliente/resultados.php');
       
    break;
    default:

      include(HTML_DIR . 'laboratorio/clientes/resultados_cliente/orden_servicio.php');

    break;
  }
} else {
  header('location: ?view=index');
}
?> 