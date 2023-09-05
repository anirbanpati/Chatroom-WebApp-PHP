<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "chatroom";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

//Check for connection success
if(!$conn){
  die("connection to this database failed due to" . mysqli_connect_error());
}

?>