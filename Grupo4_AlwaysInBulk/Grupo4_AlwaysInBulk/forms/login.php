<?php
include_once('../includes/connection.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['loginEmail'];
    $passw = $_POST['loginPassw'];

    $sth = $dbh->prepare("SELECT email, passw FROM users WHERE email = :email AND passw = :passw");
    $sth->bindParam(':email', $email);
    $sth->bindParam(':passw', $passw);
    $sth->execute();

    if ($sth->rowCount() == 1) {
        $_SESSION['autenticado'] = true;
        $_SESSION['email'] = $email;
        header("Location: ../index.php");
        exit;
    } else {
        $_SESSION['autenticado'] = false;
        $_SESSION['email'] = '';
        $_SESSION['mensagem'] = 'E-mail ou senha incorretos. Tente novamente.';
        header("Location: ../login.php");
        exit;
    }
}
?>

