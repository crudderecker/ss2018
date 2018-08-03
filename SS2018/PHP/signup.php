<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="../CSS/sign.css">
	<link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet"> 
</head>
	<body>
		<div class="logo">
			<h1>PitchShare</h1>
		</div>
		<div class="info"/>
			<form name="type" method="post"> 
				<h2>What Type Of Account Are You Creating?</h1>
				<div  class="choice" style="width: 20px; border-radius: 12px;">
					<select name="account" style="width: 120px; height: 50px;">
						<option class="opt">Start-Up</option>
						<option class="opt">Investor</option>
					</select>
				</div>
				<br>

				<h2>Enter Your E-Mail</h1>
				<input type="text" name="email" class="box"></input>
				<br>
			
			<h2>Create Your Password</h1>
				<input type="text" name="pass"  class="box"  style="-webkit-text-security: square;"></input>
				<h2>Confirm Password</h1>
				<input type="text" name="pass2" class="box"  style="-webkit-text-security: square;"></input>
				<br>
				<div class="final">
					<p>By clicking this button, you agree to the <span><a href="../terms2018">terms</a></span> established by PitchShare. Breaking this agreement can lead to the users account being voided or lawsuit.</p>
					
					<input name="submit" type="submit" class="complete" value="Complete Account">
				</div>
			</form>
		</div>
		<?php
			if (isset($_POST['submit'])){
				insert();
			}
			
			function insert(){
			$servername = "localhost";
			$username = "root";
			$password = "root";
			$dbname = "psusers";
			//create connection
			$conn = new mysqli($servername, $username, $password, $dbname); 
			if ($conn->connect_error) {
    			die("Connection failed: " . $conn->connect_error);
			} 
			echo "Connected successfully";

			$sql = "INSERT INTO psusers.Users (account, email, personal) VALUES('" . $_POST['account'] . "' , '" . $_POST['email'] . "' , '" . $_POST['pass'] ."')";
		
		
			if ($conn->query($sql) === TRUE) {
				session_start(); 
				$_SESSION['email'] = $row["email"];
				$_SESSION['pass'] = $row["personal"];
				$_SESSION['accnt'] = $row["account"];
    			echo "New record created successfully";
    			header("Location: login.php");
			} else {
   				echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}

		?>
	</body>
</html>