<?php
//unset — Destruye una variable especificad
unset($_SESSION['id'],$_SESSION['user'],$_SESSION['email'],$_SESSION['id_cliente'],$_SESSION['cedula']);
session_destroy();
header('location: ?view=index');
?>