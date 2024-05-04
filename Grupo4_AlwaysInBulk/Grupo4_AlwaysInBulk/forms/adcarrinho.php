<?php
include_once('../includes/connection.php');
session_start();

$id = $_POST['id']; //guardar informação vinda do metodo post vinda na variavel id
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
$produto = ['id' => $id, 'nome' => $nome, 'preco' => $preco, 'quantidade' => $quantidade]; //cria o array que guarda as informações do item adicionado
$_SESSION['compras'][] = $produto; //criamos um array dentro da variavel global session que irá guardar o array dos produtos
header("Location: " . $_SERVER['HTTP_REFERER']);

?>
