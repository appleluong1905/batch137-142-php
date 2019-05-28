<?php
	$userName = "chad";
	$myPhone = "0988794607";
	// Bien dat ten co y nghia
	// Su dung chu cai hoa hoac thuong hoac so hoac dau gach duoi
	// Bat dau bang dau $
	// Theo quy tac Camel
	// Khong bat dau bang so
	// Nen dat theo tieng Anh
	$myUserName = 'canh';
	// Cac phep toan +, -, *, /, %
	$a = 5;
	$b = 7;
	echo $a + $b;
	echo "<br>";
	echo $userName;

	// Ham trong PHP
	function myFunctionName($a = 4, $b = 5) {
		return $a + $b;
	}
	echo "<br>";
	// Goi ham trong PHP
	echo myFunctionName(9, 6);

	echo "<br>";
	$x = myFunctionName(12, 7);
	echo $x;

	echo "<br>";
	$y = myFunctionName();
	echo $y;


	function myTestFunction() {
		echo "Demo test";
	}
	echo "<br>";
	echo myTestFunction();

	// Cau dieu kien
	// if (dieu kien) {
			// neu dieu kien dung thi thuc hien cau lenh nay
	// } 

	// if (dieu kien) {
			// neu dieu kien dung thi thuc hien cau lenh nay
	// } else {
		 // neu dieu kien sai thi thuc hien cau lenh nay
	//} 

	// if (dieu kien 1) {
			// neu dieu kien 1 dung thi thuc hien cau lenh nay
	// } elseif (dieu kien 2) {
	   // neu dieu kien 2 dung thi thuc hien cau lenh nay
	// } else {
		 // neu dieu kien 1 va dieu kien 2 sai thi thuc hien cau lenh nay
	//} 

	/* Bai tap: Cho 1 so x co gia tri cho truoc, kiem tra so x la chan hay le*/
	echo "<br>";
	$x = 5;
	switch ($x) {
		case 1:
			echo "X la so 1";
			break;
		case 2:
			echo "X la so 2";
			break;
		default:
			echo "X la so khong phai 1 hoac 2";
			break;
	}
	// BT: Cho 1 so x cho truoc, kiem tra x co phai la thang trong nam khong?
	// Neu x la thang trong nam thi in ra so ngay cua thang do
	// Thang 1, 3, 5, 7, 8, 10, 12 co 31 ngay
	// Thang 2 co 28 hoac 29 ngay
	// Thang 4, 6, 9, 11 co 30 ngay

	// Cho 1 so y cho truoc, kiem tra y co phai la nam khong? neu la nam thi kiem tra nam nhuan hay khong de biet so ngay cua thang 2?
?>