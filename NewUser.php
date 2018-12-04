<?php 

$host = getenv('IP');

$username = getenv('C9_USER');

$password = '';

$dbname = 'scheme';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$pwd = $_POST['password'];
$email = $_POST['email'];
$tel = $_POST['tel'];

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$conn = $dbname ->prepare('INSERT INTO Users (firstname, lastname, password, telephone, email) VALUES
($fname, $lname, $pwd, $email, $tel');

$conn->query('SELECT * FROM Jobs');

$jobs = $conn->query('SELECT * FROM Jobs LIMIT 5');


$statement = $conn->query("SELECT * FROM JobsAppliedFor");
$jobsAppliedFor = $statement->fetchAll(PDO::FETCH_ASSOC);
/*
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$password = $_POST['Password'];
	$email = $_POST['email'];
	$telephone = $_POST['telephone'];
	$submit = $_POST['submit'];

	//include_once 'dashBoard.php';
} //else {
	include_once 'no-submission.view.php';
	// You could also display the form again or redirect the user to the form.
	// header('Location: index.html');
}