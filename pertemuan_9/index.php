<?php

session_start();

if (isset($_SESSION['email'])) {
	header("Location: home.php");
	
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$pass = $_POST['password'];
	
	if ($email == "bla@bla.com" AND $pass="12345") {
		$_SESSION['email'] = $email;
		
		header("Location: home.php");
		
	} else {
		
		echo "Email atau password salah";
		
	}

}
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style/style.css" />
		
	</head>

	<body>
		<form action="index.php" method="POST">
			<div class="container">
				<div class="content">
					<table>
						<tr>
							<td colspan="2"><label>Email (bla@bla.com)</label>:</td>
						</tr>
						<tr><td colspan="2"><input type="text" name="email" /></td></tr>
						<tr>
							<td colspan="2"><label>Password (12345)</label></td>
						</tr>
						<tr><td colspan="2"><input type="password" name="password" /></td></tr>
						<tr>
							<td><input type="submit" class="button" value="Login" name="submit"/></td>
							<td><button onclick="window.location.href = 'http://localhost/dts/pertemuan_9/reegister.php';" type="button" class="button">Register</button></td>
						</tr>
					</table>
				</div>
				
			</div>
	</body>
</html>
