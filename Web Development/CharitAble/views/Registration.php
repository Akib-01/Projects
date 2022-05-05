<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Registration</title>
	<link rel="stylesheet" href="../views/CSS/style.css">
	<script src="../views/script/Script.js"></script>
	<style>
		.aanimation{
			display: block;
			height: 170%;
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
			bottom: -990px;
			left: 0;
		}
		.sreg{
			background: #FFFFFF;
			height: 980px;
			width: 500px;
			display: block;
			position: absolute;
			top: 100px;
			left: 500px;
		}
		.mainreg{
			position: relative;
			top: 10px;
		}
		.login-title{
			text-align: center;
		}
		.login-title h2{
			font-size: 36px;
			font-weight: 300;
		}
		.login-form{
			padding: 10px 55px 0 55px;
		}
		.linput{
			width:100%;
			background-color: #ebeeee;
			color: #3e4b59;
			border: 1px solid #afb9c1;
			padding: 0.75em;	
			border-radius: 0;
		}
		.lll{
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
		}
		.rsubmit:hover{
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
		.hhr{
			position: absolute;
			top: 850px;
			right: 55px;
		}
		.kll:hover{
			color: #e37f1c;
		}
		.kll{
			color: blue;
		}
	</style>
</head>
		<?php
			include('../views/template/header.php');
		?>	
<body>
	<div class="aanimation">

		<div class="sreg">

			<div class="mainreg">

				<div class="login-title">
					<h2>Create an Account</h2>
					<p>Already have an account? &#160 <a href="Login.php"><span class="rlink">Login</span></a></p>
				</div>
				<br><br>

				<div class="login-form">

					<form name="regform" action="../controller/RegistrationAction.php" method="POST" onsubmit="return( validateRegistrationForm(this));" >

						<label for="oname" class="lll">Organization Name</label><br>
						<input type="text" name="oname" id="oname" class="linput" autofocus>
						<span id="regerr1"></span>
						<br><br>

						<label for="phone" class="lll">Phone</label><br>
						<input type="phone" name="phone" id="phone" class="linput">
						<span id="regerr2"></span>
						<br><br>

						<label for="email" class="lll">Email</label><br>
						<input type="text" name="email" id="email" class="linput">
						<span id="regerr3"></span>
						<br><br>

						<label for="username"><span class="lll">USERNAME</span></label><br>
						<input type="text" name="username" id="username" class="linput">
						<span id="regerr4"></span>
						<br><br>

						<label for="password"><span class="lll">PASSWORD</span></label><br>
						<input type="password" name="password" id="password" class="linput">
						<span id="regerr5"></span>
						<br><br>

						<label for="cpassword"><span class="lll">Confirm Password</span></label><br>
						<input type="password" name="cpassword" id="cpassword" class="linput">
						<span id="regerr6"></span>
						<br><br><br>

						<input type="submit" value="SIGN UP" class="rsubmit">
						<p class="hhr"><a href="../views/Homepage.php"  class="kll">Go back to Homepage</a></p>
						<p id="msg"></p>
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