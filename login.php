<html>
<head>
	<style>
		.table{
			border: solid;
			border-radius: 10px;
			height: 150px;
			width: 350px;
			background-color: lightblue;
			border-color: white;
		}
		.login{
			font-size: 15px;
			background-color: rgb(0, 151, 180);
			border-color: white;
			color: black;
			border-radius: 5px;
			width: 20%;
			transition: 0.3s;
			opacity: 2;
			cursor: pointer;
			top: 10px;
		}
		.login:hover{
			background-color: white;
			transform: scale(0.5px) perspective(0.5px);
		}
	</style>
	<title>Login</title>
	<?php
		session_start();
		session_unset();
		session_destroy();
	?>
</head>
<body>
	<center>
	<div class="table">
	<center><h2>Login Page</h2></center>
	<form method="post" action="login.php">
		<table align="center">
			<tr><td>Username:</td><td><input type="text" name="Username" id="username" required></td></tr>
			<tr><td>Password:</td><td><input type="password" name="password" id="password" required></td></tr>
		</table>
		<center><input type="submit" value="Login" class="login"></center>
	</form>
	</center>
	<?php
		session_start();
		$user_name = "Debasish Maity"; // Replace with your actual username
		$password = "2021897"; // Replace with your actual password
		if(isset($_POST["Username"])){
			if($_POST["Username"] == $user_name && $_POST["password"] == $password){
				$_SESSION["loggedin"] = true;
				header("Location: DBMS_assignment.php");
			}
			else{
				echo "<center>Invalid Input</center>";
			} 
		}
		
	?>
	</div>
</body>
</html>
