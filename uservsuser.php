<?php include 'includes/head.php'; 
include 'includes/header.php';
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
?>
<h1>User Comparison</h1>
<p>Compare yourself against the best in the world!</p>
<form method="post" action="uservsuser.php">
	<input type = "text" name= "challenger_username" placeholder="Enter challenger's username: ">
	<select name = "event" id="event">
		<option value="10000M Men">10000M Men</option>
		<option value="100M Men">100M Men</option>
		<option value="110M Hurdles Men">110M Hurdles Men</option>
		<option value="1500M Men">1500M Men</option>
		<option value="200M Men">200M Men</option>
		<option value="20Km Race Walk Men">20Km Race Walk Men</option>
		<option value="3000M Steeplechase Men">3000M Steeplechase Men</option>
		<option value="400M Hurdles Men">400M Hurdles Men</option>	
		<option value="400M Men">400M Men</option>
		<option value="4X100M Relay Men">4X100M Relay Men</option>
		<option value="4X400M Relay Men">4X400M Relay Men</option>
		<option value="5000M Men">5000M Men</option>
		<option value="50Km Race Walk Men">50Km Race Walk Men</option>	
		<option value="800M Men">800M Men</option>
		<option value="Decathlon Men">Decathlon Men</option>
		<option value="Discus Throw Men">Discus Throw Men</option>
		<option value="Hammer Throw Men">Hammer Throw Men</option>
		<option value="High Jump Men">High Jump Men	</option>
		<option value="Javelin Throw Men">Javelin Throw Men</option>
		<option value="Long Jump Men">Long Jump Men</option>
		<option value="Marathon Men">Marathon Men</option>
		<option value="Pole Vault Men">Pole Vault Men</option>
		<option value="Shot Put Men">Shot Put Men	</option>
		<option value="Triple Jump Men">Triple Jump Men</option>
		<option value="10000M Women">10000M Women</option>
		<option value="100M Hurdles Women">100M Hurdles Women</option>
		<option value="100M Women">100M Women</option>
		<option value="1500M Women">1500M Women</option>	
		<option value="200M Women">200M Women</option>
		<option value="20Km Race Walk Women">20Km Race Walk Women</option>
		<option value="3000M Steeplechase Women">3000M Steeplechase Women</option>
		<option value="400M Hurdles Women">400M Hurdles Women</option>
		<option value="400M Women">400M Women</option>	
		<option value="4X100M Relay Women">4X100M Relay Women</option>
		<option value="4X400M Relay Women">4X400M Relay Women</option>
		<option value="5000M Women">5000M Women</option>
		<option value="800M Women">800M Women</option>
		<option value="Discus Throw Women">Discus Throw Women</option>	
		<option value="Hammer Throw Women">Hammer Throw Women</option>
		<option value="Heptathlon Women">Heptathlon Women</option>
		<option value="High Jump Women">High Jump Women</option>
		<option value="Javelin Throw Women">Javelin Throw Women</option>
		<option value="Long Jump Women">Long Jump Women</option>	
		<option value="Marathon Women">Marathon Women</option>
		<option value="Pole Vault Women">Pole Vault Women</option>
		<option value="Shot Put Women">Shot Put Women</option>
		<option value="Triple Jump Women">Triple Jump Women</option>
</select>
	<input type = "submit" name = "submit">
</form> 
<br>

<?php
require 'includes/connection.php';
?>
<?php
if(isset($_SESSION['username'])){
	$usr = new Measureup();
	$usr->connectDB();
	$id = $_SESSION['session_ID'];
	if((isset($_POST['challenger_username'])) && (isset($_POST['event'])) && isset($_POST['submit'])){
		    $event=($_POST['event']);
			$challenger_username=strval($_POST['challenger_username']);
            $username=$_SESSION['username'];
		    $sql = "SELECT * FROM usersresults WHERE id = ? AND event = ?;";
		    $result = $usr->selectIdEventQuery($sql, $id, $event);
			?><div><?php $usr->display_data($result);?></div><?php
			$sql = "SELECT id FROM users where username = ?";
		    $result = $usr->selectIdQuery($sql, $challenger_username);
			foreach ($result as $key =>$var)
			$challenger_id = $var['id'];
			$sql = "SELECT * FROM usersresults WHERE id = ? and event = ?;";
 			$result = $usr->selectIdEventQuery($sql, $challenger_id, $event);
			?><div><?php $usr->display_data($result);?></div><?php
	}
}
		else {
		?>
	<p><?php echo "Login Required!"; ?> <a href="Login.php">Log in here!</a></p>
<?php
 }
?>
		</div>
		
<?php
include_once('includes/footer.php');
?>