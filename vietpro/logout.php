<?php 
session_start();
ob_start();
if($_SESSION['user_name'] AND $_SESSION['user_level']){
	session_destroy();
	header('location:login.php');
}
else{
	echo "404";
 
}

?>