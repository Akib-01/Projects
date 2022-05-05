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
	<title>Request Money</title>
	<link rel="stylesheet" href="../views/CSS/style.css">
	<style>
		.animationr{
			display: block;
			height: 128%;
			width: 100%;
			position: absolute;
			top: 100px;
			animation: 50s cubic-bezier(.645,.045,.355,1) -4.5s infinite rainbow;
		}
		@keyframes rainbow {
			0%, 3% {
				    background-color: #5b564c;
			}
			15%, 9% {
			    background-color: #3e4b59;
			}
			21%, 28% {
			    background-color: #683043;
			}
			34%, 40% {
			    background-color: #9fa617;
			}
			46%, 53% {
			    background-color: #e3b430;
			}
			59%, 65% {
			    background-color: #e37f1c;
			}
			72%, 79% {
			    background-color: #97341b;
			}
			85%, 91% {
			    background-color: #457389;
			}
			100%, 97% {
			    background-color: #5b564c;
			}
		}
		.rfooter{
			position: absolute;
			min-width: 100%;
			bottom: -390px;
			left: 0;
		}
		.rfp{
			background: #FFFFFF;
			height: 750px;
			width: 500px;
			display: block;
			position: absolute;
			top: 100px;
			left: 500px;
		}
		.mainr{
			position: relative;
			top: 10px;
		}
		.fp-title{
			text-align: center;
		}
		.fp-title h2{
			font-size: 36px;
			font-weight: 300;
		}
		.fp-form{
			padding: 10px 55px 0 55px;
		}
		.finput{
			width:100%;
			background-color: #ebeeee;
			color: #3e4b59;
			border: 1px solid #afb9c1;
			padding: 0.75em;	
			border-radius: 0;
		}
		.flll{
			display: inline-block;
			letter-spacing: normal;
			vertical-align: top;
			width: 66.6667%;
			color: #7d848a;
			text-transform: uppercase;
			font-style: normal;
			font-weight: 700;
			font-size: .9em;
			letter-spacing: .1em;
			padding-bottom: 0.5em;
			float: left;
			text-align: left;
		}
		.rsubmit
		{
			width: 100%;
			padding: 0.75em;
			background-color: #9FA618;
			font-weight: 700;
			letter-spacing: .1em;
			font-size: .9em;
			border: none;
			color: #f1f1f1;
			cursor: pointer;
			position: relative;
			bottom: 30px;
		}
		.fsubmit:hover{
			background-color: #e37f1c;
			color: #27262c;
		}
		.rlink{
			font-weight: bold;
			color: #000;
		}
		.rlink:hover{
			color:  #e37f1c;
		}
	</style>
</head>
		<?php
			include('../views/template/header.php');
		?>	
<body>
	<div class="animationr">

		<div class="rfp">

			<div class="mainr">
				<div class="fp-title">
					<h2>Request Money</h2>
				<div class="fp-form">

					<form action="../controller/RequestMoneyAction.php" method="POST" onsubmit="return(validateRequestMoneyForm(this));">

						<label for="oname"><span class="flll">Organization Name</span></label><br>

						<input type="text" name="oname" id="oname" class="finput" autofocus>
						<p id="er1"></p>
						<br><br>

						<label for="Event"><span class="flll">Reason</span></label><br>

						<textarea class="finput" name="reason" id="reason" cols="30" rows="10"></textarea>

						<p id="er2"></p>
						<br><br><br>

						<label for="Amount"><span class="flll">Amount</span></label><br>
						<input type="number" name="amount" id="amount" class="finput"><br><br>

						<p id="er3"></p>
						<br><br><br>
						<input type="submit" value="REQUEST" class="rsubmit">
					</form>
					
				</div>
			
			</div>

		</div>
		
	</div>
	<span class="rfooter">
		<?php
			include('../views/template/footer.php');
		?>	
	</span>
	<script src="../views/script/Script.js"></script>
</body>
</html>