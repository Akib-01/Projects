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

	if ($_SERVER['REQUEST_METHOD'] === "GET") {


		$search=test($_GET['q']);
		/*var_dump($_GET['s']);*/
		if (empty($search)) {
			echo "fill the form properly";
		}
		else{
			$sql = "SELECT * FROM donate WHERE oname = '$search'";
			$result = $connect->query($sql);

			if ($result->num_rows > 0) {
			  while($row = $result->fetch_assoc()) {
			    	if($row["oname"]==$search)
			    		{
			    			echo "Organization Name=".$row["oname"]."  <br>Amonut donated= ".$row["amount"]."<br><br><br>";
			    			//echo "string";
			    		}
			  }
			} else {
			  echo "0 results";
			}

			$connect->close();

		}
}