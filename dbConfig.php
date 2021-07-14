<?php
//DB details
/*
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'pruebas_sgi';
*/
#constantes de coneccion

$dbHost = 'localhost';
$dbUsername = 'wi531409';
$dbPassword = 'DEvuleva74';
$dbName = 'wi531409_sgisas';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Unable to connect database: " . $db->connect_error);
}

?>