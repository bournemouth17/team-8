<?php

include('config.php')

$sqlinsert = "INSERT INTO Volunteers (first_name, last_name, age, gender, email, phone, location, preference, nok_first_name, nok_last_name, nok_phone, nok_relationship) 
VALUES ('$_POST[firstname]', '$_POST[lastname]', '$_POST[age]', '$_POST[gender]', '$_POST[emailaddress]', '$_POST[phonenumber]', '$_POST[address]', '$_POST[preference]', '$_POST[nextofkinfirstname]', '$_POST[nextofkinlastname]', '$_POST[nextofkinphonenumber]', '$_POST[nextofkinrelationship]')"
	
	if (!mysqli_query ($connect, $sqlinsert)) {
		die("Error - not submitted");
		
	}
	
	echo "Thank you for signing up!";

?>