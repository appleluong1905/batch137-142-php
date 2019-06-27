<?php 
	include 'config/database.php';
	class Model extends Connect{

		// Lay thong tin trang chu
		public function getHome() {
			$sql = "SELECT users.id as user_id, username, city, gender, avatar, roles.name as role_name FROM users INNER JOIN roles ON users.role_id = roles.id";
			$result = mysqli_query($this->connectDB(), $sql);
			return $result;
		}
		// Lay thong tin san pham
		public function getProducts() {
			$products = "get Products from database";
			return $products;
		}
		// Lay thong tin tin tuc
		public function getNews() {
			$news = "get News from database";
			return $news;
		}
		// Lay thong tin lien he
		public function getContact() {
			$contact = "get Contact from database";
			return $contact;
		}
		// Xoa user theo id
		public function deleteUser($idUser) {
			$sql = "DELETE FROM users WHERE id = $idUser";
			$result = mysqli_query($this->connectDB(), $sql);
			return $result;
		}
		// Them user 
		public function addUser($username, $role_id){
			$sql = "INSERT INTO users (role_id, username, password, gender, city, avatar) VALUES($role_id, '$username', 'test', 'male', 'hue', 'test')";
			return mysqli_query($this->connectDB(), $sql);
		}
		// lay danh sach role
		public function getRole() {
			$sql = "SELECT * FROM roles";
			$result = mysqli_query($this->connectDB(), $sql);
			return $result;
		}
		// lay thong tin user thoe id
		public function getUser($id) {
			$sql = "SELECT users.id as user_id, username, city, gender, avatar, roles.id as role_id FROM users INNER JOIN roles ON users.role_id = roles.id WHERE users.id = $id";
			$result = mysqli_query($this->connectDB(), $sql);
			return $result->fetch_assoc();
		}
		// Edit user
		public function editUser($id, $username, $role_id){
			$sql = "UPDATE users SET username = '$username', role_id = $role_id WHERE id = $id";
			return mysqli_query($this->connectDB(), $sql);

		}
		//check login
		public function checkLogin($username, $password) {
			$sql = "SELECT username, password FROM users WHERE username = '$username' AND password = '$password'";
			return mysqli_query($this->connectDB(), $sql);
		}

	}
?>