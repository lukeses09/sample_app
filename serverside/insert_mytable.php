<?php


  $conn = new PDO("mysql:host=localhost;dbname=sample_app","root","starwars");

  $name = $_POST['name'];
  $address = $_POST['address'];
  $id = uniqid('SU');

  $sql = "INSERT INTO sample_user VALUES(?,?,?,?) ";

  $q = $conn->prepare($sql);
  $q -> execute(array($id,$name,$address,'active'));


$conn = null;             

echo json_encode($output);





?>
