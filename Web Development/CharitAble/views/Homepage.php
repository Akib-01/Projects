<?php 
$Month = 2592000 + time();
$date = new DateTime(null, new DateTimeZone('Asia/Dhaka'));

//this adds 30 days to the current time
setcookie("UserVisit", $date->format("F jS - g:i a"), $Month);
if(isset($_COOKIE['UserVisit']))
{
$last = $_COOKIE['UserVisit'];
echo "Welcome back! <br> You last visited on ". $last;
}
else
{
echo "Welcome to our site!";
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Homepage</title>
	<link rel="stylesheet" href="../views/CSS/style.css">
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="grid"><i class="fas fa-phone"></i>
		<p class="phone"> call us: <strong> +88017123456789</strong></p>
		<div class="rl">
			<ul>
				<li>
					<a href="Login.php" class="login">Login</a>&#160;
					<a href="Registration.php" class="register">Register</a>
				</li>
			</ul>
		</div>
	</div>
	<?php
		include('../views/template/header.php');
	?>
	<br><br><br><br>


	<!----------------------------------- slideshow ------------------------------------>

		<div class="slideshow-container">
	        <div class="mySlides fade">
	            <div class="numbertext">1 / 3</div>
	            <img src="../views/CSS/assets/p1.jpg"  class="img">
	            <span class="text"><h1>We can Change it together</h1> <br> <p>Your small donation can bring food to them.
	            	<button class="lrn"><a href="#"> Learn More</a></button></p></span>
	        </div>
	        <div class="mySlides fade">
	            <div class="numbertext">2 / 3</div>
	            <img src="../views/CSS/assets/p2.jpg" class="img">
	            <span class="text"><h1>Make a step</h1> <br> <p>Let's solve the homelessness together.
	            	<button class="lrn"><a href="#"> Learn More</a></button></p></span>
	        </div>
	        <div class="mySlides fade">
	            <div class="numbertext">3 / 3</div>
	            <img src="../views/CSS/assets/p3.jpg" class="img">
	            <span class="text"><h1>Let's Donate</h1> <br> <p>Your small donation can make their life easy.
	            	<button class="lrn"><a href="#"> Learn More</a></button></p></span>
	        </div>
	        <!--<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	        <a class="next" onclick="plusSlides(1)">&#10095;</a>-->
	     	
	     </div>
	    <br>
	    <!--<div style="text-align:center">
	        <span class="dot" onclick="currentSlide(1)"></span>
	        <span class="dot" onclick="currentSlide(2)"></span>
	        <span class="dot" onclick="currentSlide(3)"></span>
	    </div>-->
	    <br><br><br><br>


	    

<!----------------------------------- slideshow ------------------------------------>



	    <div class="section-img">
	    <p class="be">&#160</p>
	    <img src="../views/CSS/assets/drop.PNG" alt="drop" class="drop-logo">
	    <p class="fe">&#160</p>
	    </div>

	    <div class="info">
	    <h1>About Us</h1>
	    <p><b>CharitAble</b> connects <b>nonprofits</b>, <b>donors</b>, and <b>underprivileged</b>. We work as a non-profit organization and also help other non-profit organizations so that they can serve their own communities. This way we can reach more people all over the world.</p><br><br><br>

	    <p><b><i>Choose CharitAble; Choose Love.</i></b></p>
	    </div>
	    <br><br><br>
<!--

	    <p class="line">&#160</p>

	    <br><br><br>
	    <section class="staff">
	    	<h1 class="staff-section-title">Our Staff</h1>
	    	--><!----------1st--------->
<!--	    	<br>
	    	<ul>
		    	<li class="staff-items">
			    	<div class="staff-pic">
			    		<img src="../views/CSS/assets/download.jpg" alt="Akib" height="248" width="285">
			    	</div>
			    	<div class="staff-details">
			    		<p>
			    			Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Corporis exercitationem incidunt asperiores deleniti rerum, odio placeat harum dolores sequi, eligendi rem beatae delectus magni commodi laudantium? Esse labore, asperiores soluta.
			    			<br><br><br>
			    			<p class="ss">&#160</p>
			    		</p>
			    	</div>
		    	</li>
		    	--><!----------2nd--------->
<!--		    	<li class="staff-items2">
			    	<div class="staff-pic">
			    		<img src="../views/CSS/assets/download.jpg" alt="Akib" height="248" width="285">
			    	</div>
			    	<div class="staff-details">
			    		<p>
			    			Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Corporis exercitationem incidunt asperiores deleniti rerum, odio placeat harum dolores sequi, eligendi rem beatae delectus magni commodi laudantium? Esse labore, asperiores soluta.
			    			<br><br><br>
			    			<p class="ss">&#160</p>
			    		</p>
			    	</div>
		    	</li>
		    	--><!----------3rd & 4th--------->
<!--		    	<li class="staff-items3">
			    	<div class="staff-pic">
			    		<img src="../views/CSS/assets/download.jpg" alt="Akib" height="248" width="285">
			    	</div>
			    	<div class="staff-details">
			    		<p>
			    			Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Corporis exercitationem incidunt asperiores deleniti rerum, odio placeat harum dolores sequi, eligendi rem beatae delectus magni commodi laudantium? Esse labore, asperiores soluta.
			    			<br><br><br>
			    			<p class="ss">&#160</p>
			    		</p>
			    	</div>
		    	</li>

		    	<li class="staff-items4">
			    	<div class="staff-pic">
			    		<img src="../views/CSS/assets/download.jpg" alt="Akib" height="248" width="285">
			    	</div>
			    	<div class="staff-details">
			    		<p>
			    			Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Corporis exercitationem incidunt asperiores deleniti rerum, odio placeat harum dolores sequi, eligendi rem beatae delectus magni commodi laudantium? Esse labore, asperiores soluta.
			    			<br><br><br>
			    			<p class="ss">&#160</p>
			    		</p>
			    	</div>
		    	</li>
		    	</div>
	    	</ul>
	    </section>
-->
	    <div class="Quotes">


	    	<p><b><i>“ A man's true wealth is the good he does in this world.” Prophet Muhammad (S.A.W)<br>
                    “Those who spend in charity will be richly rewarded” (Quran 57:10)</i></b></p>
	    	
	    </div>


	    <?php
			include('../views/template/footer.php');
		?>
		<script src="../views/Script/script.js"></script>
</body>
</html>