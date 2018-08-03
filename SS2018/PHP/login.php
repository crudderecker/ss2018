<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
	<link rel="stylesheet" type="text/css" href="../CSS/sign.css">
	<link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet"> 
</head>
	<body>
		<div class="logo">
			<h1>PitchShare</h1>
		</div>
		<div class="check">
			<form name="type" method="post" action="">
				<h2>E-Mail</h2>
				<input type="text" name="email" class="box"></input>
				<br>
			
			<h2>Password</h2>
				<input type="text" name="pass"  class="box"  style="-webkit-text-security: square;"></input>
				<br>	
				<input name="submit" type="submit" class="complete" value="Log-In">
			</form>
		</div>
	</body>
	<?php
	if(isset($_POST['submit'])){
		display();
	}
	function display(){
		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "psusers";
		//create connection
		
		$conn = new mysqli($servername, $username, $password, $dbname); 
		if ($conn->connect_error) {
    			die("Connection failed: " . $conn->connect_error);
			} 
			echo "";

		$sql = "SELECT * FROM psusers.Users WHERE email = LOWER('" . $_POST['email'] . "') AND  personal ='" . $_POST['pass'] . "' LIMIT 1";
		$result = $conn->query($sql);

		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				session_start();
				// session_regenerate_id(true); 
				$_SESSION['email'] = $row["email"];
				$_SESSION['pass'] = $row["personal"];
				$_SESSION['accnt'] = $row["account"];
				header("Location: profile.php");
			}
			
		}else{
			echo "<div class= 'error'>Either your email or your password don't match, try again</div>";
			}
		}
			
	?>
		
</html>
