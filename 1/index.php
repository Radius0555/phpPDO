<?php

$serv = 'localhost';
$user = 'root';
$pass = 'Radek91!';
$baza = 'mydb';

try{
  $conn = new PDO('mysql:host='.$serv.';dbname='.$baza,$user,$pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Połączenie sukces";
}catch(PDOException $e){
  echo 'Połączenie złe'.$e->getMessage();
}

$conn = null;



?>
