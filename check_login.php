<?php
session_start();

$username = $_POST['username']; //Set UserName
$password = $_POST['password']; //Set Password

$isValid = false;
    if (isset($_SESSION["attemptTime"])) {
        if (time() - $_SESSION["attemptTime"] > 30) {
            $_SESSION["attemptTime"] = time();
            $isValid = true;
        }
        else {
            $msg = "Wrong Username or Password. Please retry";
            header("location:https://cse3501project.herokuapp.com?msg=$msg");
        }
    }
    else {  //first access no session
        $isValid = true;
        $_SESSION["attemptTime"] = time();
    }

if ($isValid) {
$msg ='';
if(isset($username, $password)) {
    ob_start();
    include('config.php'); //Initiate the MySQL connection
    // To protect MySQL injection (more detail about MySQL injection)
    $myusername = stripslashes($username);
    $mypassword = stripslashes($password);
    $myusername = mysqli_real_escape_string($con, $myusername);
    $mypassword = mysqli_real_escape_string($con, $mypassword);
    $sql="SELECT * FROM admin WHERE username ='$myusername' and password =('$mypassword')";
    $result=mysqli_query($con, $sql);
    // Mysql_num_row is counting table row
    $count=mysqli_num_rows($result);
    // If result matched $myusername and $mypassword, table row must be 1 row
    if($count==1){
        // Register $myusername, $mypassword and redirect to file "admin.php"
        $_SESSION['admin']= "admin";
        $_SESSION['password']= "password";
        session_start();
        $_SESSION['name']= $myusername;
        header("location:admin/admin.php");
    }
    else {
        $msg = "Wrong Username or Password. Please retry";
        header("location:https://cse3501project.herokuapp.com?msg=$msg");
    }
    ob_end_flush();
}
else {
    header("location:https://cse3501project.herokuapp.com?msg=Please enter some username and password");
}
}
?>
