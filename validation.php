<?php
	$nameErr = $emailErr = $mobileErr = "";
$user_Name = $user_Mail = $user_Mobile = "";
			function test_input($data)
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
			}
	if(isset($_POST['user_submit']))
	{
		//Name Validation
			if (empty($_POST["user_name"]))
			{
				$nameErr = "Name is required";
		}
		else
		{
			$user_Name = test_input($_POST["user_name"]);
			// check if name only contains letters and whitespace
			if (!preg_match("/^[a-zA-Z ]*$/",$user_Name))
			{
			$nameErr = "Only letters and white space allowed";
			}
			}
			//Email Validation

		if (empty($_POST["user_email"]))
		{
		$emailErr = "Email is required";
		}
		else
		{
		$user_Email = test_input($_POST["user_email"]);
		// check if e-mail address is well-formed
		if (!filter_var($user_Email, FILTER_VALIDATE_EMAIL))
		{
		$emailErr = "Invalid email format";
		}
		}
		
		if (empty($_POST["user_mobile"]))
		{
		$mobileErr = "Mobile is required";
		}
		else
		{
			$user_Mobile = test_input($_POST["user_mobile"]);
			// check if mobile is well-formed
			if(!preg_match("/^[0-9]*$/", $user_Mobile))
			{
				$mobileErr = "Enter a valid Mobile number";
			}
		}
	}
?>