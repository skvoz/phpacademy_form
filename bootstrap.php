<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "scotchbox";
$port=8080;

try {
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $e->getMessage();
    die;
}