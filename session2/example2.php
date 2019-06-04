<?php 
	//BT1:
	$binhBook = 27;
	$minhBook = $binhBook/3;
	$soLanChuyen = 0;
	while ($binhBook != $minhBook*2) {
		$binhBook--;
		$minhBook++;
		$soLanChuyen++;
	}
	echo "<br>";
	echo "So lan Binh chuyen sach cho Minh de so sach cua Binh gap doi so
	sach cua Minh la: ".$soLanChuyen;

	echo "<br>";
	//BT2:
	function ex2($money) {
		$candy = 0;
		$candyShell = 0;
		while ($money > 0) {
			// moi lan doi keo bang tien ton 200
			$money -= 200;
			// so keo tang len 1
			$candy++;
			// so vo tang len 1
			$candyShell++;
			// neu so vo keo bang 2 thi doi keo mot lan
			while ($candyShell == 2) {
				// so vo giam di 2
				$candyShell-=2;
				// so keo tang len 1
				$candy++;
				// so vo tang len 1
				$candyShell++;
			}
		}
		return $candy;
	}
	echo ex2(2000);

	//BT3:
	echo "<br>";

	function ex3() {
		// so keo ban dau la 0
		$candy = 0;
		// gia su do tien ban dau la 0
		$euroMoney = 0;
		$dolarMoney = 0;
		// neu chua du 50 cai keo thi doi tiep
		while ($candy < 50) {
			// doi dolar thi ton 5$
			$dolarMoney-=5;
			// duoc 1 cai keo moi lan doi
			$candy++;
			// co them 3 euro sau moi lan doi keo bang dolar
			$euroMoney+=3;
			// Con tien euro la con doi
			while ($euroMoney > 0) {
				// doi euro thi ton 2 euro
				$euroMoney-=2;
				// moi lan doi euro dc tang 3 dolar
				$dolarMoney+=3;
				// tang keo len 1 sau moi lan doi
				$candy++;
			}
		}
		return "Ban da ton ".$dolarMoney." de co duoc 50 cai keo";
	}
	echo ex3();
?>


