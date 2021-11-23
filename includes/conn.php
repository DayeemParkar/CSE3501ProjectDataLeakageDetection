<?php

// Host name
$host = "sql6.freemysqlhosting.net";

// Database username
$username = "sql6453269";

// Database password
$password = "13gSHbLs1b";

// Name of database
$database = "sql6453269";

$conn = mysqli_connect($host, $username, $password) or die ("Could not connect");
$db = mysqli_select_db($conn, $database) or die ("Could not select DB");

?>
