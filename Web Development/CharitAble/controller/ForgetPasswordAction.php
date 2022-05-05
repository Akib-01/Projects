<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forget Password</title>
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
				
	require "../model/registrationdb.php";
		if ($_SERVER['REQUEST_METHOD'] === "POST")
		{	
			$username = test($_POST['user']);
			$Npassword = test($_POST['npassword']);
			$CNpassword = test($_POST['cnpassword']);
			if (empty($_POST['npassword']) || empty($_POST['cnpassword']) || empty($username))
			{
				echo "Fill up the boxes properly";			
				?>
				<br>
				<p style="color:red;"><b>Password did not changed</b></p>
				<?php				
			}

			else
			{	
					$s="SELECT * FROM Organization_list WHERE username = '$username'";
					$rr= mysqli_query($connect, $s);

					if (mysqli_num_rows($rr) === 1) 
        			{

           				$row = mysqli_fetch_assoc($rr);

            			if ($row['username'] === $username) 
            			{		
							$nsql= "UPDATE Organization_list SET pass = '$Npassword', cpass = '$CNpassword' WHERE username= '$username'";
							$r = mysqli_query($connect, $nsql);
						}
						header("Location:../views/Login.php");
					}
					else
					{
						?>

						<script>
							alert("Username Does not Match");
						</script>
						<a href="../views/ForgetPassword.php">Go Back</a>
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
	<a href="../views/ForgetPassword.php">Go Back</a>
	
</body>
</html>