<?php

if(isset($_POST['submit'])){
			
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "formdata";
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$address = $_POST['address'];
	$date= $_POST['date'];
	$type = $_POST['type'];
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	if($name !=''&& $email !=''&& $contact !=''&& $address !='')
	{ 			

		$sql = "INSERT INTO reg (name,email,contact,address,date,type,amount)
    VALUES ('$name', '$email', '$contact','$address', '$date', '$type')";

		if ($conn->query($sql) === TRUE) {
			header("Location:payment.php");
			$_POST = array();
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		
	}

	else{
   			  echo "Please fill all fields.....!!!!!!!!!!!!";

		}
	

	$conn->close();
}
?>
