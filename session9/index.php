<?php session_start(); ?>
<a href="index.php?action=home">Home page</a>
 | <a href="index.php?action=news">News</a>
 | <a href="index.php?action=products">Products</a>
 | <a href="index.php?action=contact">Contact</a>
 <br>
 <?php if (isset($_SESSION['login'])) {
 	echo $_SESSION['login'].' '."<a href='index.php?action=logout'>Logout</a>";
 	} 
 ?>
<?php 
	include 'controller/controller.php';
	$controller = new Controller();
	$controller->handleRequest();
?>