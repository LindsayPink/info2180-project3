<?php
$host = getenv('IP');

$username = getenv('C9_USER');

$password = '';

$dbname = 'scheme';

$userE = $_POST['userE'];
$userP = $_POST['userP'];

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$conn->query('SELECT * FROM Jobs');

$jobs = $conn->query('SELECT * FROM Jobs LIMIT 5');


$statement = $conn->query("SELECT * FROM JobsAppliedFor");
$jobsAppliedFor = $statement->fetchAll(PDO::FETCH_ASSOC);