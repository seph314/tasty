<?php

$DBhost = "localhost:3306";
$DBuser = "root";
$DBpass = "password";
$DBname = "tasty";

$DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);

if ($DBcon->connect_errno) {
    die("ERROR : -> ".$DBcon->connect_error);
}

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected to database";