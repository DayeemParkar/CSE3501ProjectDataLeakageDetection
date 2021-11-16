<?php
session_start(); //Start the current session
session_destroy(); //Destroy it! So we are logged out now
header("location:https://cse3501project.herokuapp.com?msg=Successfully Logged out"); 
?>
