<?php

$serv = 'localhost';
$user = 'root';
$pass = 'Radek91!';
$db = 'testdbpdo';

try{
  $conn = new PDO("mysql:host=$serv;dbname=$db",$user, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->beginTransaction();
  $conn->exec("INSERT INTO TestTable(firstName,  lastName,  email)
          VALUES ('Rad', 'Fol', 'radF@wp.pl')");
  $conn->exec("INSERT INTO TestTable(firstName,  lastName,  email)
          VALUES ('Aga', 'Gran', 'agaG@wp.pl')");
  $conn->exec("INSERT INTO TestTable(firstName,  lastName,  email)
          VALUES ('Raf', 'Gran', 'rafG@wp.pl')");

  $conn->commit();
  echo 'New records created successfully<br>';
}catch(PDOException $e){
  $conn->rollback();
  echo $sql.'<br>'.$e->getMessage();
}

$conn = null;

?>
