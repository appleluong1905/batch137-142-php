<a href="index.php?action=home">Home page</a>
 | <a href="index.php?action=news">News</a>
 | <a href="index.php?action=products">Products</a>
 | <a href="index.php?action=contact">Contact</a>
 <br>
<?php 
	include 'controller/controller.php';
	$controller = new Controller();
	$controller->handleRequest();
?>