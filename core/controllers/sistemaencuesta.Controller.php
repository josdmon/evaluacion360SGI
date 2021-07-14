<?php
if(isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['area'] > 0){
require('core/models/class.EncuestaSistemaHse.php');
$encuesta = new EncuestaSistemaHse();
	switch (isset($_GET['mode']) ? $_GET['mode'] : null) {

		case 'encuesta':
			include(HTML_DIR . "qhse/encuesta/all_encuesta_user.php");
		break;
		case 'encuesta20':
			include(HTML_DIR . "qhse/encuesta/encuesta.php");
		break;
		case 'addencuestasistemahse':
			if($_POST) {
				$encuesta->Add();
			} else {
				include(HTML_DIR . "qhse/encuesta/sistema_hse.php");
			}
		break;
		case 'evaluacion':
			include(HTML_DIR . "qhse/usuario_evalua.php");
		break;

		default:
			include(HTML_DIR . 'qhse/hseq.php');
		break;
	}
} else {
  header('location: ?view=index');
}

?>
