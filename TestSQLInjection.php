<?php

include_once __DIR__ . '\GetConn.php';

$conn = getConnection();

$username = "admin'; #";
$password = "ambatukam";
$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";

$stmt = $conn->query($sql);

$success = false;
$find_user = null;

foreach($stmt as $row)
{
  $success = true;
  $find_user = $row['username'];
}

if($success){
	echo "Sukses login : " . $find_user . PHP_EOL;
} else {
	echo "Gagal login";
}


