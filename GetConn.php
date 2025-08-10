<?php

function getConnection() :PDO
{
  $host = 'localhost';
  $port = 3306;
  $dbapp = 'belajar_database';
  $username = 'root';
  $password = '';


  return new PDO("mysql:host=$host:$port;dbname=$dbapp", $username, $password);
}


