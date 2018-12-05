<?php
$host = getenv('IP');

$username = getenv('C9_USER');

$password = '';

$dbname = 'scheme';

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e) {
    die("ERROR: Could not connect. " . $e->getMessage());
}