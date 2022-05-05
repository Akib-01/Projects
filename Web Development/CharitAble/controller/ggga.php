<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Join Events</title>
	<link rel="stylesheet" href="">
	<style>
	.vfooter{
			position: absolute;
			bottom: -500px;
			left: 0;
			min-width: 100%;
		}
	</styl
	</style>
</head>
<body>
	<?php
		include('../views/template/header.php');
	?>

<a href="../views/JoinEvents.php"></a>

<?php 

		

		require "../model/registrationdb.php";

			if (isset($_POST["mybutton"])) {


			$s="SELECT join_status FROM events WHERE event_name='Iftar for poor Muslims'";

			$result = $connect->query($s);

			if ($result->num_rows > 0) {
			  while($row = $result->fetch_assoc()){

			  if ($row['join_status']=='1') {
			  	?>
				
				<p style="position:absolute;top:50%;left:50%;font-size:50px;color:green">Already Joined</p>

				<?php
			  }
			else{
			$sql="UPDATE events set join_status='1' where event_name='Iftar for poor Muslims'";
			$connect->query($sql);

			if ($connect->query($sql)==true) {
				
				?>
				
				<p style="position:absolute;top:50%;left:50%;font-size:50px;color:green">Joined</p>

				<?php
			}
		}
		}
	}
		else
		{
			echo "0 Results";
		}
			}





if (isset($_POST["mybutton1"])) {


			$s="SELECT join_status FROM events WHERE id='2'";

			$result = $connect->query($s);

			if ($result->num_rows > 0) {
			  while($row = $result->fetch_assoc()){

			  if ($row['join_status']=='1') {
			  	?>
				
				<p style="position:absolute;top:50%;left:50%;font-size:50px;color:green">Already Joined</p>

				<?php
			  }
			else{
			$sql="UPDATE events set join_status='1' where id='2'";
			$connect->query($sql);

			if ($connect->query($sql)==true) {
				
				?>
				
				<p style="position:absolute;top:50%;left:50%;font-size:50px;color:green">Joined</p>

				<?php
			}
		}
		}
	}
		else
		{
			echo "0 Results";
		}
}






if (isset($_POST["mybutton2"])) {


			$s="SELECT join_status FROM events WHERE id='3'";

			$result = $connect->query($s);

			if ($result->num_rows > 0) {
			  while($row = $result->fetch_assoc()){

			  if ($row['join_status']=='1') {
			  	?>
				
				<p style="position:absolute;top:50%;left:50%;font-size:50px;color:green">Already Joined</p>

				<?php
			  }
			else{
			$sql="UPDATE events set join_status='1' where id='3'";

			$connect->query($sql);

			if ($connect->query($sql)==true) {
				
				?>
				
				<p style="position:absolute;top:50%;left:50%;font-size:50px;color:green">Joined</p>

				<?php
			}
		}
		}
	}
		else
		{
			echo "0 Results";
		}
}







if (isset($_POST["mybutton3"])) {


			$s="SELECT join_status FROM events WHERE id='4'";

			$result = $connect->query($s);

			if ($result->num_rows > 0) {
			  while($row = $result->fetch_assoc()){

			  if ($row['join_status']=='1') {
			  	?>
				
				<p style="position:absolute;top:50%;left:50%;font-size:50px;color:green">Already Joined</p>

				<?php
			  }
			else{
			$sql="UPDATE events set join_status='1' where id='4'";
			$connect->query($sql);

			if ($connect->query($sql)==true) {
				
				?>
				
				<p style="position:absolute;top:50%;left:50%;font-size:50px;color:green">Joined</p>

				<?php
			}
		}
		}
	}
		else
		{
			echo "0 Results";
		}
}






if (isset($_POST["mybutton4"])) {


			$s="SELECT join_status FROM events WHERE id='5'";

			$result = $connect->query($s);

			if ($result->num_rows > 0) {
			  while($row = $result->fetch_assoc()){

			  if ($row['join_status']=='1') {
			  	?>
				
				<p style="position:absolute;top:50%;left:50%;font-size:50px;color:green">Already Joined</p>

				<?php
			  }
			else{
			$sql="UPDATE events set join_status='1' where id='5'";
			$connect->query($sql);

			if ($connect->query($sql)==true) {
				?>
				
				<p style="position:absolute;top:50%;left:50%;font-size:50px;color:green">Joined</p>

				<?php
			}
		}
		}
	}
		else
		{
			echo "0 Results";
		}
}

?>

<a href="../views/JoinEvents.php"></a>
	<span class="vfooter">
		<?php
			include('../views/template/footer.php');
		?>	
	</span>

</body>
</html>