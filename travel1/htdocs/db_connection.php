<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "book_db";

// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection
  if ($conn->connect_error) {
   die("Connection faild: " .$conn->connect_error);
}
/*echo "Connected successfully";*/
//close eka dann epa

?>