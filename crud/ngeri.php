<?php
	include_once("config.php");
	$result = mysqli_query($mysqli, "SELECT * FROM trolley");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>PRICE</th>
			<th>QUANTITY</th>
			<th>TOTAL PRICE</th>
		</tr>
		<?php
			while($user_data = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>".$user_data["id"]."</td>";
				echo "<td>".$user_data["name"]."</td>";
				echo "<td>".$user_data["price"]."</td>";
				echo "<td>".$user_data["qty"]."</td>";
				echo "<td>".$user_data["qty"] * $user_data["price"]."</td>";
				echo "</tr>";
			}
		?>
	</table>
	<p>Add</p>
	<?php
		include_once("config.php");
		if(isset($_POST["submit"])) {
			$name = $_POST["name"];
			$price = $_POST["price"];
			$qty = $_POST["qty"];
			$result = mysqli_query($mysqli, "INSERT INTO trolley(name,price,qty) VALUES('$name', '$price', '$qty')");
			echo "Add success";
		}
		if(isset($_POST["del"])) {
			$id = $_POST["id"];
			$dele = mysqli_query($mysqli,"DELETE FROM trolley WHERE id=$id");
			echo "hehehehe";
		}
		if(isset($_POST["update"])) {
			$name = $_POST["nameU"];
			$price = $_POST["priceU"];
			$qty = $_POST["qtyU"];
			$id = $_POST["idU"];

			$result = mysqli_query($mysqli,"UPDATE trolley SET name='$name', price=$price, qty=$qty WHERE id=$id");
		}
	?>
	<form action="ngeri.php" method="POST">
		Name: <input type="text" name="name"><br>
		Price: <input type="number" name="price"><br>
		Quantity: <input type="number" name="qty"><br>
		<button type="submit" name="submit">Submit</button>
	</form>
	<form action="ngeri.php" method="POST">
		ID: <input type="number" name="id"><br>
		<button type="submit" name="del">Delete</button>
	</form>
	<form action="ngeri.php" method="POST">
		Name: <input type="text" name="nameU"><br>
		Price: <input type="number" name="priceU"><br>
		Quantity: <input type="number" name="qtyU"><br>
		ID: <input type="number" name="idU"><br>
		<button type="submit" name="update">Submit</button>
	</form>
</body>
</html>