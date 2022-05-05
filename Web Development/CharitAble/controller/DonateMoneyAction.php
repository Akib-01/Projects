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
	<title>Donate Money Action</title>
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
			$Event= test($_POST['event']);
			$Amount= test($_POST['amount']);
			$oname= $_SESSION['name'];

			if(empty($Organization_name) || empty($Amount) || empty($Event))
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
		
					$sql="INSERT into donate VALUES ('id','$Organization_name','$Event','$Amount')";
					$connect->query($sql);

					$connect->close();
					echo "Donated";

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
	<a href="../views/DonateMoney.php">Go Back</a>
</body>
</html>