<?php //to get scheme data for job page head

require_once "config.php";

$userE = $_POST['userE'];
$userP = $_POST['userP'];

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$conn->query('SELECT * FROM Jobs');

$jobs = $conn->query('SELECT * FROM Jobs WHERE id LIKE 1 ');