<?php

$serv = 'localhost';
$user = 'root';
$pass = 'Radek91!';
$db = 'testdbpdo';

try{
  $conn = new PDO("mysql:host=$serv;dbname=$db",$user, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT id, firstname, lastname FROM testtable");
  $stmt->execute();

  $result = $stmt->fetchAll();
  foreach($result as $row){
    echo 'id: '.$row["id"]." - Name: ".$row['firstname']." "
    .$row["lastname"]."<br><br>";
  }

}catch(PDOException $e){
  echo 'Error: '.$e->getMessage();
}

$conn = null;

?>
