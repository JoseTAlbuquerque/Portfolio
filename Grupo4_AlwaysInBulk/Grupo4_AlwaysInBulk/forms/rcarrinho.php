<?php
include_once('../includes/connection.php');
session_start();
$id = $_POST['id'];

foreach($_SESSION['compras'] as $loja => $produto){
    if($produto['id'] == $id){
        unset($_SESSION['compras'][$loja]);
        
    }
}
header("Location: " . $_SERVER['HTTP_REFERER']);
?>
