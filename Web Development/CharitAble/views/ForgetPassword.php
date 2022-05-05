<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Forgot Password</title>
	<link rel="stylesheet" href="../views/CSS/style.css">
	<style>
		.animation{
			display: block;
			height: 108%;
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
		.ffooter{
			position: absolute;
			min-width: 100%;
			bottom: -380px;
			left: 0;
		}
		.sfp{
			background: #FFFFFF;
			height: 600px;
			width: 500px;
			display: block;
			position: absolute;
			top: 100px;
			left: 500px;
		}
		.mainfp{
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
		.frsubmit
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
			bottom: 40px;
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
	<div class="animation">

		<div class="sfp">

			<div class="mainfp">
				<div class="fp-title">
					<h2>Reset Password</h2>
				<div class="fp-form">

					<form action="../controller/ForgetPasswordAction.php" method="POST" onsubmit="return(validateForgetPasswordForm(this));">
						<label for="username"><span class="flll">username</span></label><br>
						<input type="text" name="user" id="user" class="finput" autofocus>
						<span id="err1"></span>
						<br><br>
						<label for="password"><span class="flll">New Password</span></label><br>
						<input type="password" name="npassword" id="npassword" class="finput"><br><br>
						<span id="err2"></span>

						<label for="cpassword"><span class="flll">Confirm Password</span></label><br>
						<input type="password" name="cnpassword" id="cnpassword" class="finput"><br><br>

						<span id="err3"></span>
						<br><br><br>
						<input type="submit" value="RESET" class="frsubmit">
					</form>
					
				</div>
			
			</div>

		</div>
		
	</div>
	<span class="ffooter">
		<?php
			include('../views/template/footer.php');
		?>	
	</span>
	<script src="../views/script/Script.js"></script>
</body>
</html>