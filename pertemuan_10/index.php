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
							<td colspan="2"><label>Harga</label>:</td>
						</tr>
						<tr><td colspan="2"><input type="text" name="harga" /></td></tr>
						<tr>
							<td colspan="2"><label>Jumlah</label></td>
						</tr>
						<tr><td colspan="2"><input type="text" name="jumlah" /></td></tr>
						<tr>
							<td><input type="submit" class="button" value="Hitung" name="submit"/></td>
						</tr>
					</table>
				</div>
				
				<?php
				if (isset($_POST['submit'])) {
					echo "<div class='content'>";
					$harga = $_POST['harga'];
					$jumlah = $_POST['jumlah'];
					
					$total = $harga * $jumlah;
					
					if ($total >= 500000) {
						$diskon = $total * (50/100);
					} elseif($total >= 250000) {
						$diskon = $total * (20/100);
					} elseif($total >= 100000) {
						$diskon = $total * (10/100);
					}
					echo "Harga : $total <br>";
					
					if (isset($diskon)) {
						$totalharga = $total - $diskon;
						echo "Diskon : $diskon <br>";
						echo "Total Harga :  $totalharga <br>";
					} else {
						echo "Total Harga : $harga <br>";
					}
					echo "</div>";
				}
				?>
					<br>
			</div>
	</body>
</html>
