<?php

$serv = 'localhost';
$user = 'root';
$pass = 'Radek91!';
$db = 'testdbpdo';

try{
  $conn = new PDO("mysql:host=$serv;dbname=$db",$user, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = 'CREATE TABLE TestTable(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(30) NOT NULL,
    lastName VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )';

  $conn->exec($sql);
  echo 'Table created successfully<br>';
}catch(PDOException $e){
  echo $sql.'<br>'.$e->getMessage();
}

$conn = null;

?>
