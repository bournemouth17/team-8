<?php

	include('config.php'); 


	if(isset($_POST['submit'])) {
				
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];
		$email = $_POST['emailaddress'];
		$phone = $_POST['phonenumber'];
		$location = $_POST['address'];
		$preference = $_POST['preference'];
		$nok_first_name = $_POST['nextofkinfirstname'];
		$nok_last_name = $_POST['nextofkinlastname'];
		$nok_phone = $_POST['nextofkinphonenumber'];
		$nok_relationship = $_POST['nextofkinrelationship'];


		$sqlinsert = "INSERT INTO `Volunteers` (first_name, last_name, age, gender, email, phone, location, preference, nok_first_name, nok_last_name, nok_phone, nok_relationship) 
		VALUES ('$firstname', '$lastname', '$age', '$gender', '$email', '$phone', '$location', '$preference', '$nok_first_name', '$nok_last_name', '$nok_phone', '$nok_relationship')";
	
		
		if (mysqli_query($db, $sqlinsert)) {
			echo "Thank you for signing up";
		} else {
			echo "Error - could not sign up";
		}

	} 
?>