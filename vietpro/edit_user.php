<?php 
if(isset($_SESSION['user_name']) AND $_SESSION['user_level'] == 2){
	echo "edit_user";
}
	else{
		header('location:login.php');
	}
 ?>