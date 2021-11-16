<?php
// Start a session for error reporting
session_start();





// Get our POSTed variables
$a1 = $_POST['a1'];
$a2 = $_POST['a2'];
$a3 = $_POST['a3'];



 $con = mysqli_connect("sql5.freemysqlhosting.net","sql5451502","6NrWzphBie");
                                if (!$con)
                                    echo('Could not connect: ' . mysqli_error());
                                else
                                {
                                    mysqli_select_db( $con,"sql5451502");
	$sql = "insert into msg (sender, email, reciver, msg) values ('$_SESSION[name]', '$a1','$a2', '$a3')";
	$result = mysqli_query($con,$sql) or die ("Could not insert data into DB: " . mysqli_error());
	header("Location: https://cse3501project.herokuapp.com/admin/admin.php");
	exit;
								}
?>
