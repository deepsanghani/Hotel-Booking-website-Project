  
<?php

$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'hoteldb');

// REGISTER USER
if (isset($_POST['send'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $subject = mysqli_real_escape_string($db, $_POST['subject']);
  $phoneno = mysqli_real_escape_string($db, $_POST['phoneno']);
  $message = mysqli_real_escape_string($db, $_POST['message']);


  	$query = "INSERT INTO contact(name, email, subject, phoneno, message)
  			  VALUES('$name', '$email', '$subject', '$phoneno' ,'$message')";
  	mysqli_query($db, $query);
  	header('location: contactus.php');
  
}

?>