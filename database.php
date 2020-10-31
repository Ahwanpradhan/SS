<?php
//Database connection and entry after validation
		if(isset($_POST['user_submit']) and $nameErr=="" and $emailErr=="" and $mobileErr=="" )
		{
			    $servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "ss_registered";
			$userName = $_POST['user_name'];
			$userEmail = $_POST['user_email'];
			$userMobile = $_POST['user_mobile'];
			$userMessage = $_POST['Message'];
				// Create connection
				$conn = mysqli_connect($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error)
				{
				die("Connection failed: " . $conn->connect_error);
				}
				$sql = "INSERT INTO form (user_name,user_email,user_mobile,Message)
				VALUES ('$userName','$userEmail','$userMobile','$userMessage')";
				if ($conn->query($sql) === TRUE)
				{
?>
<script>
swal("Registered Successfully!", "You can contact us for more info", "success");
</script>
<?php
}
else
{
?>
<script>
swal("Registration Error!", "You can contact us for more info", "error");
</script>
<?php
}
}
?>