<?php 

$host = getenv('IP');

$username = getenv('C9_USER');

$password = '';

$dbname = 'scheme';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
$pwd = $_POST['password'];
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$tel = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_STRING);



$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$conn = $dbname ->prepare('INSERT INTO Users (firstname, lastname, password, telephone, email) VALUES
($fname, $lname, $pwd, $email, $tel');

$conn->query('SELECT * FROM Jobs');
$hash = password_hash("password123",PASSWORD_DEFAULT);
    echo $hash; 

$jobs = $conn->query('SELECT * FROM Jobs LIMIT 5');



$statement = $conn->query("SELECT * FROM JobsAppliedFor");
$jobsAppliedFor = $statement->fetchAll(PDO::FETCH_ASSOC);