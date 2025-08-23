<?php

include_once __DIR__ . "/GetConn.php";

$conn = getConnection();

$conn->beginTransaction();

$conn->exec("INSERT INTO comments(email, comment) VALUES ('rick@email.test', 'hidup itu harus tenang')");
$conn->exec("INSERT INTO comments(email, comment) VALUES ('rick@email.test', 'hidup itu harus tenang')");
$conn->exec("INSERT INTO comments(email, comment) VALUES ('rick@email.test', 'hidup itu harus tenang')");
$conn->exec("INSERT INTO comments(email, comment) VALUES ('salah@email.test', 'hidup itu harus tenang')");

$conn->commit();

$conn = null;
