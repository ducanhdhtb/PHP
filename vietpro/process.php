<?php 
session_start();
ob_start();
include_once('user.php');
if($_POST['submit_name']){
	
	$user_name = $_POST['user_name'];
	$user_pass = $_POST['user_pass'];
	$user = new user();
	$user->set_user_name($user_name);
	$user->set_user_pass($user_pass);
	if($user->login() == 'user_valid'){
		header('location:index.php');
	}
	else{
		header('location:login.php');
	}
	
}

?>