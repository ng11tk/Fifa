<!DOCTYPE html>
<html>
<head>
	<title>Player information</title>
	<link rel="stylesheet" href="css/project.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body style="background-image: url('Pic/fifa-18-4k-q4.jpg')">
	<h1 class="h">FIFA Player</h1>
        <div class="container2" >

        <form action="includes/sign-up.inc.php" method="post">
			<div class="sign-in">sign up form </div>
			<?php
			if (isset($_GET["error"])){
				if ($_GET["error"] == "emptyfields") {
					echo '<p class="signuperror">Fill in all fields!</p>';
				}
				elseif ($_GET["error"] == "invalidmails&uid") {
				echo '<p class="signuperror">Invalid username and e-mail!</p>';
				}
				elseif ($_GET["error"] == "invaliduid") {
				echo '<p class="signuperror">Invalid username!</p>';
				}
				elseif ($_GET["error"] == "invalidmails") {
				echo '<p class="signuperror">Invalid e-mails!</p>';
				}
				elseif ($_GET["error"] == "passwordCheck") {
				echo '<p class="signuperror">Password do not match!</p>';
				}
				elseif ($_GET["error"] == "usertaken") {
				echo '<p class="signuperror">Userid is already taken!</p>';
				}
			}
			elseif (isset($_GET["signup"] )){
                if($_GET["signup"]  == "success"){
				echo '<p class="signupsuccess">Signup successful!</p>';
			}
            }
			 ?>
			<input type="text" name="uid" placeholder="Username"><br>
			<input type="email" name="mail" placeholder="Email"><br>
			<input type="password" name="pwd" placeholder="Password"><br>
			<input type="password" name="re-pwd" placeholder="Confirm Password"><br>
			<input type="submit" name="signup-submit"><br>
            <a href="#" class="fa fa-facebook"></a>
			<a href="#" class="fa fa-google"></a><br>
        </form>
    </div>

</body>
</html>
