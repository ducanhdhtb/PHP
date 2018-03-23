<?php 
include_once('database.php');
include_once('user.php');

if(isset($_POST['create'])){
$user = $_POST['user_name'];
$pass = $_POST['user_pass'];
$level = $_POST['select'];
$user1 = new user();

$user1->set_user_name($user);
$user1->set_user_pass($pass);
$user1->set_user_level($level);
if($user1->add_user() == "user exist"){
	echo "Tai khoan da ton tai";
}
else{
	header('location:index.php');
}
}