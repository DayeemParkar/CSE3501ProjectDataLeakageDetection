<?php
// Start a session for error reporting
include 'config.php';

session_start();

// Get our POSTed variables
$id = $_GET['id'];

 //$con = mysqli_connect("sql6.freemysqlhosting.net","sql6453269","13gSHbLs1b");
                                if (!$con)
                                    echo('Could not connect: ' . mysqli_error());
                                else
                                {
                                    //mysqli_select_db( $con,"sql6453269");
	$sql = "delete from presentation where subject='$id'";
	$result = mysqli_query($con,$sql) or die ("Could not insert data into DB: " . mysqli_error());
	header("Location: https://cse3501project.herokuapp.com/admin/admin.php");
	exit;
								}
?>
