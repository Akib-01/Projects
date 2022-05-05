<?php
session_start();
if ($_SESSION['username']==NULL) {
	header("Location:../views/Login.php");
}

?>
<?php 
	require "../model/registrationdb.php";
	function test($data)	
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

	if ($_SERVER['REQUEST_METHOD'] === "POST") {

		$comment = test($_POST['comments']);
		$username = $_SESSION['username'];
		if (empty($comments) or empty($username)) {
			echo "Please fill up the form properly";
		}
		else {
			
				
			$sql="INSERT into comments values('id','$username','$comments')";
			$connect->query($sql);


			echo "Comment inserted successfully";
			}
			
		}

	$connect->close();
?>