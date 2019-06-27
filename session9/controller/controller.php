<?php 
	include 'model/model.php';
	class Controller {
		public function handleRequest() {
			// xu ly cong viec
			$action = isset($_GET['action'])?$_GET['action']:'home';
			$model = new Model();
			switch ($action) {
				case 'home':
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
					$idUser = $_GET['id'];
				  if ($model->deleteUser($idUser) === TRUE) {
				  	header("Location: index.php");
				  }
					break;
				case 'add_user':
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
				default:
					# code...
					break;
			}
		}
	}
?>