<?php


  $conn = new PDO("mysql:host=localhost;dbname=sample_app","root","starwars");

  $sql = "SELECT * FROM sample_user";

  $q = $conn->prepare($sql);
  $q -> execute();
  $browse = $q -> fetchAll();
  foreach($browse as $fetch)
  {
    $output[] = array ($fetch['id'],$fetch['name'],$fetch['address']);				 	
  }         


$conn = null;             

echo json_encode($output);





?>
