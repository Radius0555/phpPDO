<?php

$serv = 'localhost';
$user = 'root';
$pass = 'Radek91!';
$db = 'testdbpdo';

try{
  $conn = new PDO("mysql:host=$serv;dbname=$db",$user, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("INSERT INTO TestTable(firstName,  lastName,  email)
  VALUES (:firstname, :lastname, :email)");
  $stmt->bindParam(':firstname', $firstname);
  $stmt->bindParam(':lastname', $lastname);
  $stmt->bindParam(':email', $email);

  $firstname = "Ana";
  $lastname = "Fol";
  $email = "anafol@wp.pl";
  $stmt->execute();

  $firstname = "Woj";
  $lastname = "Fol";
  $email = "wojfol@wp.pl";
  $stmt->execute();

  $firstname = "Dan";
  $lastname = "Sz";
  $email = "dansz@wp.pl";
  $stmt->execute();

  echo 'New records created successfully<br>';
}catch(PDOException $e){
  $conn->rollback();
  echo $sql.'<br>'.$e->getMessage();
}

$conn = null;

?>
