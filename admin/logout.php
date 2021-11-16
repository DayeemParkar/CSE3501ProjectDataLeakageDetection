<?php
session_start(); //Start the current session
session_destroy(); //Destroy it! So we are logged out now
header("https://cse3501project.herokuapp.com?msg=Successfully Logged out"); // Move back to login.php with a logout message
?>
