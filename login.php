<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  if (!isset($_POST['email']) or !isset($_POST['password']) or
  empty($_POST['email']) or empty($_POST['password'])) {
    echo "What?!?!? You don't have an email address or password?";
  } else {
      //echo "<a class='home' href='dashboard.php'>Home</a>";
   echo "Your email is: <strong>" . $_POST['email'] . "</strong> and your password is: <strong>" . $_POST['password'] . "</strong>.";
  }
}