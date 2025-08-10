<?php

include_once __DIR__ . '\GetConn.php';

$conn = getConnection();

$username = "admin";
$password = "admin";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ? ";
$stmt = $conn->prepare($sql);

$stmt->execute([$username, $password]);

$success = false;
$find_user = null;

foreach($stmt as $row)
{
  $success = true;
  $find_user = $row['username'];
}

if($success){
  echo "Akun berhasi login, Selamat Datang " . $username . PHP_EOL;
} else {
  echo "Gagal Login";
}
