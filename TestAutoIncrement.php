<?php

include_once __DIR__ . "/GetConn.php";

$conn = getConnection();

$sql = "INSERT INTO comments(email, comment) VALUES('ambatukam@gmail.com', 'ada anomali gaess')";

$stmt = $conn->exec($sql);
$id = $conn->lastInsertId();

var_dump($id);

$conn = null;
