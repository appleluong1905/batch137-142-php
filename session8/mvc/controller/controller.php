<?php 
	include 'model/model.php';
	class Controller {
		public function handleRequest() {
			// xu ly cong viec
			// model
			$model = new Model();
			$information = $model->getInfo();
			//show thong tin ra view
			include 'view/home/show_info.php';
		}
	}
?>