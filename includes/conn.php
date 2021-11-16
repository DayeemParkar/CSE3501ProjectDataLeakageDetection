<?php

// Input your information for the database here

// Host name
$host = "sql5.freemysqlhosting.net";

// Database username
$username = "sql5451502";

// Database password
$password = "6NrWzphBie";

// Name of database
$database = "sql5451502";

$conn = mysqli_connect($host, $username, $password) or die ("Could not connect");
$db = mysqli_select_db($conn, $database) or die ("Could not select DB");

?>
