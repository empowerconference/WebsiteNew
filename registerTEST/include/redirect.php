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
	
	$to = $_POST['email']; 
    $subject = "EMPOWER 2018 Registrations";
    $message = "Thank You for registering with us. We will get in touch with you soon";
    $headers = "assistech.iitd@gmail.com";

	
	
	
	$_SESSION["amount"] = $_POST['amount'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$address = $_POST['address'];
	$affiliation = $_POST['affiliation'];
	$assistance = $_POST['assistance'];
	$date= $_POST['date'];
	$_SESSION["type1"]= $_POST['type1'];
	$type2 = $_POST['type2'];
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	if($name !=''&& $email !=''&& $contact !=''&& $address !='')
	{ 			

		$sql = "INSERT INTO conference(name,email,contact,address,affiliation,assistance,date,type1,type2,amount) 
		VALUES ('$name', '$email', '$contact','$address', '$affiliation','$assistance', '$date', '{$_SESSION['type1']}','$type2', '{$_SESSION['amount']}')";

		if ($conn->query($sql) === TRUE) {
			echo '<script type="text/javascript">
           window.location = "payment.php"
			</script>';
			$_POST = array();
			
			mail($to, $subject, $message, $headers);
				echo "Your mail has been sent successfuly ! Thank you for your feedback";
		} 
		
		else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		
	}

	else{
   			  echo "Few Fields are empty!";

		}
	

	$conn->close();
}
?>
