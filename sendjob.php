<?php
require_once "config.php";
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
	// $jtitle = filter_input(INPUT_POST, 'jtitle', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	// $jdescrip = filter_input(INPUT_POST, 'jdescrip', FILTER_SANITIZE_STRING);
	// $cat = filter_input(INPUT_POST, 'cat', FILTER_SANITIZE_STRING);
	// $comp = filter_input(INPUT_POST, 'comp', FILTER_VALIDATE_EMAIL);
	// $jloc = filter_input(INPUT_POST, 'jloc', FILTER_SANITIZE_STRING);
	
	$jtitle = $_POST['jtitle'];
	$jdescrip = $_POST['jdescrip'];
	$cat = $_POST['cat'];
	$comp = $_POST['comp'];
	$jloc = $_POST['jloc'];

	try {
	    $sql = "INSERT INTO Jobs (job_title, job_description, category, company_name, company_location) VALUES
	    ('$jtitle', '$jdescrip', '$cat', '$comp', '$jloc')";
	    // use exec() because no results are returned
	    $conn->exec($sql);
	    echo "New record created successfully";
	    }
	catch(PDOException $e)
	    {
	    echo $sql . "<br>" . $e->getMessage();
	    }
	
	$conn = null;
}