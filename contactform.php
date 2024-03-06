<?php

$firstnameErr = $lastnameErr = $emailaddErr =  $subjectErr = "";
$firstname = $lastname = $emailadd = $number = $subject = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if(empty($_POST["firstname"])) {
		$firstnameErr = "First name is required.";
	} else {
		$firstname = test_input($_POST['firstname']);
	}

	if(empty($_POST["lastname"])) {
		$lastnameErr = "Last name is required.";
	} else {
		$lastname = test_input($_POST['lastname']);
	}

	if(empty($_POST["emailadd"])) {
		$emailaddErr = "Email address is required.";
	} else {
		$emailadd = test_input($_POST['emailadd']);
		if (!filter_var($emailadd, FILTER_VALIDATE_EMAIL)) {
      	$emailaddErr = "Invalid email format";
    	}
	}

	if(empty($_POST["number"])) {
		$number = " ";
	} else {
		$number = test_input($_POST['number']);
	}

	if(empty($_POST["subject"])) {
		$subjectErr = "Message is required";
	} else {
		$subject = test_input($_POST['subject']);
	}

	if (empty($firstnameErr) && empty($lastnameErr) && empty($emailaddErr) && empty($subjectErr)) {
        $mailTo = "contact@karamrestaurants.com";
        $headers = "From: $emailadd";
        $txt = "This email was sent from $firstname $lastname ($emailadd)\n\n";
        $txt .= "Message:\n$subject";

        mail($mailTo, $txt, $headers);
        header("Location: ../contact.php");
        exit();
    }
}
else{
	header("Location: ../contact.php");
	exit();
	}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

