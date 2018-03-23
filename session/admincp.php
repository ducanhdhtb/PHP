<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin control panel</title>
</head>
<body>
<?php 
if(isset($_SESSION['user'] )) {?>
<h2>lorem ipsum dolorsit adesss sidama </h2>
<h2>lorem ipsum dolorsit adesss sidama </h2>
<h2>lorem ipsum dolorsit adesss sidama </h2>
<h2>lorem ipsum dolorsit adesss sidama </h2>
<h2>lorem ipsum dolorsit adesss sidama </h2>
<a href="del.php">Del session</a>
<?php }
	else
	{
		header('location:index.php');
	} 
	?>
</body>
</html>