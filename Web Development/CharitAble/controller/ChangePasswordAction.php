<?php
session_start();
if ($_SESSION['username']==NULL) {
	header("Location:../views/Login.php");
}

?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Change Password</title>
</head>
<body>	
	
	<?php

		function test($users)	
		{
			$users = trim($users);
			$users = stripslashes($users);
			$users = htmlspecialchars($users);
			return $users;
		}		
	?>		
	<?php 
			//var_dump($_SESSION['username']);	
		require "../model/registrationdb.php";
		if ($_SERVER['REQUEST_METHOD'] === "POST")
		{	
			$username= $_SESSION['username'];
			$opass = test($_POST['opass']);
			$Npassword = test($_POST['npassword']);
			$CNpassword = test($_POST['cnpassword']);
			if (empty($_POST['npassword']) || empty($_POST['cnpassword']) || empty($opass))
			{
				echo "Fill up the boxes properly";			
				?>
				<br>
				<p style="color:red;"><b>Password did not changed</b></p>
				<?php				
			}

			else
			{	
            		if ($_SESSION['pass'] === $opass) 
            		{		
							$nsql= "UPDATE Organization_list SET pass = '$Npassword', cpass = '$CNpassword' WHERE username= '$username'";
							$r = mysqli_query($connect, $nsql);
						?>

						<script>
							alert("Password Changed");
						</script>
						<?php

						header("Location:../views/Dashboard.php");
					}
					
					else
					{
						?>

						<script>
							alert("Old Password does not match");
						</script>
						<a href="../views/ChangePassword.php">Go Back</a>
						<?php
					}

			}				
		}
		else
		{
			echo "Can not process GET REQUEST METHOD";
		}	
		$connect->close();        
	?>
	<br><br>
	<a href="../views/ChangePassword.php">Go Back</a>
</body>
</html>