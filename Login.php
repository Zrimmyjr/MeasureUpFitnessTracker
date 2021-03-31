<?php
include_once 'includes\head.php';
?>
<?php
include_once 'includes\header.php';
?>
<h1>Log in</h1>
<p>No Account? <a href="sign up.php">REGISTER HERE!</a></p>
	<div class = userform>
<form action = "includes/login-inc.php" method = "post">
	<input type="text" name="username" placeholder = "Username">
	<input type="password" name="password" placeholder = "Password">
	<input type="submit" name="submit" value = "submit">
</form>
</div>
<?php
include_once 'includes\footer.php';
?>