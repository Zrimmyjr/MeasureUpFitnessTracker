<?php
include 'includes/head.php';
?>
<?php
include 'includes/header.php';
?>
<body>
  <?php
//Program automatically includes the php connection file for to our dataserver
require_once 'connection.php' ;

$sql = "SELECT gender, event, location, event_year, medal, name, nationality, result, olympic FROM OLYMPIANS}";
$result = $conn->query($sql);

//Fetches all rows held within the database using sql queries transferred over the connection
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Gender: " . $row["gender"]. " - Event: " . $row["event"]. " - Location: " . $row["location"]. " - Year: " . $row["event_year"]. " -Medal: " . $row["medal"]. " - Name: " . $row["name"] . " - Nationality: " . $row["nationality"] . " - Result: " . $row["result"] . " - Olympic: " . $row["olympic"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
<?php
include 'includes/footer.php';
?>