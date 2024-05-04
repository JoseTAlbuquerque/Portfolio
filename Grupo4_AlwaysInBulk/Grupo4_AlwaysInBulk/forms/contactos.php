<?php
include('../includes/connection.php');
session_start();

$email = $_POST['email'];
$nome = $_POST['nome'];
$mensagem = $_POST['mensagem'];


$sql = "INSERT INTO contactos(email, nome, mensagem) VALUES ('$email', '$nome' ,'$mensagem')";
$dbh->query($sql);
header("Location:../contactos.php");
?>