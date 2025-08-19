<?php

include_once __DIR__ . "/GetConn.php";

$conn = getConnection();

$sql = <<<SQL
            INSERT INTO customers(id, name, email)
            VALUES("pita", "pitaloka", "pitaloka@email.com")
        SQL;

$conn->exec($sql);

$conn = null;
