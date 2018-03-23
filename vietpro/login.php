
<link rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script language="javascript" src="js.js"></script>
<div class="login-page">
  <div class="form">
     <form class="register-form" method="post" action="process2.php">
   <input name="user_name" type="text" placeholder="name"/ >
   <input name="user_pass" type="password" placeholder="password"/ >
<div class="form-group">
  <label for="sel1"></label>
  <select class="form-control" id="sel1" name="select">
    <option value="0">Please select a role</option>
    <option value="1">Admin</option>
    <option value="2">Member</option>
  </select>
</div>
      <input type="submit" name="create" value="Create">
   <p class="message">Already registered? <a href="#">Sign In</a></p>
 </form> 

    <h3>Login</h3>
    <form class="login-form" method="post" action="process.php">
      <input type="text" placeholder="username"/ name="user_name">
      <input type="password" placeholder="password"/ name ="user_pass">
      <input type="submit" name="submit_name" value="Login">
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
