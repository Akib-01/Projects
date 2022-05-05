<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
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
		.lfooter{
			position: absolute;
			min-width: 100%;
			bottom: -550px;
			left: 0;
		}
		.slogin{
			background: #FFFFFF;
			height: 600px;
			width: 500px;
			display: block;
			position: absolute;
			top: 100px;
			left: 500px;
		}
		.mainlogin{
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
		.fpass{
			float: right;
		}
		.fpass p:hover{
			color: #e37f1c;
		}
		.lsubmit
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
		.lsubmit:hover{
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
			top: 520px;
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


	<div class="animation">

		<div class="slogin">

			<div class="mainlogin">

				<div class="login-title">
					<h2>Login</h2>
					<p>New to CharitAble? &#160 <a href="Registration.php"><span class="rlink">Create an account</span></a></p>
				</div>
				<br><br>

				<div class="login-form">

					<form action="../controller/LoginAction.php" method="POST" onsubmit="return(validateLoginForm(this));">
						<label for="username"><span class="lll">USERNAME</span></label><br>
						<input type="text" name="username" id="username" class="linput" autofocus>
						<span id="err1"></span>

						<br><br>
						<label for="password"><span class="lll">PASSWORD</span></label><br>
						<input type="password" name="password" id="pass" class="linput">
						<span id="err2"></span>

						<br><br>
						<div class="fpass">
							<a href="ForgetPassword.php"><p>Forgot password?</p></a>
						</div>
						<br><br><br>

						<input type="submit" value="LOGIN" class="lsubmit">
						<p class="hhr"><a href="../views/Homepage.php"  class="kll">Go back to Homepage</a></p>
						<p id="msg"></p>
					</form>
					
				</div>
			
			</div>

		</div>
		
	</div>
	<span class="lfooter">
		<?php
			include('../views/template/footer.php');
		?>	
	</span>
	<script src="../views/script/Script.js"></script>
</body>
</html>