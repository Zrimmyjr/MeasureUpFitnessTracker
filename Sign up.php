<?php
include 'includes/head.php';
?>
<?php
include 'includes/header.php';
?>
<h1> Sign Up with Measure Up! </h1>
<p> Already have an account? <a href = "login.php">Login!</a></p>
<div class="userform">
	<form action="includes/userform.php" method="post">
		
		<label for="first_name"> First Name: </label>
		<input type = "text" name="first_name"><br>
		<label for="last_name"> Last Name: </label>
		<input type = "text" name="last_name"><br>
		<label for="gender"> Gender: </label>
		<input type = "text" name="gender" ><br>
		<label for="username"> Username: </label>
		<input type = "text" name="username"><br>
		<label for="password"> Password: </label>
		<input type = "password" name="password"><br>
		<label for="confirm_password"> Confirm password: </label>
		<input type = "password" name="confirm_password"><br>
		<label for="email"> Email: </label>
		<input type="text" name = "email"><br>
		<label for="confirm_email"> Confirm Email: </label>
		<input type="text" name = "confirm_email"><br>
		<br>
		<button type="submit" name = "submit"> SUBMIT </button>
	</form>
	</div>
<?php 
include 'includes/footer.php';
?>