<?php 
session_start();
unset($_SESSION['nome']);
$_SESSION['autenticado'] = false;
session_destroy();
$_SESSION = null;
header('Location:../index.php');
die();

