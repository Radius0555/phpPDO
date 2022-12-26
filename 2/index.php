<?php

$serv = 'localhost';
$user = 'root';
$pass = 'Radek91!';

try{
  $conn = new PDO("mysql:host=$serv",$user, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = 'CREATE DATABASE testDBpdo';
  $conn->exec($sql);
  echo 'Database created successfully<br>';
}catch(PDOException $e){
  echo $sql.'<br>'.$e->getMessage();
}

$conn = null;

?>
