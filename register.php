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

$sql = "SELECT subject, Topic, fname FROM presentation";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<br>". $row["subject"]. " ". $row["Topic"]. " " . $row["fname"];
    }
}
/*$sql = 'SELECT * FROM presentation';
$retval = mysqli_query($con,$sql) or die (mysqli_error($conn));
if(!$retval){
die(mysqli_error($conn));
}
else{
while($row = mysqli_fetch_assoc($retval)){
echo "<br>".$row['subject']." ".$row['Topic']." ".$row['fname'];
}
}*/
	/*$sql = "insert into register ( username, userid, password, emailid) values ('$uname', '$uid','$pass', '$email')";
	$result = mysqli_query($conn, $sql) or die ("Could not insert data into DB: " . mysqli_error($conn));
	$sql = "insert into leaker ( id, name, probability) values ('$uid', '$uname', 0.0)";
	$result = mysqli_query($conn, $sql) or die ("Could not insert data into DB: " . mysqli_error($conn));
	header("Location:https://cse3501project.herokuapp.com/userlogin.php");
	exit;*/

?>
</body>
</html>
