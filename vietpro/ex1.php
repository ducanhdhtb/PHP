<?php 
	ob_start();
	session_start();
	include('__autoload.php');
	if($_Session['user_name'] == 'admin' && $_Session['user_level'] ==2 ){
		include_once('admincp.php');
	}
	else{
		include_once('login.php');
	}

 ?>