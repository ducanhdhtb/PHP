<!DOCTYPE html>
<html>
<head>
	<title>Session</title>
</head>
<body>
<?php 
	session_start();

	if(isset($_POST['submit']))
	{
		$user = $_POST['username'];
		$pass = $_POST['password'];
		if($user == 'ducanh' && $pass == 'ducanh123')
		{
			$_SESSION['user'] = $user;
			$_SESSION['pass'] = $pass;
			header('location:admincp.php');
		}
		else{
			header('location:index.php');
		}
	}
	
 ?>
 <?php if(!isset($_SESSION['user'])) { ?>
 	<form action="index.php" method="post">
		<tr>
			<td>Username</td>
			<td><input type="text" name="username" ></input></td>
		</tr>
		<br>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" ></input></td>
		</tr>
			
		<tr>
			<td colspan="2"><input type="submit" name="submit" value="Sign in"></input></td>
		</tr>
	</form>
	
	<?php }
		else{
			header('location:admincp.php');
		}
	 ?>

</body>
</html>