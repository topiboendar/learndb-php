<?php

include_once __DIR__ . '/GetConn.php';

$conn = getConnection();

$username = "admin";
$password = "admin";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ? ";
$stmt = $conn->prepare($sql);

$stmt->execute([$username, $password]);

if($row = $stmt->fetch()){
  echo "Anda berhasil login, Selamat Datang " . $row['username'] . PHP_EOL;
} else {
  echo "Gagal Login" . PHP_EOL; 
}

$conn = null;
