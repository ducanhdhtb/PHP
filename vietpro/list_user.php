
<?php 
session_start();
ob_start();
?>
<?php 
if(isset($_SESSION['user_name']) AND $_SESSION['user_level'] == 2){

	include_once('database.php');
	include_once('user.php');
	$user = new user();
	$sql = "Select * from user";
	$user->query($sql);
	$row =$user->fetch_data();


	?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<div class="container">
		<h5>Welcome :<span style="color:red;font-weight: bold"><?php echo $_SESSION['user_name']; ?></span>|<a href="logout.php">Logout</a></h5>          
		<table class="table">
			<thead>
				<tr>
					<td colspan="2"><a href="http://localhost/vietpro/login.php">Add user</a></td>
				</tr>
				<tr>
					<th>User_name</th>
					<th>User_pass</th>
					<th>User_level</th>
					<th>Update</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				<?php while($row = $user->fetch_data()){ ?>
				<tr>
					<td><?php echo $row['user_name'] ?></td>
					<td><?php echo $row['user_pass'] ?></td>
					<td><span style="color:red;font-weight:bold"><?php  if($row['user_level'] == 1){echo "Admin";}elseif($row['user_level'] == 2){echo "Member";} else{echo "Unknows";}?></span></td>
					<td><a href="index.php?page=edit_user&id=<?php echo $row['user_id'] ?>">Update</a></td>
					<td><a href="index.php?page=del_user&id=<?php echo $row['user_id'] ?>" 	
						onClick="return confirm('Are you absolutely sure you want to delete?')">Delete</a></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>

			<?php
		}
		else{
			header('location:login.php');
		}

		?>
