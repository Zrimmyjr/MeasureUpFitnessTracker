<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
//$DB_SERVER = "13.58.77.127";
//$DB_USERNAME = "root";
//$DB_PASSWORD = "999A";
//$DB_NAME = "users";
$DB_SERVER = "localhost:3307";
$DB_USERNAME = "ADMIN";
$DB_PASSWORD = "e0oRocCn5IzNRWMU";
$DB_NAME = "userdb";
/* Attempt to connect to MySQL database */
$conn = mysqli_connect($DB_SERVER,$DB_USERNAME,$DB_PASSWORD,$DB_NAME);
 
// Check connection
if(!$conn){
    die("ERROR: Could not connect. ");
}
?>
	