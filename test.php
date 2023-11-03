<?php
include_once 'index.php';

$conn = new mysqli($databaseserver, $user, $pass, $schema) ;
if ($conn->connect_error)
{
    die("error try again\r\n");
}

echo "connected to database\r\n";
$conn->close();

