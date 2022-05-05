<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>RegistrationAction</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php

		function test($data)	
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}		
require "../model/registrationdb.php";

		if($_SERVER['REQUEST_METHOD']==="POST")
		{
			$Organization_name= test($_POST['oname']);
			$Phone= test($_POST['phone']);
			$Email= test($_POST['email']);
			$Username= test($_POST['username']);
			$Password= test($_POST['password']);
			$Confirm_Password= test($_POST['cpassword']);

			if(empty($Organization_name) || empty($Phone) || empty($Username) || empty($Password)||empty($Email))
			{
				echo "Fill up the form properly";
				echo "<br><br>";
				?>
				<p style="color:red;"><b>Registration Failed</b></p>
				<?php
			}
			else
			{
				

				if($_POST['password'] != NULL)
				{
					if ($_POST['password'] == $_POST['cpassword'] ) 
					{
						echo "Password Matched";
						echo "<br>";

						$query="SELECT username FROM Organization_list ";
						$result=$connect->query($query);
						  while($row = $result->fetch_assoc()) {

						  	if ($row["username"]===$Username) {
						  		echo "User Already Exist";
						  	}
						  	else
						  	{
						  		$sql="INSERT into Organization_list VALUES('$Organization_name','$Phone','$Email','$Username','$Password','$Confirm_Password')";
						  		$connect->query($sql);
						  		header("Location:../views/Login.php");
						  	}
						    
						  }
						

					}
					else
					{
						echo "Confirm Password did not match";
					}
				}
			
				else
				{
					echo "Password can't be empty.";
				}
		}
		}
		else
		{
			echo "Can not process GET REQUEST METHOD";
		}

	$connect->close();

?>
<a href="../views/Registration.php">Go Back</a>

</body>
</html>