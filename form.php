<?php
	if(isset($_GET["submit"])) {
		$nama = $_GET["nama"];
		$umur = $_GET["umur"];

		echo "Nama saya $nama<br>Umur saya $umur";
		echo "<br> <br> <br>";
	}
?>

<form action="form.php" method="GET">
	Nama: <input type="text" name="nama"><br>
	Umur: <input type="number" name="umur"><br>
	<button type="submit" name="submit">Kirim</button>
</form>
<?php
	if(isset($_POST["login"])) {
		$usernameA = "telyu";
		$passwordA = "yainisaya";

		if($usernameA == $_POST["username"] && $passwordA == $_POST["password"]) {
			echo "Login Success";
		}
		else {
			echo "Username dan password salah";
		}
	}
?>

<form action="form.php" method="POST">
	username: <input type="text" name="username">
	password: <input type="password" name="password">
	<button type="submit" name="login">Login</button>
</form>