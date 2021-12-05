<?php
// Start a session for error reporting
include 'config.php';

session_start();

// Get our POSTed variables
$a1 = $_POST['a1'];
$a2 = $_POST['a2'];
$a3 = $_POST['a3'];

$a2 = mysqli_real_escape_string($con, $a2);
$a3 = mysqli_real_escape_string($con, $a3);

if (!$con)
	echo('Could not connect: ' . mysqli_error());
else
{
	if ($a1 contains '<' || $a2 contains '<' || $a3 contains '<')
	{
		echo "<script>alert('Invalid message content');</script>";
	}
	else
	{
		$sql = "insert into msg (sender, email, reciver, msg) values ('$_SESSION[name]', '$a1','$a2', '$a3')";
		$result = mysqli_query($con,$sql) or die ("Could not insert data into DB: " . mysqli_error());
		header("Location: https://cse3501project.herokuapp.com/admin/admin.php");
		exit;
	}
}
?>
