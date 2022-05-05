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
	<title>View Profile</title>
	<link rel="stylesheet" href="../views/CSS/style.css">
	<style>
		.vfooter{
			position: absolute;
			bottom: -500px;
			left: 0;
			min-width: 100%;
		}
		.vimg{
			position: absolute;
			top: 160px;
			left: 187px;
		}
		.namedetails{
			position: absolute;
			top: 205px;
			left: 650px;
			text-transform: uppercase;
		}
		.ooname{
			font-size: 30px;
		}
		.type{
			font-size: 12px;
			color: #2386b0;
		}
		.star{
			font-size: 35px;
			position: absolute;
			top: 70px;
			left: 0px;
		}
		.srating{
			position: absolute;
			top: 85px;
			left: 50px;
		}
		.ud{
			position: absolute;
			top: 470px;
			left: 187px;
			font-weight: bold;
		}
		.udl{
				position: absolute;
			    left: 275px;
			    top: 480px;
			    width: 190px;
			    height: 1px;
			    text-align: center;
			    background-color: #fa6f1c;
		}
		.dd{
			position: absolute;
			top: 510px;
			left: 195px;
			line-height: 2.0rem;
			color: #445259;
		}
		.dd b{
			font-weight: 700;
		}
		.Aboutus-title{
			position: absolute;
			top: 465px;
			left: 650px;
			font-weight: bold;
		}
		.laboutus{
			position: absolute;
			left: 77px;
			top: 13px;
			width: 395px;
			height: 1px;
			text-align: center;
			background-color: #fa6f1c;
		}
		.aboutus-details{
			position: absolute;
			top: 510px;
			left: 650px;
			text-align: justify;
			max-width: 395px;
			text-transform: capitalize;
		}
		.viewprofile{
			position: relative;
			left: 100px;
		}
	</style>
</head>
<body>
	<?php
		include('../views/template/header.php');
	?>

		<!---<p><input type="file"  accept="image/*" name="image" id="file"  onchange="loadFile(event)" style="display: none;"></p>

		<p><label for="file" class="upload" style="cursor: pointer;">Upload Image</label></p>

		<img id="output" width="200" class="vimg"/>

		<script>
			var loadFile = function(event) {
			var image = document.getElementById('output');
			image.src = URL.createObjectURL(event.target.files[0]);
			};
		</script>
	-->



	<?php
		$username = $_SESSION['username'];
		$oname= $_SESSION['name'];
		$phone=$_SESSION['phone'];
		$email=$_SESSION['email'];

		/*require "../model/registrationdb.php";


		$sql = "SELECT Oname,Phone,Email,username from organization_list";
		$result = $connect->query($sql);

		if ($result->num_rows > 0) {
		  // output data of each row
		  while($row = $result->fetch_assoc()) {
		  	if ($_SESSION['username'] === $row["username"]) {
		  	
		    	$_SESSION['uoname']=$row["Oname"];
		    	$_SESSION['uphone']=$row["Phone"];
		    	$_SESSION['email']=$row["Email"];
		    	
		  }
		}
		} 
		else {
		  echo "0 results";
		}*/
	?>
	<div class="viewprofile">
		<div class="user-details">
		<img src="../views/CSS/assets/pf.PNG" alt="Profile Picture" height="250px" width="275px" class="vimg">
		<p class="ud">User Details <p class="udl">&#160</p></p>
		<p class="dd"><b>Username:</b><?php echo " ".$username."<br>"; ?>
					  <b>E-mail:</b><?php echo " ".$email."<br>"; ?>
					  <b>Phone:</b> <?php echo " ".$phone."<br>"; ?>
		</p>
		</div>
		<div class="Aboutus">
			<div class="Aboutus-title">About Us <p class="laboutus">&#160</p></div>
			<p class="aboutus-details"><?php echo $oname; ?> is a Non-profit Organization. It connects other nonprofits, donors, and underprivileged. We work as a non-profit organization and also help other non-profit organizations so that they can serve their own communities. This way we can reach more people all over the world.</p>
		</div>
		<div class="namedetails">
		<p class="ooname"><?php 
		echo $oname;  
		?></p>
		<p class="type">Non-Profit Organization</p>
		<p  class="star">4.0</p> <img src="../views/CSS/assets/rating.png" height="20px" width="110px" class="srating" alt="rating">
		</div>
		</div>
	<span class="vfooter">
		<?php
			include('../views/template/footer.php');
		?>	
	</span>
</body>

</html>