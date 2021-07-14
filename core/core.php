<?php
 #ESTE ES EL NUCLEO DE LA APLICACIÓN

session_start();


#constantes de coneccion
define('DB_HOST','localhost');
define('DB_USER','wi531409');
define('DB_PASS','DEvuleva74');
define('DB_NAME','wi531409_sgisas');


#Constante de la APP
define('HTML_DIR','html/');
define('APP_TITLE','SGI SAS');
define('APP_COPY',' copyright &copy; ' . date(' Y ',time()) . ' Servicios Geológicos Integrados software. ');
define('APP_URL','http://www.sgiltda.com/app/?view=index');

#constantes phpmyler
define('PHPMAILER_host','smtp.gmail.com');
define('PHPMAILER_user','desarrollo.tecnologico@sgiltda.com');
define('PHPMAILER_pass','Sgi2020*');

#Constantes básicas de personalización
define('MIN_TITULOS_TEMAS_LONGITUD',9);
define('MIN_CONTENT_TEMAS_LONGITUD',270);

#Estructura
require('vendor/autoload.php');
require('views/fpdf/fpdf.php');
require('core/models/class.Conexion.php');
require('core/bin/functions/Encrypt.php');
require('core/bin/functions/Users.php');
require('core/bin/functions/EmailTemplate.php');
require('core/bin/functions/LostpassTemplate.php');
require('core/bin/functions/Categorias.php');
require('core/bin/functions/Foros.php');
require('core/bin/functions/UrlAmigable.php');
require('core/bin/functions/Evaluacion.php');
require('core/bin/functions/Clientes.php');
require('core/bin/functions/RecepcionClientes.php');
require('core/bin/functions/Area.php');
require('core/bin/functions/Parametros.php');
require('core/bin/functions/Recepcion.php');
require('core/bin/functions/CadenaCustodia.php');
require('core/bin/functions/CadenaClientes.php');
require('core/bin/functions/Informes.php');
require('core/bin/functions/InformesClientes.php');
require('core/bin/functions/OrdenServicio.php');
require('core/bin/functions/AllOrdenServicio.php');
require('core/bin/functions/PlanAccionGerencial.php');
require('core/bin/functions/PlanAccionOperativos.php');
require('core/bin/functions/PlanAccionHseq.php');
require('core/bin/functions/PlanAccionLin.php');
require('core/bin/functions/PlanAccionGeneralHseq.php');
require('core/bin/functions/PlanAccionEvaluado.php');
require('core/bin/functions/UserEvalua.php');
require('core/bin/functions/Mando.php');
require('core/bin/functions/ProveedoresSubcontratados.php');
require('core/bin/functions/Subcontratados.php');
require('core/bin/functions/EncuestaSVial20.php');
require('core/bin/functions/EncuestaParticipacion.php');
require('core/bin/functions/EncuestaSVial.php');
require('core/bin/functions/HistorialEvaluacion.php');
$_users = Users();
$_usereva = UserEvalua();
$_categorias = Categorias();
$_clientes = Clientes();
$_foros = Foros();
$_evaluacion = Evaluacion();
$_historialevaluacion = HistorialEvaluacion();
$_resultados = RecepcionClientes();
$_area = Area();
$_mando = Mando();
$_parametros = Parametros();
$_recepcion = Recepcion();
$_cadena = CadenaCustodia();
$_cadenacliente = CadenaClientes();
$_informe = Informes();
$_informesclientes = InformesClientes();
$_ordenservicio = OrdenServicio();
$_allordenservicio = AllOrdenServicio();
$_planaccionoperativo = PlanAccionOperativos();
$_planacciongerencial = PlanAccionGerencial();
$_planaccionhseq = PlanAccionHseq();
$_planaccionlin = PlanAccionLin();
$_planacciongeneral = PlanAccionGeneralHseq();
$_planaccionevaluado = PlanAccionEvaluado();
$_prosub = ProveedoresSubcontratados();
$_subcontratado = Subcontratados();
$_encuestasv20 = EncuestaSVial20();
$_encuesta_part = EncuestaParticipacion();
$_encuestasv = EncuestaSVial();
?>
