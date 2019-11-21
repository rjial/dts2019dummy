<head>
	<link rel="stylesheet" type="text/css" href="style/style.css" />
</head>
<body>
	<div class="container">
		<div class="content">
		<?php
			session_start();

			session_destroy();
			
			echo "anda logout! <br>";
			echo "<a href='index.php' class='button'>Login</a><br>";
		?>
		</div>
	</div>
</body>
