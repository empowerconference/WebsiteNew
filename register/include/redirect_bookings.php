<?php

if(isset($_POST['submit'])){
	
	$servername = "localhost";
   $username = "assistech";
   $password = "64d0991d";
	$dbname = "assistech";
	
	
	//$servername = "localhost";
	//$username = "root";
	//$password = "";
	//$dbname = "formdata";
	
	$_SESSION["amount"] = $_POST['amount'];
	$amount=$_SESSION["room_amount"];
	$name = $_POST['name'];
	$gender=$_POST['gender'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$affiliation = $_POST['affiliation'];
	$checkin= $_POST['checkin'];
	$checkout= $_POST['checkout'];
	$days=$_POST['days'];	
	$type=$_POST['type'];
	$questions=$_POST['questions'];
		
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	if($name !=''&& $email !=''&& $contact !=''&& $address !='')
	{ 			
 
		$sql = "INSERT INTO room_booking(name,gender,contact,email,address,affiliation,type,checkin,checkout,days,amount,questions) 
		VALUES ('$name', '$gender', '$contact', '$email', '$address','$affiliation','$type', '$checkin','$checkout','$days','$amount','$questions')";

		if ($conn->query($sql) === TRUE) {
			echo '<script type="text/javascript">
           window.location = "room_payment.php"
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
