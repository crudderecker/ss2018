<!DOCTYPE html>
<html>
<head>
	<title>Your Profile</title>
	<link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="../CSS/profile.css">

</head>
<body>
	<div class="header">
		<a href="#default" class="logo">PitchShare</a>
		<div class="header-right">
			<a class="active" href="../sshome.php">Home</a>
			<a href="HTML/process.css">Process</a>
			<a href="profile.php">Your Network</a>
			<?php 
				session_start();
				if(session_status() == PHP_SESSION_ACTIVE && $_SESSION['email'] && $_SESSION['pass']){
					echo '<a href="../terminate.php">Log Out</a>';
				}else{
					echo '<a href="./login.php">Sign In</a>';
				}
			?>
		</div>
	</div>
	<div class="name">
		<h1>Your 
			<?php
			session_start();
			if (session_status() == PHP_SESSION_ACTIVE && $_SESSION['accnt']){
				echo  $_SESSION['accnt'];
			}
		?>
		Page
	</h1>
	<br>
	<script src="../JS/profile.js"></script>
	<button class="tablink" onclick="openPage('Home', this, 'red')">Home</button>
	<button class="tablink" onclick="openPage('News', this, 'green')" id="defaultOpen">News</button>
	<button class="tablink" onclick="openPage('Contact', this, 'blue')">Contact</button>
	<button class="tablink" onclick="openPage('About', this, 'orange')">About</button>

	<div id="Home" class="tabcontent">
	  <h3>Hardware</h3>
	  <p>Home is where the heart is..</p>
	</div>
	<div id="News" class="tabcontent">
	  <h3>Software</h3>
	  <p>Some news this fine day!</p> 
	</div>

	<div id="Contact" class="tabcontent">
	  <h3>Crypto</h3>
	  <p>Get in touch, or swing by for a cup of coffee.</p>
	</div>

	<div id="About" class="tabcontent">
	  <h3>Food & Agriculture</h3>
	  <p>Who we are and what we do.</p>
	</div>
		
</body>
</html>