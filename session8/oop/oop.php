<?php 
	class User {
		// thuoc tinh
		// public, protected, private
		
		private $userName = 'demo thu';
		public $city = 'Da Nang';

		// phuong thuc
		public function checkExistUsername($username) {
			echo "OK men";
		}
		protected function showName($name = 'de55444mo') {
			echo $name;
		}
	}

	// $user = new User();
 //  echo $user->city;
 //  var_dump($user->checkExistUsername('abc'));
 //  echo $user->showName();
 //  echo "<br>";
 //  echo $user->showName('canh');


?>