<?php 
	include 'config/database.php';
	class Model extends Connect{

		public function getHome() {
			$sql = "SELECT * FROM users";
			$result = mysqli_query($this->connectDB(), $sql);
			return $result;
		}
		public function getProducts() {
			$products = "get Products from database";
			return $products;
		}
		public function getNews() {
			$news = "get News from database";
			return $news;
		}
		public function getContact() {
			$contact = "get Contact from database";
			return $contact;
		}
		public function deleteUser($idUser) {
			$sql = "DELETE FROM users WHERE id = $idUser";
			$result = mysqli_query($this->connectDB(), $sql);
			return $result;
		}

	}
?>