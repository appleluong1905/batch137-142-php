<?php 
	include 'oop.php';
	class Student extends User {

		public function testProtected() {
			$this->showName();
		}

		public function checkExistUsername($username) {
			echo "OK men 2222";
		}
	}

	$student = new Student();
  echo $student->city;
  echo $student->showName;
  //echo $student->testProtected();
  $user = new User();
  echo $user->checkExistUsername('aaa');
  echo $student->checkExistUsername('aaa');
?>