<?php
	if(isset($_POST["submit"])) {
		$uname = "telyu";
		$pass = "unipersiti";

		if($uname == $_POST["username"] && $pass == $_POST["password"]) {
			echo "Login Success";
		}
		else {
			echo "Login Failed";
		}
	}
?>

<form action="test.php" method="POST">
	Username: <input type="text" name="username"><br>
	Password: <input type="password" name="password"><br>
	<button type="submit" name="submit">LOGIN</button>
</form>