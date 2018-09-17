<?php

if(isset($_POST['submit'])){
	
	//$servername = "localhost";
	//$username = "assistech";
	//$password = "64d0991d";
	//$dbname = "assistech";
	
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "formdata";
	
	$_SESSION["amount"] = $_POST['amount'];
	$name = $_POST['name'];
	$gender=$_POST['gender'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$affiliation = $_POST['affiliation'];
	$check_in= $_POST['check-in'];
	$check_out= $_POST['check-out'];
	$days=$_POST['days'];	
	$type=$_POST['type'];
	$comment=$_POST['comment'];
	$booking = $_POST['bookingdate'];
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	if($name !=''&& $email !=''&& $contact !=''&& $address !='')
	{ 			

		$sql = "INSERT INTO room_booking(name,gender,contact,email,address,affiliation,type,check-in,check-out,numdays,amount,comment,booking_date) 
		VALUES ('$name','$gender', '$email', '$contact','$address', '$affiliation','$type','$check_in','$check_out','{$_SESSION['amount']}', '$days', '$comment','$booking')";

		if ($conn->query($sql) === TRUE) {
			echo '<script type="text/javascript">
           window.location = "payment.php"
			</script>';
			$_POST = array();
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		
	}

	else{
   			  echo "Few Fields are empty!";

		}
	

	$conn->close();
}
?>
