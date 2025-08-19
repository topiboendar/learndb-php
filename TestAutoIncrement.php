<?php

include_once __DIR__ . "/GetConn.php";

$conn = getConnection();

$sql = "INSERT INTO comments(email, comment) VALUES('rockyou@gmail.com', 'what are u lokin for ?')";

$stmt = $conn->exec($sql);
$id = $conn->lastInsertId();

var_dump($id);

$conn = null;
