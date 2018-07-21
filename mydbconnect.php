<?php


// Create connection
$conn = new mysqli("localhost","root", "","itproject");    //obtaining a new connection with the database server

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);   //checking if connection was made if not print error message
}

?>
