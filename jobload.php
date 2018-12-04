<?php //to get scheme data for job page head
$host = getenv('IP');

$username = getenv('C9_USER');

$password = '';

$dbname = 'scheme';

$userE = $_POST['userE'];
$userP = $_POST['userP'];

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$conn->query('SELECT * FROM Jobs');

$jobs = $conn->query('SELECT * FROM Jobs WHERE id LIKE 1 ');