<?php
include 'includes/head.php';
include 'includes/header.php';
//Program automatically includes the php connection file for to our dataserver
require_once 'connection.php' ;

$sql = "SELECT id,first_name,last_name,gender,username,password,email FROM users";
$result = mysqli_query($conn,$sql);
$row_count = mysqli_num_rows($result);
//Fetches all rows held within the database using sql queries transferred over the connection
if ($row_count > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row["id"]. " - First name: " . $row["first_name"]. " - Last name: " . $row["last_name"]. " - Gender: " . $row["gender"]. " - Username: " . $row["username"]. " - Password: " . $row["password"] . " - Email: " . $row["email"] . "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
include 'includes/footer.php';
?>