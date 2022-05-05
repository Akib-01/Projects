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
	<title>Join Events</title>
	<link rel="stylesheet" href="../views/CSS/style.css">
	<style>
		.footers{
			display: inline-block;
			min-width: 100%;
			position: relative;
			top: 3200px;
		}
		.joineventheader{
			position: relative;
			top: 130px;
			text-align: center;
			right: 50px;
			color: #fc5603;

		}
		.Joinevent1{
			display: inline-block;
			position: absolute;
			top: 290px;
			left: 200px;
		}
		.pic1{
			position: relative;
			top: 60px;
			right: 20px;
			box-shadow: 0 0 20px 10px rgba(130, 0, 0, 0.7);
			z-index: 1;
		}

		.joineventdetails{
			display: inline-block;
			height: 404px;
			width: 592px;
			border: 1px solid #fc5603;
			position: relative;
			right: 70px;

		}
		.EventName{
			padding: 40px 60px 60px 90px;
			text-align: justify;


		}
		.buttons{
			display: inline-block;
			position: relative;
			left: 365px;
		}
		.jbutton{
			padding: 0.75em;
			background-color: #e05188;
			font-weight: 700;
			letter-spacing: .1em;
			font-size: .9em;
			border: none;
			border-radius: 3px;
			color: #f1f1f1;
			cursor: pointer;
		}

		.jbutton:hover{
			background-color: #fa6f1c;
		}
		.fbutton{
			position: relative;
			right: 100px;
			top: 60px;
		}

		.Joinevent2{
			display: inline-block;
			position: absolute;
			top: 850px;
			left: 200px;
		}

		.Joinevent3{
			display: inline-block;
			position: absolute;
			top: 1410px;
			left: 200px;
		}

		.Joinevent4{
			display: inline-block;
			position: absolute;
			top: 2030px;
			left: 200px;
		}

		.Joinevent5{
			display: inline-block;
			position: absolute;
			top: 2590px;
			left: 200px;
		}
		#e4{
			top: 35px;
		}
		#e5{
			top: 70px;
		}

	</style>
</head>
<body>
	<?php
		include('../views/template/header.php');
	?>
	<div class="joineventheader">

		<h1>Join an Event</h1>
		<i>join an event to be a part in our journey</i>
		
	</div>
	<div class="Joinevent1">
		<img src="../views/CSS/assets/iftar.jpg" alt="Iftar" height="404px" width="592px" class="pic1">

		<div class="joineventdetails">
			<div class="EventName">

				<h3 style="text-align:center;">Iftar for Poor Muslims</h3>
				<br>
				<p style="font-size: 16px;">Ramadan is a month of blessing. With your donation you can make sure that Iftar is a time of relief for all our brothers and sisters. With your help they will receive all the items they need to survive the month.</p>
				
			</div>
		<div class="buttons">
		<form action="../controller/ggga.php" method="POST">
			<input type="submit" value="Join" class="jbutton" name="mybutton" id="mybutton">

			&#160 &#160 &#160 
			

		</form>
		<!--<button id="fbutton" class="jbutton"><a href="../views/DonateMoney.php"><p style="color:#f1f1f1">Donate</p></a></button>-->

		</div>
		</div>

	</div>

	<div class="Joinevent2">
		<img src="../views/CSS/assets/st.jpg" alt="Iftar" height="404px" width="592px" class="pic1">

		<div class="joineventdetails">
			<div class="EventName">

				<h3 style="text-align:center;">Education for street children.</h3>
				<br>
				<p style="font-size: 16px;">your donation goes to those children doesn't have elementary school education. We tend to perpetually try and facilitate those kid for their education.Give them love to bring smile.</p>
				
			</div>
		<div class="buttons">
		<form action="../controller/ggga.php" method="POST" >
			<input type="submit" value="Join" class="jbutton" name="mybutton1">&#160 &#160 &#160 
			

		</form>
		<!--<button id="fbutton" class="jbutton"><a href="../views/DonateMoney.php"><p style="color:#f1f1f1">Donate</p></a></button>-->
		</div>
		</div>

	</div>



	<div class="Joinevent3">
		<img src="../views/CSS/assets/cloth.webp" alt="Iftar" height="404px" width="592px" class="pic1">

		<div class="joineventdetails">
			<div class="EventName">

				<h3 style="text-align:center;">Share the joy in this Eid.</h3>
				<br>
				<p style="font-size: 16px;">Help us support children and orphans to bring happiness and joy in this Eid. Your donation will secure Eid clothing and bring bliss for them.</p>
				
			</div>
		<div class="buttons">
		<form action="../controller/ggga.php" method="POST" >
			<input type="submit" value="Join" class="jbutton" name="mybutton2">&#160 &#160 &#160 
			

		</form>
		<!--<button id="fbutton" class="jbutton"><a href="../views/DonateMoney.php"><p style="color:#f1f1f1">Donate</p></a></button>-->
		</div>
		</div>

	</div>






	<div class="Joinevent4">
		<img src="../views/CSS/assets/medicine.jpg" alt="Iftar" height="404px" width="592px" class="pic1">

		<div id="e4" class="joineventdetails">
			<div class="EventName">

				<h3 style="text-align:center;">Free medical camp.</h3>
				<br>
				<p style="font-size: 16px;">Health is said to be wealth but those who don't have wealth, it's very difficult for them to get treatment in ill health. Our medical campaign will treat their diseases and give them free medicine. So if have wealth spend it for someone's good health. </p>
				
			</div>
		<div class="buttons">
		<form action="../controller/ggga.php" method="POST" >
			<input type="submit" value="Join" class="jbutton" name="mybutton3">&#160 &#160 &#160 
			

		</form>
			<!--<button id="fbutton" class="jbutton"><a href="../views/DonateMoney.php"><p style="color:#f1f1f1">Donate</p></a></button>-->
		</div>
		</div>

	</div>




	<div class="Joinevent5">
		<img src="../views/CSS/assets/1.jpg" alt="Iftar" height="404px" width="592px" class="pic1">

		<div id="e5" class="joineventdetails">
			<div class="EventName">

				<h3 style="text-align:center;">one taka meal</h3>
				<br>
				<p style="font-size: 16px;">A very new and unique program  by CharitAble is 'Ek Takay Ahar', which refers to 'food for a single penny'. Under this program hundreds of street dwelling children, beggars, elderly people and physically and mentally challenged people hanging around streets or stations get their fundamental need of regular meals in exchange of more than one taka.</p>
				
			</div>
		<div class="buttons">
		<form action="../controller/ggga.php" method="POST" >
			<input type="submit" value="Join" class="jbutton" name="mybutton4">&#160 &#160 &#160 
			

		</form>
			<!--<button id="fbutton" class="jbutton"><a href="../views/DonateMoney.php"><p style="color:#f1f1f1">Donate</p></a></button>-->
		</div>
		</div>

	</div>

<div class="footers">
	<?php
		include('../views/template/footer.php');
	?>	
</div>
<script>
</script>
</body>
</html>
