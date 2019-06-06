<!DOCTYPE html>
<html>
<head>
	<title>Phieu tinh tien dien - Session 4</title>
	<style type="text/css">
		.error {
			color: red;
		}
	</style>
</head>
<body>
	<?php
	$errHoten = $errNgayDau = $errNgayCuoi = $errSoDau = $errSoCuoi = '';
	$tienDien = 0;
	$soDien = 0;
	$checkTinhTien = true;
	if (isset($_POST['submit'])) {
		$hoten    = $_POST['hoten'];
		$ngaydau  = $_POST['ngaydau'];
		$ngaycuoi = $_POST['ngaycuoi'];
		$sodau    = $_POST['sodau'];
		$socuoi   = $_POST['socuoi'];
		if ($hoten == '') {
			$errHoten = 'Vui long dien ho va ten';
			$checkTinhTien = false;
		}
		if ($ngaydau == '') {
			$errNgayDau = 'Vui long dien ngay dau ky';
			$checkTinhTien = false;
		}
		if ($ngaycuoi == '') {
			$errNgayCuoi = 'Vui long dien ngay cuoi ky';
			$checkTinhTien = false;
		}
		if ($sodau == '') {
			$errSoDau = 'Vui long dien so dau ky';
			$checkTinhTien = false;
		}
		if ($socuoi == '') {
			$errSoCuoi = 'Vui long dien so cuoi ky';
			$checkTinhTien = false;
		}
		if ($sodau > $socuoi) {
			$errSoDau = 'So dau ky phai nho hon hoac bang so cuoi ky';
			$checkTinhTien = false;
		}
		if ($ngaydau > $ngaycuoi) {
			$errNgayDau = 'Ngay dau ky phai nho hon hoac bang ngay cuoi ky';
			$checkTinhTien = false;
		}
		$soDien = $socuoi - $sodau;
		if ($soDien <= 100) {
			$tienDien = $soDien*1500;
		}
		if ($soDien > 100 && $soDien <= 300) {
			$tienDien = 100*1500 + ($soDien - 100)*2000;
		}
		if ($soDien > 300) {
			$tienDien = 100*1500 + 200*2000 + ($soDien - 300)*3500;
		}
		if ($checkTinhTien) {
			echo "<p>Phieu tinh tien dien cua gia dinh: ".$hoten."</p>";
			echo "<p>Tien dien tinh tu ngay: ".$ngaydau." den ngay ".$ngaycuoi."</p>";
			echo "<p>So tien dien can thanh toan la: ".number_format($tienDien)." VND";
		}
	}
	?>
	<h1>Phieu tinh tien dien</h1>
	<form method="POST">
		<p>
			Ho ten:
			<input type="text" name="hoten">
		</p>
		<p class="error"><?php echo $errHoten;?></p>
		<p>
			Ngay dau ky:
			<input type="date" name="ngaydau">
		</p>
		<p class="error"><?php echo $errNgayDau;?></p>
		<p>
			Ngay cuoi ky:
			<input type="date" name="ngaycuoi">
		</p>
		<p class="error"><?php echo $errNgayCuoi;?></p>
		<p>
			So dau ky:
			<input type="text" name="sodau">
		</p>
		<p class="error"><?php echo $errSoDau;?></p>
		<p>
			So cuoi ky:
			<input type="text" name="socuoi">
		</p>
		<p class="error"><?php echo $errSoCuoi;?></p>
		<p>
			<input type="submit" name="submit" value="Submit">
		</p>
	</form>
</body>
</html>