<?php
$username = $_POST["username"]; //Set UserName
$password = $_POST["password"]; //Set Password
$msg ='';
if(isset($username, $password)) {
    ob_start();
    include('config.php'); //Initiate the MySQL connection
    // To protect MySQL injection (more detail about MySQL injection)
    $myusername = stripslashes($username);
    $mypassword = stripslashes($password);
    $myusername = mysqli_real_escape_string($dbC, $myusername);
    $mypassword = mysqli_real_escape_string($dbC, $mypassword);
    $sql="SELECT * FROM register WHERE userid ='$myusername' and password ='$mypassword'";
    $result=mysqli_query($dbC, $sql);
    // If result matched $myusername and $mypassword
    if(mysqli_num_rows($result) != 0){
        // Register $myusername, $mypassword and redirect to file "user.php"
        $_SESSION['admin']= "admin";
        $_SESSION['password']= "password";
        session_start();
        $_SESSION['name']= $myusername;
        header("location:https://cse3501project.herokuapp.com/user/user.php");
    }
    else {
        $msg = "Wrong Username or Password. Please retry";
        $alert = "<script>alert(" . $mypassword . ")</script>";
        echo $alert;
        header("location:https://cse3501project.herokuapp.com?msg=$msg");
    }
    ob_end_flush();
}
else {
    header("location:https://cse3501project.herokuapp.com?msg=Please enter some username and password");
}
?>
