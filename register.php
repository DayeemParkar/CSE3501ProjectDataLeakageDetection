<html>
<body>
<?php
// Start a session for error reporting
session_start();
// Call our connection file
require("includes/conn.php");



// Get our POSTed variables
$uname = $_POST['uname'];
$uid = $_POST['uid'];
$pass = $_POST['pass'];
$email=$_POST['email'];

	$sql = "insert into register ( username, userid, password, emailid) values ('$uname', '$uid','$pass', '$email')";
	$result = mysqli_query($conn, $sql) or die ("Could not insert data into DB: " . mysqli_error($conn));
	$sql = "insert into leaker ( id, name, probability) values ('$uid', '$uname', 0.0)";
	$result = mysqli_query($conn, $sql) or die ("Could not insert data into DB: " . mysqli_error($conn));
	header("Location:https://cse3501project.herokuapp.com/userlogin.php");

?>
</body>
</html>
