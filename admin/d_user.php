<?php
// Start a session for error reporting
session_start();





// Get our POSTed variables
$id = $_GET['id'];




 $con = mysqli_connect("sql5.freemysqlhosting.net","sql5451502","6NrWzphBie");
                                if (!$con)
                                    echo('Could not connect: ' . mysqli_error());
                                else
                                {
                                    mysqli_select_db($con,"sql5451502" );
	$sql = "delete from register where username='$id'";
	$result = mysqli_query($con,$sql) or die ("Could not insert data into DB: " . mysqli_error());
	header("Location: https://cse3501project.herokuapp.com/admin/admin.php");
	exit;
								}
?>
