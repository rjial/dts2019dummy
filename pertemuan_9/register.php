<?php
session_start();
?>

<head>
	<link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
	<form action="" method="POST">
		<div class="container">
			<div class="content">
				<table>
					<tr>
						<td colspan="2"><label>Email</label></td>
					</tr>
					<tr>
						<td colspan="2"><input type="text" name="email" /></td>
					</tr>
					<tr>
						<td colspan="2"><label>Password</label></td>
					</tr>
					<tr>
						<td colspan="2"><input type="password" name="password" /></td>
					</tr>
					<tr>
						<td style="display: flex"><input type="submit" class="button" value="Register" name="submit"/></td>
						<td><button onclick="window.location.href = 'http://localhost/dts/pertemuan_9/index.php';" type="button" class="button">Back</button></td>
					</tr>
				</table>
			</div>
			<?php
			if (isset($_POST['submit'])) {
			$email = $_POST['email'];
			$password = $_POST['password'];
			?>
			<div class="content">
				<table>
					<tr>
						<td>Email</td>
						<td>:</td>
						<?php
						echo "<td>$email</td>";
						?>
					</tr>
					<tr>
						<td>Password</td>
						<td>:</td>
						<?php
						echo "<td>$password</td>";
						?>
					</tr>
				</table>
			</div>
			<?php
			}
			?>
		</div>
	</form>
</body>
