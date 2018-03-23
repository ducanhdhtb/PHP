<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE);

switch ($_GET['page']) {
	case 'edit_user':
		# code...
	include_once('edit_user.php');
		break;
	
	
	case 'del_user':
		# code...
	include_once('del_user.php');
		break;

	default:
		# code...
	include_once('list_user.php');
		break;
}
 ?>