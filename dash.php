<?php
require_once "config.php";

$userE = $_POST['userE'];
$userP = $_POST['userP'];

$conn->query('SELECT * FROM Jobs');

$jobs = $conn->query('SELECT * FROM Jobs LIMIT 5');

$statement = $conn->query("SELECT * FROM JobsAppliedFor");
$jobsAppliedFor = $statement->fetchAll(PDO::FETCH_ASSOC);