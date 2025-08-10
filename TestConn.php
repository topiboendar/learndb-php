<?php

$host = 'localhost';
$port = 3306;
$dbapp = 'belajar_database';
$username = 'root';
$password = '';


try{
  $conn = new PDO("mysql:host=$host:$port;dbname=$dbapp", $username, $password);
  echo 'koneksi sukses' . PHP_EOL;
  // menutup koneksi
  $conn = null;
}catch(PDOException $exception){
  echo 'gagal terkoneksi database ' . $exception->getMessage() . PHP_EOL;
}


