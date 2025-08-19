<?php

function getConnection() :PDO
{
  $host = '127.0.0.1';
  $port = 3306;
  $dbapp = 'belajar_database';
  $username = 'root';
  $password = 'admin';


  return new PDO("mysql:host=$host:$port;dbname=$dbapp", $username, $password);
}


