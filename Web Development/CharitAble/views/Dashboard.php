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
	<title>Dashboard</title>
	<link rel="stylesheet" href="../views/CSS/style.css">
	<script src="../views/script/ajax.js"></script>
	<style>
		table {
				  width: 100%;
				  border-collapse: collapse;
				}

		table, td, th {
				  border: 1px solid black;
				  padding: 5px;
				}

		th {text-align: left;}

		.p{
			box-shadow: inset 0 0 30px 30px rgba(0, 0, 0, 1.0);
		}

	</style>
</head>
<body>
	<div class="iheader">
	<?php
		include('../views/template/header.php');
	?>
	</div>
	
	<br><br><br>
	<!--------------------------Sidebar------------------>
	<div class="container">

            <button class="click">Menu</button>

            <div class="list">

				<button class="links" ><a href="../views/ViewProfile.php"><p class="stt">View Profile</p></a></button>
				<button class="links"><a href="../views/DonateMoney.php"><p class="stt">Donate</p></a></button>
				<button class="links"><a href="../views/ChangePassword.php"><p class="stt">Change Password</p></a></button>
				<button class="links"><a href="../views/Logout.php"><p class="stt">Logout</p></a></button>

            </div>

        </div>

        <script>

            let click = document.querySelector('.click');

            let list = document.querySelector('.list');

            click.addEventListener("click",()=>{

                list.classList.toggle('newlist');

            });

        </script>
       <!--------------------sidebar----------------->
<br><br>

<!---------------------------------Request & Donate Fund-------------->

<div class="options">
	<div class="Request-Money" id="options"><a href="../views/RequestMoney.php"><img src="../views/CSS/assets/RequestMoney.png" alt="" height="70" width="70"><p>Request Money</p></a></div>



	<div class="Donate-Money" id="options"><a href="../views/DonateMoney.php"><img src="../views/CSS/assets/Donate.png" alt=""><p>Donate Money</p></a></div>



	<div class="Events" id="options"><a href="../views/JoinEvents.php"><img src="../views/CSS/assets/Events.png" alt=""><span class="ee">Events</span></a></div>



	<div class="Top-Donator" id="options"><a href="#TopDonator"><img src="../views/CSS/assets/crown.png" alt="" height="70" width="70"><p>Top Donators</p></a></div>



	<div class="Feedback" id="options"><a href="#feedback"><img src="../views/CSS/assets/Feedback.png" alt=""><span class="fffff">Feedback</span></a></div>
	
</div>




<!----------------------------------- Events --------------------------------------->

<div class="events">
	<a  id="events">
	<div class="event-section-header"><h1>Events</h1></div><br><br>
	<div class="event1">

		<img src="../views/CSS/assets/iftar.jpg" alt="Iftar" height="504px" width="692px" style="opacity: 0.4" id="p" class="e1pic">
		<span id="captions" class="captions"><p class="r">Ramadan</p><br><p class="c">Iftar for the poor Muslims.</p></span>
		<button class="event-donate"><a href="../views/JoinEvents.php"><p>Join</p></a></button>
	</div>
<div class="flex">
	<div class="event2">

		<img src="../views/CSS/assets/st.jpg" alt="education" height="250px" width="410px" style="opacity: 0.2;" id="p" class="e2pic">
		<div id="caption" class="captions1"><p class="r">Free Education</p><br><p class="c">Education for street children.</p>
		<button class="event-donate1"><a href="../views/JoinEvents.php"><p>Join</p></a></button></div>
	</div>
	<div class="event33">

		<img src="../views/CSS/assets/cloth.webp" alt="education" height="250px" width="410px" style="opacity: 0.2;" id="p" class="e2pic">
		<div id="caption" class="captions2"><p class="r">Eid</p><br><p class="c">Share the joy in this Eid</p>
		<button class="event-donate2"><a href="../views/JoinEvents.php"><p id="msg">Join</p></a></button></div>
	</div>
	<div class="event4">

		<img src="../views/CSS/assets/1.jpg" alt="education" height="250px" width="410px" style="opacity: 0.2;" id="p" class="e2pic">
		<span id="caption" class="captions3"><p class="r">Food</p><br><p class="c">one taka meal</p>
		<button class="event-donate3"><a href="../views/JoinEvents.php"><p>Join</p></a></button></span>
	</div>
	<div class="event5">

		<img src="../views/CSS/assets/medicine.jpg" alt="education" height="250px" width="410px" style="opacity: 0.2;" id="p" class="e2pic">
		<span id="caption" class="captions4"><p class="r">Health</p><br><p class="c">Free medical camp</p>
		<button class="event-donate4"><a href="../views/JoinEvents.php"><p>Join</p></a></button></span>
	</div>
	</a>

</div>
	
</div>

<!----------------------------------- Events --------------------------------------->

<!----------------------------------- Top Donators --------------------------------------->
<a id="TopDonator">
<p class="title-t">Donators</p>



		
	</div>
	<div class="tform">
	<form action="../Controller/TopDonatorAction.php" method="get" onsubmit="validateTopDonatorSearch(this); return false;">
		<input type="text" name="s" id="s">
		<span id="errh"></span>
		<input type="submit" value="Search" class=".lsubmit">
		<p id="hint"></p>
	</form>
<div class="TopDonator" style="">
	<?php
			require "../model/registrationdb.php";


			$sql="SELECT * FROM donate";
			$result = $connect->query($sql);


			echo "  <table>
					<tr>
					<th>ID</th>
					<th>Organization Name</th>
					<th>Event</th>
					<th>Amount</th>
					</tr>";
		  while($row = $result->fetch_assoc()){
		  echo "<tr>";
		  echo "<td>" . $row['id'] . "</td>";
		  echo "<td>" . $row['oname'] . "</td>";
		  echo "<td>" . $row['event'] . "</td>";
		  echo "<td>" . $row['amount'] . "</td>";
		  echo "</tr>";
		}
		echo "</table>";

	?>
</div>
</div>
</a>

<!----------------------------------- Top Donators --------------------------------------->



<!----------------------------------- Feedback------------------------------------>
<a id="feedback">
			<div class="give-feedback">
				<p class="title-f">Feedback</p>
				<div class="gform">
						<form method='post' action="../Controller/FeedbackAction.php" onsubmit="validateGiveFeedbackForm(this); return false;">
							<label class="glabel" for="uname">Username</label><br>
							<input class="gtext" style="width:200px; height:30px" type="text" id="username" name="username" disabled value="<?php echo $_SESSION['username'] ?>">
							  
							<span id="err2"></span>
							<br><br>
							<label class="glabel" for="c">Comment</label><br>
							<textarea class="gtext" name="comments" id="comments" placeholder="Write Your Comment Here....." cols="60" rows="10"></textarea>
							<span id="err1"></span>
							<br><br>

							 <input class="gsubmit" type="submit" value="Post Comment">
							  <p id="msg"></p>
					  </form>
				</div>
			</div>

			</a>
	<p class="fline">&#160</p>
  </div>
<!----------------------------------- Feedback ------------------------------------>

	</div>

	<span class="dfooter">
		<?php
			include('../views/template/footer.php');
		?>	
	</span>
	<script src="../views/script/Script.js"></script>
</body>
</html>