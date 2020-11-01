<?php

//Connecting to database
$servername = "localhost";
$username = "root";
$password = "";
$database = "user";

//Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("<br>Failed to connect" . mysqli_connect_error());
}
