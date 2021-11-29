<?php

// Host name
$host = "www.db4free.net";

// Database username
$username = "cse3501";

// Database password
$password = "cse3501p";

// Name of database
$database = "cse3501p";

$conn = mysqli_connect($host, $username, $password) or die ("Could not connect");
$db = mysqli_select_db($conn, $database) or die ("Could not select DB");

?>
