<?php
include_once('../includes/connection.php');
session_start();

$email = $_POST['email'];
$username = $_POST['username'];
$passw = $_POST['passw'];
$sqlVerificacao = "SELECT * FROM users WHERE email= '$email'";
$sth = $dbh->query($sqlVerificacao);
$numeroLinhas = $sth->rowCount();
if ($numeroLinhas == 0) {

    $sql = "INSERT INTO users(email,username,passw) VALUES ('$email', '$username', '$passw')";
    $dbh->query($sql);
    header("Location: ../index.php");
    exit;
} else {
    $_SESSION['mensagemmail'] = 'Este E-mail já existe. Tente novamente com outro Email.';
    header("Location: ../registar.php");
    exit;
    
}



?>