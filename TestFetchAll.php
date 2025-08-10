<?php

include_once __DIR__ . "\GetConn.php";

$conn = getConnection();

$sql = "SELECT * FROM customers";
$stmt = $conn->query($sql);
$row = $stmt->fetchAll();

var_dump($row);
