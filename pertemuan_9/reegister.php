<?php
if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$pass_repeat = $_POST['pass_repeat'];
	$textarea = $_POST['textarea'];
	$fieldset = $_POST['fieldset'];
	
	echo "Email : " . $email . "<br>";
	echo "Password : " . $pass . "<br>";
	echo "Repeat Password : " . $pass_repeat . "<br>";
	echo "Textarea : " . $textarea . "<br>";
	echo "Fieldset : " . $fieldset . "<br>";
	echo "<a href='index.php'>Kembali</a>";
} else {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <form action=""method="POST">
            <div class="container">
                <h1>Register</h1>
                <p>please fill form</p>
                <hr>
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required />
                <label for="pass"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="pass" required />
                <label for="pass-repeat"><b>Repeat Password</b></label>
                <input type="password" placeholder="Enter Password Again" name="pass_repeat" required />
                <label for="textarea"><b>Textarea</b></label>
                <textarea name="textarea" required></textarea>
                <label><b>Fieldset</b></label>
                <br>
                <fieldset>
                    <textarea name="fieldset" required></textarea>
                </fieldset>
                <hr>
                <p>by creating asdasdads....</p>
                <button type="submit" name="submit" class="registerbtn">Register</button>
            </div>
            <div class="container signin">
                <p>Already have account? <a href="#">Sign In</a>.</p>
            </div>
    </form>
</body>
</html>

<?php

}

?>
