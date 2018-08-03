<!DOCTYPE html>
<html>
<head>
	<title>PitchShare</title>
	<link rel="stylesheet" type="text/css" href="CSS/ss.css">
	<link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet"> 
</head>
<body>
	<div class="header">
		<a href="#default" class="logo">PitchShare</a>
		<div class="header-right">
			<a class="active" href="pshome.php">Home</a>
			<a href="HTML/process.css">Process</a>
			<?php
				session_start();
				if(session_status() == PHP_SESSION_ACTIVE && $_SESSION['email'] && $_SESSION['pass']){
					echo '<a href="PHP/profile.php">Your Network</a>';
				}else{
					echo '';
				}

			?>
			<?php 
				session_start();
				if(session_status() == PHP_SESSION_ACTIVE && $_SESSION['email'] && $_SESSION['pass']){
					echo '<a href="./terminate.php">Log Out</a>';
				}else{
					echo '<a href="PHP/login.php">Sign In</a>';
				}
			?>
		</div>
	</div>

	<div class="steps">
		<div>
			<div class="circle" id="create"></div>
			<br>
			<h1 class="label">Create</h1>
		</div>

		<div>
			<div class="circle" id="pitch"></div>
			<br>
			<h1 class="label">Pitch</h1>
		</div>

		<div>
			<div class="circle" id="grow"></div>
			<br>
			<h1 class="label">Grow</h1>
		</div>
	</div>
	<br><br>
	<a href="PHP/signup.php">
		<div class="join">
			<h2 class="now">Join Now</h2>
		</div>
	</a>
	<br>
	<div class="review">
		<div class="what">
			<h1>What Is PitchShare?</h1>
		</div>
		<div class="detail">
			<div class="sp">
				<h1>Build Your Network</h1>
				<br>
				<div>
					<h2>Put your perfect marketing pitch out to the venture capilist public and get noticed faster</h2>
				</div>
			</div>

			<div class="sp">
				<h1>Grow Your Business</h1>
				<br>
				<div>
					<h2>Receive investment offers from multiple companies. You get to choose who you want to partner with</h2>
				</div>
			</div>

			<div class="sp">
				<h1>Earn With Ease</h1>
				<br>
				<div>
					<h2>Pitching is quick, easy, and affordable with a fee of only $5 a pitch</h2>
				</div>
			</div>
		</div>
	</div>
</body>
</html>