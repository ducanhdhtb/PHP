<?php 
	include_once('user.php');
	$id = $_GET['id'];
	$user = new user();
	$user->set_user_id($id);
	$user->del_user();
	header('location:index.php');
 ?>