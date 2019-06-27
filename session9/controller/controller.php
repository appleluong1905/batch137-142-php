<?php 
	include 'model/model.php';
	class Controller {
		public function handleRequest() {
			// xu ly cong viec
			$action = isset($_GET['action'])?$_GET['action']:'home';
			$model = new Model();
			switch ($action) {
				case 'home':
					if(!isset($_SESSION['login'])) {
						header("Location: index.php?action=login");
					}
					$gender = array(
	    		'male' => 'Male',
	    		'female' => 'Female',
	    		'other' => 'Other',
	    		);
		    	$city = array(
		    		'quangtri' => 'Quang Tri',
		    		'hue' => 'Hue',
		    		'danang' => 'Da Nang',
		    		'quangnam' => 'Quang Nam'
		    		);
				  $home = $model->getHome();
					include 'view/home/show_info.php';
					break;
				case 'news':
					$news = $model->getNews();
					include 'view/news/index.php';
					break;
				case 'products':
					$products = $model->getProducts();
					include 'view/products/index.php';
					break;
				case 'contact':
				  $contact = $model->getContact();
					include 'view/contact/index.php';
					break;
				case 'delete_user':
				  if(!isset($_SESSION['login'])) {
						header("Location: index.php?action=login");
					}
					$idUser = $_GET['id'];
				  if ($model->deleteUser($idUser) === TRUE) {
				  	header("Location: index.php");
				  }
					break;
				case 'add_user':
				  if(!isset($_SESSION['login'])) {
						header("Location: index.php?action=login");
					}
					$roles = $model->getRole();
					if (isset($_POST['add'])) {
						$username = $_POST['username'];
						$role_id = $_POST['role_id'];
						if ($model->addUser($username, $role_id) === TRUE) {
							header("Location: index.php");
						}
					}
					include 'view/home/add_user.php';
					break;
				case 'edit_user':
				  if(!isset($_SESSION['login'])) {
						header("Location: index.php?action=login");
					}
				  // lay thong tin id cua user can edit
					$id = $_GET['id'];
					// lay danh sach role
					$roles = $model->getRole();
					// lay thong tin user can edit theo id
					$editUser = $model->getUser($id);
					// submit edit user
					if (isset($_POST['edit'])) {
						$username = $_POST['username'];
						$role_id = $_POST['role_id'];
						// goi ham edit user
						if ($model->editUser($id, $username, $role_id) === TRUE) {
							// chuyen ve trang index.php sau khi edit thanh cong
							header("Location: index.php");
						}
					}

					// view hien thi edit user
					include 'view/home/edit_user.php';
					break;
				case 'login':
							if (isset($_POST['login'])) {
								$username = $_POST['username'];
								$password = $_POST['password'];
								$checkLogin = $model->checkLogin($username, $password);
								if ($checkLogin->num_rows) {
									$_SESSION['login'] = $username;
									header("Location: index.php");
								} else {
									echo "Sai username hoac password";
								}
							}
						include 'view/home/login.php';
						break;	
					case 'logout':
						unset($_SESSION['login']);
						header("Location: index.php?login.php");
							# code...
							break;
				default:
					# code...
					break;
			}
		}
	}
?>