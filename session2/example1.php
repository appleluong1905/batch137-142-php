<?php 
	for ($i = 0; $i < 10; $i++) {
		echo $i;
		echo "<br>";
	}
	// Cho day so tu 1 den 100
	// Kiem tra so nao chia het cho 3 thi in ra "so n chia het cho 3"
	// Kiem tra so nao chia het cho 5 thi in ra "so n chia het cho 5"
	// Kiem tra so nao chia het cho 15 thi in ra "so n chia het cho 15" ma khong
	// in ra so n chia het cho 3 hoac so n chia het cho 5
	/*
		Vi du:
		So 3 chia het cho 3
		....
		So 10 chia het cho 5
		...
		So 15 chia het cho 15
		...
		So 18 chia het cho 3
		...
	*/
		echo "----------<br>";
		$n = 5;
		while ($n < 10) {
			echo $n;
			$n++;
		  echo "<br>";
		}
		echo "----------<br>";
		$m = 5;
		do {
			echo $m;
			$m++;
		  echo "<br>";
		} while ($m < 10);
?>