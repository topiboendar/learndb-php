<?php

include_once __DIR__ . "/GetConn.php";

$conn = getConnection();

$conn->beginTransaction();

$conn->exec("INSERT INTO comments(email, comment) VALUES ('rudi@gmail.com', 'ambatukam')");
$conn->exec("INSERT INTO comments(email, comment) VALUES ('rudi@gmail.com', 'ambatukam')");
$conn->exec("INSERT INTO comments(email, comment) VALUES ('rudi@gmail.com', 'ambatukam')");
$conn->exec("INSERT INTO comments(email, comment) VALUES ('salah@gmail.com', 'ambatukam')");

$conn->rollback();

$conn = null;
