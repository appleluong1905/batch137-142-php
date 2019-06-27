<?php 
session_start();

$_SESSION['name'] = 'Aptech DN ok';

echo $_SESSION['name'];

unset($_SESSION['name']);
?>