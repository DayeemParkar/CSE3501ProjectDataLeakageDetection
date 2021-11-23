<?php 
session_start();

$con = mysqli_connect("sql6.freemysqlhosting.net","sql6453269","13gSHbLs1b");

if (!$con)
    echo('Could not connect: ' . mysqli_error());
else {
    mysqli_select_db($con,"sql6453269" );
    $sql = "UPDATE leaker SET probability=0.0 WHERE 1=1 ";
    $result = mysqli_query($con,$sql) or die ("Could not send data into DB: " . mysqli_error($con));
    header("Location: https://cse3501project.herokuapp.com/admin/leakfile.php");
}
?>
