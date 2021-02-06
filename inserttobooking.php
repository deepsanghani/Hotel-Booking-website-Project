  
<?php

$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'hoteldb');

// REGISTER USER
if (isset($_POST['send'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $mobileno = mysqli_real_escape_string($db, $_POST['mobileno']);
  $location = $_POST[location];
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $roomtype = $_POST[roomtype];
  $numberofpeople = mysqli_real_escape_string($db, $_POST['numberofpeople']);
  $allowedExts = array("pdf");
  $temp = explode(".", $_FILES["pdf_file"]["name"]);
  $extension = end($temp);
  $upload_pdf=$_FILES["pdf_file"]["name"];
  move_uploaded_file($_FILES["pdf_file"]["tmp_name"],"guestproofpdf/" . $_FILES["pdf_file"]["name"]);    
  $query = "INSERT INTO booking(Name, email, mobileno, location, address, roomtype, 
			        numberofguest, proofpdf)
  			      VALUES('$name', '$email', '$mobileno', '$location' ,'$address','$roomtype'
				      ,'$numberofpeople','$upload_pdf')";
  $sql=mysqli_query($db, $query);
  if($sql){
	echo "Data Submit Successful";
  }
  else{
	echo "Data Submit Error!!";
  }
  	
  	header('location: booking1.php');
  
}


?>