<?php
session_start();
if ($_SESSION['username']==NULL) {
	header("Location:../views/Login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Request Money Action</title>
	<style>
	.vfooter{
			position: absolute;
			bottom: -500px;
			left: 0;
			min-width: 100%;
		}
	</style>
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
	?>
	<?php
		require "../model/registrationdb.php";
		if($_SERVER['REQUEST_METHOD']==="POST")
		{
			$Organization_name= test($_POST['oname']);
			$reason= test($_POST['reason']);
			$Amount= test($_POST['amount']);
			$oname= $_SESSION['name'];

			if(empty($Organization_name) || empty($Amount) || empty($reason))
			{
				echo "Fill up the form properly";
				echo "<br><br>";
				?>
				<p style="color:red;"><b>Operation Failed</b></p>
				<?php
			}
			else
			{
				if ($oname===$Organization_name) {
		
					$sql="INSERT into request VALUES ('id','$Organization_name','$reason','$Amount')";
					$connect->query($sql);

					$connect->close();
								  	?>
				
				<p style="position:absolute;top:50%;left:50%;font-size:50px;color:green">Requested</p>

				<?php

				}
				else
				{
					echo "Organization name is wrong";
				}
			}
		}
		else
		{
			echo "Can not process GET REQUEST METHOD";
		}

	?>
	<br><br>
	<a href="../views/RequestMoney.php">Go Back</a>
</body>
</html>