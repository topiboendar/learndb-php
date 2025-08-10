<?php

include_once __DIR__ . '\GetConn.php';

$conn = getConnection();

$sql = "SELECT * FROM customers";

$result = $conn->query($sql);

foreach($result as $row){
  $id = $row['id'];
  $name = $row['name'];
  $email = $row['email'];

  echo "ID : " . $id . PHP_EOL;
  echo "Name : " . $name . PHP_EOL;
  echo "Email : " . $email . PHP_EOL;
  echo " " . PHP_EOL;
}

$sql = "SELECT * FROM admin";

$result = $conn->query($sql);

foreach($result as $row)
{
  var_dump($row);
}
