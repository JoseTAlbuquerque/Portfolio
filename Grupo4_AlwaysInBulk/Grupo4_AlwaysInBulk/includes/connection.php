<?php
$user = 'web';
$pass = 'web';

try{
    $dbh = new PDO('mysql:host=localhost;dbname=grupo4', $user, $pass);
}catch(PDOException $e){
    print 'Error ' . $e->getMessage() . '<br>';
}


?>