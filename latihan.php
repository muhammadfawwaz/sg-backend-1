<?php
	$nama = "Farid";
	$umur = 20;

	define("hari","selasa",true);
	$nilai1 = 1;
	$nilai2 = 11;
	$nilai3 = 22;
	$nilai4 = 1;

	$jumlah = $nilai1 + $nilai2;
	$kurang = $nilai1 - $nilai2;
	$kali = $nilai1 * $nilai2;

	echo "Nilai Jumlah: $jumlah<br>Nilai Kurang: $kurang<br>Nilai Kali: $kali<br>";

	switch($nilai1) {
		case 1:
			echo "1";
			break;
		case 2:
			echo 2;
			break;
		case 3:
			echo 3;
			break;
		default:
			echo "error";
	}
	echo "<br><br>";

	$nilai1 = 0;
	do {
		echo "heheeeeee";
		$nilai1++;
	}
	while($nilai1 <= 10);

	echo "<br> <br>";
	$arrayName = array("satu" => 1,"dua" => 2,"tiga" => 3,"empat" => 4,"lima" => 5,"enam" => 6,"tujuh" => 7);
	echo $arrayName["satu"];
	echo "<br>". $nilai3%$umur;

	echo "<br>";
	function perkalian($nilai1,$nilai2) {
		return $nilai1 * $nilai2;
	}
	echo perkalian(5,7);
?>